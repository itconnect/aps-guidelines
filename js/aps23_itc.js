(function(){
	APS = {
		'storedData': {
			'currentSlide':'intro'
		},
		addListeners: function () {
			// Listen for initilization
			$('.aps-init').click(function(){
				// Check for previously stored data
				if (localStorage.APS) {
					APS.changeSlide('aps-restart');
				} else {
					// Create new object which gets stored in localStorage
					APS.createStorage();
					// Chage to the first slide
					APS.changeSlide($(this).data('aps-goto'));
				}				
			});

			// Add listeners to all option buttons
			$('.aps-option').each(function(){ 
				$(this).on('click', function(){
					if ($(this).data('aps-branch')) {
						// store the value in APS.storedData then update local storage
						APS.storedData['branch'] = $(this).data('aps-branch');
						APS.storedData['values'] = {};
					} else if ($(this).closest('.slide').data('aps-slide') && $(this).closest('.slide').data('aps-slide').length) {
						if ($(this).hasClass('required')) {
							var slide = $(this).closest('.slide').attr('id'),
							    empty = false;

							$('#' + slide + ' .error').remove();

							$('.slide#' + slide + ' :input').each(function(){
								if ($(this).val().length < 1) {
									$(this).after($('<span/>',{
										'class': 'error required-error inline',
										'text': '* Required'
									}));
									empty = true;
								}
							});
							if (empty) {
								$(this).before($('<div/>',{
									'class': 'error required-error-wrap',
									'html': $('<span/>',{
										'class': 'required-error',
										'text': 'Please fill out the required fields marked above.'
									})
								}));
								$('.required-error.inline').each(function(){
									$(this).animate({'font-size':'19px'}, 250, function(){
										$(this).animate({'font-size':'17px'}, 250)
									});
								});
								$(this).blur();
								return false;
							}
						}
						slide = $(this).closest('.slide');
						// if this is collecting data, it needs to be stored before changing slides.
						// Otherwise, store the value in APS.storeddata
						if (slide.data('aps-input') && slide.data('aps-input') == true) {
							APS.processForm($(this).closest('.aps-form'));
						}

						APS.storedData.values[slide.data('aps-slide')] = $(this).data('aps-value');

					}
					APS.changeSlide($(this).data('aps-goto'));
				});
			});

			// Restart the process
			$('.aps-restart').each(function(){
				$(this).on('click', function(){
					$('.recap').hide();
					$('.slide .error').remove();
					if ($(this).data('aps-restart') == 'yes') {						
						APS.createStorage();
						APS.changeSlide('aps-1');
					} else if ($(this).data('aps-restart') == 'no') {
						APS.retrieveStorage();
						APS.changeSlide(APS.storedData.currentSlide);
					}
				});
			});

			// Popup with WA CIO R/S calculator
			$('.cio-assessment').each(function(){
				$(this).click(function(event){
					event.preventDefault();
					window.open('https://ocio.wa.gov/risk-severity-calculator#main-content','cio','width=900,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
					return false;
				});
			});

			$('#back-to-start').on('click', function(){
				APS.changeSlide('aps-0');
			});

			$('#back-one-slide').on('click', function(){
				APS.changeSlide(APS.storedData['lastSlide']);
				$('#back-one-slide').hide();
			});
		},
		changeSlide: function(slide) {
			$('.aps .slide').each(function(){
				$(this).fadeOut(400);
			});
			
			// Update the change in slide in storage / localstorage (if not restart or splash)
			if (slide != 'aps-restart' && slide != 'aps-0') {
				if (APS.storedData['currentSlide']) {
					APS.storedData['lastSlide'] = APS.storedData['currentSlide'];
					$('#back-one-slide').show();
				}
				APS.storedData['currentSlide'] = slide;
				APS.updateStorage();
			}	
			if (slide == 'recap') {
				this.showRecap();
			}

			//resize if necessary
			if (($('#' + slide).height() + 40) >= $('#aps').height()) {
				$('#aps').animate({'height': ($('#' + slide).height()) + 40 + 'px'});
			}

			$('#' + slide).fadeIn(400);
			console.log(APS.storedData['lastSlide']);
			$('#' + APS.storedData['lastSlide']).attr('aria-hidden', 'true');
			$('#' + slide).attr('aria-hidden', 'flase');
		},
		createStorage: function() {
			APS.storedData = {
				'branch': null,
				'values': {
	
				}
			}
			// Stores data in local storage if possible
			if (this.storageAvailable('localStorage')) {
				localStorage.setItem("APS",JSON.stringify(APS.storedData));
			} 
		},
		processForm: function(data) {
			var formname = data.attr('id');
			var formdata = data.serializeArray();
			APS.storedData.values[formname] = {};
			// loop through the array, grab each object
			for (i = 0; i < formdata.length; i++) {
				APS.storedData.values[formname][formdata[i].name] = formdata[i].value;
			}
		},
		updateStorage: function() {
			// Writes info storedin APS.storedData to localStorage as a string
			if (this.testJSON()) {
				localStorage.setItem('APS',JSON.stringify(APS.storedData));
			}
		},
		retrieveStorage: function() {
			// Grabs data from local storage, sends to parser and writes to APS.storedData
			if (this.testJSON()) {
				APS.storedData = JSON.parse(localStorage.getItem('APS')); 
			}
		},
		showRecap: function() {
			branch = APS.storedData.branch;
			switch (branch) {
			  case 'aca':
			    this.recaps.aca();
			    break;
			  case 'non':
			    this.recaps.non();
			    break;
			  default:
			    console.log("Something went wrong...");
			}
		},
		storageAvailable: function(type) {
			try {
				var storage = window[type],
					x = '__storage_test__';
				storage.setItem(x, x);
				storage.removeItem(x);
				return true;
			}
			catch(e) {
				return false;
			}
		},
		testJSON: function() {
			if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
			    return true;
			}
			return false;
		},
		recaps: {
			aca: function() {
				var level = APS.storedData.values.level,
					highcost = APS.storedData.values.highcost,
					multi = APS.storedData.values.multi;

				//$('#aca-basics').append(this.compileBasics('form-aca-basics'));
				$('#aca-basics').show();

				// Level 1
				if (level == '1') {
					if (highcost == false && multi == false) {
						this.compileBasics('form-aca-basics', 'aca-1');
						$('#aca-1').show();
					} else if (highcost == false && multi == true) {
						this.compileBasics('form-aca-basics', 'aca-2');
						$('#aca-2').show();
					} else if (highcost == true && multi == false) {
						this.compileBasics('form-aca-basics', 'aca-3');
						$('#aca-3').show();
					} else if (highcost == true && multi == true) {
						this.compileBasics('form-aca-basics', 'aca-4');
						$('#aca-4').show();
					}
				// Level 2
				} else if (level == '2' || level == '3') {
					// Set level, initial investment, system life
					$('#recap-level').text(level);
					$('#recap-investment').text(APS.storedData.values['form-cost']['initial_investment']);
					$('#recap-5yr').text(APS.storedData.values['form-cost']['system_life']);

					if (APS.storedData.values.multi == 'none') {
						$('#recap-multi').text('No other departments will use this system or service.');
					} else {
						$('#recap-multi').text(APS.storedData.values['form-multi']['description']);
					}

					if (APS.storedData.values.central == 'none') {
						$('#recap-central').text('Central compuring resources or services are not required.');
					} else {
						$('#recap-central').text(APS.storedData.values['form-central']['description']);
					}

					$('#recap-duration').text(APS.storedData.values['form-duration']['duration']);

					this.compileBasics('form-aca-basics', 'aca-5');
					$('#aca-5').show();
				}
			},
			non: function() {
				var level = APS.storedData.values.level;

				// Level 1
				if (level == '1') {
					var	highcost = APS.storedData.values.highcost,
						multi = APS.storedData.values.multi,
						large = false;
					if (APS.storedData.values['highcost'] == true) {
						$('#recap-highcost').show();
						large = true;
					} else {
						$('#recap-lowcost').show();
					}

					if (APS.storedData.values.multi == 'none') {
						$('#recap-multi-non').text('No other departments will use this system or service.');
					} else {
						$('#recap-multi-non').text(APS.storedData.values['form-multi']['description']);
						large = true;
					}

					if (APS.storedData.values.central == 'none') {
						$('#recap-central-non').text('Central compuring resources or services are not required.');
					} else {
						$('#recap-central-non').text(APS.storedData.values['form-central']['description']);
						large = true;
					}

					$('#recap-duration-non').text(APS.storedData.values['form-duration']['duration']);

					if (large) {
						$('#recap-non-long').show();
						$('#recap-non-short').hide();
					} 

					this.compileBasics('form-non-basics', 'non-1');
					$('#non-1').show();
				// Level 2
				} else if (level == '2' || level == '3') {
					$('#recap-level-non').text(level);
					
					$('#recap-investment-non').text(APS.storedData.values['form-cost']['initial_investment']);
					$('#recap-5yr-non').text(APS.storedData.values['form-cost']['system_life']);


					if (APS.storedData.values.multi == 'none') {
						$('#recap-multi-non-complex').text('No other departments will use this system or service.');
					} else {
						$('#recap-multi-non-complex').text('The project will affect multiple departments in the following way: ' + APS.storedData.values['form-multi']['description']);
						large = true;
					}

					if (APS.storedData.values.central == 'none') {
						$('#recap-central-non-complex').text('Central compuring resources or services are not required.');
					} else {
						$('#recap-central-non-complex').text('The project require central computing resources in the following way: ' + APS.storedData.values['form-central']['description']);
						large = true;
					}

					$('#recap-duration-non-complex').text(APS.storedData.values['form-duration']['duration']);
					this.compileBasics('form-non-basics', 'non-2');
					$('#non-2').show();
				}
			},
			compileBasics: function(which, loc) {
				$('#basics-name').text(APS.storedData.values[which]['preparer_name']);
				$('#basics-dept').text(APS.storedData.values[which]['dept']);
				$('#basics-title').text(APS.storedData.values[which]['short_title']);
				$('#basics-desc').text(APS.storedData.values[which]['description']);
				$('#' + loc + ' .basics-wrap').prepend($('#basics'));
			}
		},
		init: function() {
			// Add listeners to all slide options
			this.addListeners();
		}
	}


	$(window).load(function() {
		APS.init();
	});
})();