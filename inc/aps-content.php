<div class="aps wrap" id="aps">
	<div class="top-controls">
		<a id="back-one-slide" href="javascript:void(0);">Back</a>
		<a id="back-to-start" href="javascript:void(0);">Restart</a>
	</div>
	<div class="slide active" id="aps-0">
		<h2 class="splash title">University of Washington</h2>
		<span class="splash tagline">Information Technology (IT) Project &amp; Acquisitions Procedure</span></h2>

		<p>All University of Washington (UW) technology projects and acquisitions are governed by the UW's Policy on Information Technology, Telecommunications and Networking Projects and Acquisitions (abbreviated APS 2.3). Certain processes and approvals may by required, depending on the type and size of the technology expenditures you need to make.<br /><br />These webpages help you determine what approvals and other processes are required under APS 2.3.<br /><br /><b>Before you begin:</b> Contact your internal department administrator to determine how the department handles new IT projects.</p>

		<a class="uw-btn aps-init" data-aps-goto="aps-1" href="javascript:void(0);">Let's Get Started</a>
	</div><!-- Slide 0 -->

	<div class="slide" id="aps-restart">
		<h3>It appears you've previously started or completed this process.</h3>
		<p>Would you like to start this process for a new project or acquisition, or continue from where you left off before? If you start over, all data stored in your browsers memory from previous projects will be permanently deleted.</p>
		<a class="uw-btn aps-restart" data-aps-restart="yes" href="javascript:void(0);">Start over</a><a class="uw-btn aps-restart" data-aps-restart="no" href="javascript:void(0);">Continue from where I left off</a>
	</div><!-- Slide restart -->

	<div class="slide" id="aps-1">
		<h3>Is your IT acquisition or project for academic or medical purposes?</h3>

		<p>Academic projects or acquisitions are for instruction, scholarship or research purposes, but not for the business or administrative operations that support them. <a class="aps-moreinfo" data-featherlight="#more-aca" href="#">More information</a></p>
		<!-- Popover lightbox content -->
		<div class="hidden"><div id="more-aca" class="more-info">The following acquisitions and IT system projects are examples that <u>do not qualify</u> for an Academic Exemption: administrative, business, financial, billing, payroll, personnel, budget, student record, student billing, inventory, scheduling, document imaging or management, project management, facilities management, customer relationship management, point of sale.</div></div></p>
		<!-- End popover -->

		<p>Medical projects or acquisitions are for UW Medicine IT Services or for use within one of the UW medical centers or clinics, and are limited to medical, clinical, or health care applications under management of UW Medicine.</p>

		<!-- Popover lightbox content -->
		<div class="hidden"><div id="more-med" class="more-info">More information blurb for Medically exempt projects or acquisitions...</div></div>
		<!-- End popover -->

		<p>If your project or acquisition doesn't meet the criteria for either academic or medical, select "Everything else"</p>

		<a class="uw-btn aps-option" data-aps-branch="aca" data-aps-goto="aps-aca-a" href="javascript:void(0);">Academic</a><a class="uw-btn aps-option" data-aps-branch="med" data-aps-goto="aps-med-a" href="javascript:void(0);">Medical</a><a class="uw-btn aps-option" data-aps-branch="non" data-aps-goto="aps-non-basics" href="javascript:void(0);">Everything else</a>
	</div><!-- Slide 1 -->

	<!-- ACADEMIC SLIDES ******************************************************************************** -->


	<div class="slide academic" id="aps-aca-a" data-aps-slide="academic">
		<h3>Your project or acquisition is for academic purposes.</h3>

		<p>Your project or acquisition is for use in instruction, scholarship or research purposes, but not for use by the business or administrative operations that support them.</p>

		<p>Business and administrative operations that support academics can include the following, and <u>do not qualify</u> for an Academic Exemption: administrative, billing,business, budget, customer relationship management, document imaging or management, facilities management, financial, inventory, payroll, personnel, point of sale, project management, scheduling, student billing, and student records.</p>

		<p>With that in mind, can you confirm your project or acquisition meets the criteria for Academic Exemption?</p>

		<a class="uw-btn aps-option" data-aps-value="true" data-aps-goto="aps-aca-basics" href="javascript:void(0);">Confirm</a><a class="uw-btn aps-option" data-aps-value="false" data-aps-goto="aps-1" href="javascript:void(0);">Go back</a>

	</div><!-- Slide aca a -->

	<div class="slide academic" id="aps-aca-basics" data-aps-slide="basics" data-aps-input="true">

		<h3>Let's start off with some basics</h3>

		<p>We'll need to know a little bit about your project or acquisition. In the fields below, please provide your name, department, a short title for your project or acquisition, and a brief, high-level description.</p>

		<form class="aps-form" id="form-aca-basics" >
			<div class="field">
				<label for="preparer_name">Name:</label>
				<input type="text" name="preparer_name" id="preparer_name" required>
			</div>
			<div class="field">
				<label for="dept">Department:</label>
				<input type="text" name="dept" id="dept" required>
			</div>
			<div class="field">
				<label for="short_title">Short title:</label>
				<input type="text" name="short_title" id="short_title" required>
			</div>
			<div class="field">
				<label for="description">Description:</label>
				<textarea name="description" id="description" rows="5" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			<div class="field">
				<a class="uw-btn aps-option required" data-aps-goto="aps-aca-b" href="javascript:void(0);">Submit</a>
			</div>
		</form>

	</div><!-- Slide aca basics -->

	<div class="slide academic" id="aps-aca-b" data-aps-slide="level">
		<h3>Please complete the Risk and Severity Assessment</h3>

		<p>You'll need to complete a Risk and Severity Assessment using a calculator on the Washington State Office of the Chief Information Officer's (OCIO) web site. Clicking the button below will open a popup containing the calculator.</p>

		<p>Once you've finished the assessment, <span style="color: #4b2e83; font-weight: bold;">save or print</span> the results for use later, and select the appropriate level of oversight below.</p>
		<br />
		<a href="javascript:void(0);" class="uw-btn cio-assessment">Take the assessment</a>
		<br /><br />
		<p>According to the calculator, what is the <b>overall project oversight level</b> required? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">How do I find this?</a></p>

		<!-- Popover lightbox content -->
		<div class="hidden"><div id="more-cio" class="more-info">After completing the assessment on the WA CIO website, results will be displayed on the screen. Near the top, you'll find the overall project oversight level. The location is highlighted in pink below.
		<br /><br />
		<img src="https://itconnect.uw.edu/wp-content/uploads/2016/09/cio-oversight-example.gif" width="500" height="283" alt="Example of CIO web site overall project oversight level location." />

		</div></div>
		<!-- End popover -->

		<a class="uw-btn aps-option" data-aps-value="1" data-aps-goto="aps-aca-c" href="javascript:void(0);">Level 1</a><a class="uw-btn aps-option" data-aps-value="2" data-aps-goto="aps-aca-e" href="javascript:void(0);">Level 2</a><a class="uw-btn aps-option" data-aps-value="3" data-aps-goto="aps-aca-e" href="javascript:void(0);">Level 3</a>

	</div><!-- Slide aca b -->

	<div class="slide academic" id="aps-aca-c" data-aps-slide="highcost">
		<h3>Does your project or acquisition have a high project cost or ongoing operatoins cost?</h3>

		<p>Projects or acquisitions with an <i>project cost</i> of <b>$1 million or more</b>, or with an estimated <i>five-year ongoing operatoins cost</i> of <b>$2.5 million or more</b>, are considered to have a high cost.</p>

		<p>You can use the <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">project cost</a> and <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">ongoing operatoins cost</a> worksheets to estimate the cost of your project or acquisition. 
		
		<a class="uw-btn aps-option" data-aps-value="true" data-aps-goto="aps-aca-d" href="javascript:void(0);">Yes</a><a class="uw-btn aps-option" data-aps-value="false" data-aps-goto="aps-aca-d" href="javascript:void(0);">No</a>

	</div><!-- Slide aca c -->

	<div class="slide academic" id="aps-aca-d" data-aps-slide="multi">
		<h3>Does your project or acquisition reach beyond your own department?</h3>

		<p>Will more than one department be affected by your project or acquisition, or do you need to use any central administrative computing services or resources?</p>
		
		<a class="uw-btn aps-option" data-aps-value="true" data-aps-goto="recap" href="javascript:void(0);">Yes</a><a class="uw-btn aps-option" data-aps-value="false" data-aps-goto="recap" href="javascript:void(0);">No</a>

	</div><!-- Slide aca d -->

	<div class="slide academic" id="aps-aca-e" data-aps-slide="cost" data-aps-input="true">
		
		<form class="aps-form" id="form-cost" >
			<h3>Provide some financial information about your project or acquisition:</h3>
			<p>The financial information provided will help determine your required level of oversight. Use the linked worksheets if you are unsure of the costs.</p>
			<p>What is the estimated project cost of your project or acquisition? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">project cost worksheet</a><br />
			<div class="field">
				<label for="initial_investment">Project cost:</label>
				$<input type="number" placeholder="0" min="0" max="900000000" value="" name="initial_investment" id="initial_investment" required>
			</div>
			</p>
			<p>What is the estimated five-year ongoing operatoins cost of your project or acquisition? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">ongoing operatoins cost worksheet</a><br />
			<div class="field">
				<label for="system_life">Ongoing operatoins cost:</label>
				$<input type="number" placeholder="0" min="0" max="900000000" value="" name="system_life" id="system_life" required="required" />
			</div>
			</p>
			<div class="field">
				<a class="uw-btn aps-option required" data-aps-goto="aps-aca-f" href="javascript:void(0);">Submit</a>
			</div>
		</form>

	</div><!-- Slide aca e -->

	<div class="slide academic" id="aps-aca-f" data-aps-slide="multi" data-aps-input="true">
		<form class="aps-form" id="form-multi" >
			
			<h3>Will more than one department be affected by your project or acquisition?</h3>

			<p>If your project your project or acquisition will affect multiple departments, please provide details in the box below. Otherwise, click "Doesn't Apply."</p>

			<div class="field">
				<textarea name="description" id="description" rows="7" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			
			<a class="uw-btn aps-option required" data-aps-goto="aps-aca-g" href="javascript:void(0);">Submit</a><a class="uw-btn aps-option" data-aps-value="none" data-aps-goto="aps-aca-g" href="javascript:void(0);">Doesn't apply</a>
		</form>
	</div><!-- Slide aca f -->

	<div class="slide academic" id="aps-aca-g" data-aps-slide="central" data-aps-input="true">
		<form class="aps-form" id="form-central" >
			<h3>Does your project or acquisition require central administrative computing services or resources?</h3>

			<p>If your project your project or acquisition requires use of central IT resources, please provide details in the box below. Otherwise, click "Doesn't Apply."</p>

			<div class="field">
				<textarea name="description" id="description" rows="7" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			
			<a class="uw-btn aps-option required" data-aps-goto="aps-aca-h" href="javascript:void(0);">Submit</a><a class="uw-btn aps-option" data-aps-value="none" data-aps-goto="aps-aca-h" href="javascript:void(0);">Doesn't apply</a>
		</form>
	</div><!-- Slide aca g -->

	<div class="slide academic" id="aps-aca-h" data-aps-slide="duration" data-aps-input="true">
		<form class="aps-form" id="form-duration" >
			<h3>How long will your project or acquisition take?</h3>

			<p>Please select a range for how many months your project or acquisition is estimated to take:</p>

			<div class="field">
				<select name="duration" id="duration">
					<option value="less than 6">Less than 6 months</option>
					<option value="7 to 12">7 to 12 months</option>
					<option value="13 to 24">13 to 24 months</option>
					<option value="25+">25+ months</option>
				</select>
			</div>
			<br />
			<a class="uw-btn aps-option" data-aps-goto="recap" href="javascript:void(0);">Submit</a>
		</form>
	</div><!-- Slide aca h -->

	<!-- END ACADEMIC SLIDES **************************************************************************** -->
	<!-- MEDICAL SLIDES ********************************************************************************* -->

	<div class="slide medical" id="aps-med-a">
		<h3>Requirements for this type of project cannot be determined using this application.</h3>
		<p>Your project or acquisition is subject to a memorandum of understanding with the VP for UW-IT and CIO.</p>
		<p>Please reach out to UW Medicine IT Services at <a href="mailto:projreq@uw.edu">projreq@uw.edu</a> to initiate the process.</a></p>
	</div><!-- Slide aca 1 -->

	<!-- END MEDICAL SLIDES ***************************************************************************** -->
	<!-- NON-EXEMPT SLIDES ****************************************************************************** -->

	<div class="slide academic" id="aps-non-basics" data-aps-slide="basics" data-aps-input="true">

		<h3>Let's start off with some basics</h3>

		<p>We'll need to know a little bit about your project or acquisition. In the fields below, please provide your name, department, a short title for your project or acquisition, and a brief, high-level description.</p>

		<form class="aps-form" id="form-non-basics" >
			<div class="field">
				<label for="preparer_name">Name:</label>
				<input type="text" name="preparer_name" id="preparer_name" required>
			</div>
			<div class="field">
				<label for="dept">Department:</label>
				<input type="text" name="dept" id="dept" required>
			</div>
			<div class="field">
				<label for="short_title">Short title:</label>
				<input type="text" name="short_title" id="short_title" required>
			</div>
			<div class="field">
				<label for="description">Description:</label>
				<textarea name="description" id="description" rows="5" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			<div class="field">
				<a class="uw-btn aps-option required" data-aps-goto="aps-non-a" href="javascript:void(0);">Submit</a>
			</div>
		</form>

	</div><!-- Slide aca basics -->

	<div class="slide non" id="aps-non-a" data-aps-slide="level">
		<h3>Please complete the Risk and Severity calculator</h3>

		<p>You'll need to complete a Risk and Severity Assessment using a calculator on the Washington State Office of the Chief Information Officer's (OCIO) web site. Clicking the button below will open a popup containing the calculator.</p>

		<p>Once you've finished the assessment, <span style="color: #4b2e83; font-weight: bold;">save or print</span> the results for use later, and select the appropriate level of oversight below.</p>
		<br />
		<a href="javascript:void(0);" class="uw-btn cio-assessment">Take the assessment</a>
		<br /><br />
		<p>According to the calculator, what is the <b>overall project oversight level</b> required? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">How do I find this?</a></p>

		<!-- Popover lightbox content -->
		<div class="hidden"><div id="more-cio" class="more-info">After completing the assessment on the State of Washington OCIO web site, results will be displayed on the screen. Near the top, you'll find the overall project oversight level. The location is highlighted in pink below.
		<br /><br />
		<img src="https://itconnect.uw.edu/wp-content/uploads/2016/09/cio-oversight-example.gif" width="500" height="283" alt="Example of CIO web site overall project oversight level location." />

		</div></div>
		<!-- End popover -->

		<a class="uw-btn aps-option" data-aps-value="1" data-aps-goto="aps-non-b" href="javascript:void(0);">Level 1</a><a class="uw-btn aps-option" data-aps-value="2" data-aps-goto="aps-non-c" href="javascript:void(0);">Level 2</a><a class="uw-btn aps-option" data-aps-value="3" data-aps-goto="aps-non-c" href="javascript:void(0);">Level 3</a>
	</div><!-- Slide non a -->

	<div class="slide non" id="aps-non-b" data-aps-slide="highcost">

		<h3>Does your project or acquisition have a high project cost or ongoing operatoins cost?</h3>

		<p>Projects or acquisitions with an <i>project cost</i> of <b>$1 million or more</b>, or with an estimated <i>five-year ongoing operatoins cost</i> of <b>$2.5 million or more</b>, are considered to have a high cost.</p>

		<p>You can use the <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">project cost</a> and <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">ongoing operatoins cost</a> worksheets to estimate the cost of your project or acquisition. 
		
		<a class="uw-btn aps-option" data-aps-value="true" data-aps-goto="aps-non-d" href="javascript:void(0);">Yes</a><a class="uw-btn aps-option" data-aps-value="false" data-aps-goto="aps-non-d" href="javascript:void(0);">No</a>
		
	</div><!-- Slide non b -->

	<div class="slide non" id="aps-non-c" data-aps-slide="cost" data-aps-input="true">
		
		<form class="aps-form" id="form-cost" >
			<h3>Provide some financial information about your project or acquisition:</h3>
			<p>The financial information provided will help determine your required level of oversight. Use the linked worksheets if you are unsure of the costs.</p>
			<p>What is the estimated project cost of your project or acquisition? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">project cost worksheet</a><br />
			<div class="field">
				<label for="initial_investment">Project cost:</label>
				$<input type="number" placeholder="0" min="0" max="900000000" value="" name="initial_investment" id="initial_investment" required>
			</div>
			</p>
			<p>What is the estimated five-year ongoing operatoins cost of your project or acquisition? <a class="aps-moreinfo" data-featherlight="#more-cio" href="#">ongoing operatoins cost worksheet</a><br />
			<div class="field">
				<label for="system_life">Ongoing operatoins cost:</label>
				$<input type="number" placeholder="0" min="0" max="900000000" value="" name="system_life" id="system_life" required="required" />
			</div>
			</p>
			<div class="field">
				<a class="uw-btn aps-option required" data-aps-goto="aps-non-d" href="javascript:void(0);">Submit</a>
			</div>
		</form>

	</div><!-- Slide aca c -->

	<div class="slide non" id="aps-non-d" data-aps-slide="multi" data-aps-input="true">

		<form class="aps-form" id="form-multi" >
			<h3>Will more than one department be affected by your project or acquisition?</h3>

			<p>If your project your project or acquisition will affect multiple departments, please provide details in the box below.</p>

			<p>If no other departments will be affected, click "Doesn't Apply."</p>

			<div class="field">
				<textarea name="description" id="description" rows="7" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			
			<a class="uw-btn aps-option required" data-aps-goto="aps-non-e" href="javascript:void(0);">Submit</a><a class="uw-btn aps-option" data-aps-value="none" data-aps-goto="aps-non-e" href="javascript:void(0);">Doesn't apply</a>
		</form>
		
	</div><!-- Slide non d -->

	<div class="slide non" id="aps-non-e" data-aps-slide="central" data-aps-input="true">

		<form class="aps-form" id="form-central" >
			<h3>Will your project or acquisition use central administrative computing services or resources?</h3>

			<p>If your project your project or acquisition will use central IT resources, please provide details in the box below.</p>

			<p>If no central resources are required, click "Doesn't Apply."</p>

			<div class="field">
				<textarea name="description" id="description" rows="7" cols="80" style="font-size: 0.9em;"></textarea>
			</div>
			
			<a class="uw-btn aps-option required" data-aps-goto="aps-non-f" href="javascript:void(0);">Submit</a><a class="uw-btn aps-option" data-aps-value="none" data-aps-goto="aps-non-f" href="javascript:void(0);">Doesn't apply</a>
		</form>
		
	</div><!-- Slide non e -->

	<div class="slide non" id="aps-non-f" data-aps-slide="duration" data-aps-input="true">
		<form class="aps-form" id="form-duration" >
			<h3>How long will your project or acquisition take?</h3>

			<p>Please select a range for how many months your project or acquisition is estimated to take.</p>

			<div class="field">
				<select name="duration" id="duration">
					<option value="less than 6">Less than 6 months</option>
					<option value="7 to 12">7 to 12 months</option>
					<option value="13 to 24">13 to 24 months</option>
					<option value="25+">25+ months</option>
				</select>
			</div>
			<br />
			<a class="uw-btn aps-option" data-aps-goto="recap" href="javascript:void(0);">Submit</a>
		</form>
	</div><!-- Slide non f-->

	<!-- END NON-EXEMPT SLIDES ***************************************************************************-->
	<!-- RECAP SLIDES ************************************************************************************ -->

	<div class="slide" id="recap" data-aps-slide="recap">
	
	<!-- ACADEMIC RECAPS -->
		<div class="recap" id="aca-basics"></div>

		<div class="recap" id="aca-1">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<ul>
				<li>It is for an academic use in instruction, research, or other scholarly activity; it is not for administrative records or business operations use.</li>
				<li>The project cost is less than $1 million and the ongoing operations cost costs will be less than $2.5 million.</li>
				<li>No other departments will be using the system, nor do you need to use any central administrative computing services or resources.</li>
				<li>It has a <b>level 1 oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website.</li>
			</ul>

			<p>Your department is responsible for following all institutional procurement and stewardship practices, and for seeing that the project is successfully completed.</p>

			<p>Your department is to maintain a record to document all of the above if it is requested in a future audit. You may print a copy of this information, or save a screen shot for the department record.</p>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records.</p>
		</div>

		<div class="recap" id="aca-2">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<ul>
				<li>It is for an academic use in instruction, research, or other scholarly activity; it is not for administrative records or business operations use.</li>

				<li>The project cost is less than $1 million and the ongoing operations costs will be less than $2.5 million.</li>

				<li>Other departments will be using the system, or you require the use of central administrative computing services or resources.</li>

				<li>It has a <b>level 1 oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website.</li>
			</ul>
			<p>Prior approval is required for use of central administrative computing services or resources. Contact UW-IT at <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a> to ensure your requested needs can be addressed on the schedule you want to follow.</p>

			<p>Your department is responsible for following all institutional procurement and stewardship practices, and for seeing that the project is successfully completed. This includes coordinating with the other departments as necessary to ensure satisfactory results.</p>

			<p>Your department is to maintain a record to document all of the above if it is requested in a future audit. You may print a copy of this information, or save a screen shot for the department record.</p>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records.</p>
		</div>

		<div class="recap" id="aca-3">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<ul>
				<li>It is for an academic use in instruction, research, or other scholarly activity; it is not for administrative records or business operations use.</li>

				<li>The project cost is greater than $1 million, the ongoing operations costs will be greater than $2.5 million, or both.</li>

				<li>No other departments will be using the system, nor do you need to use any central administrative computing services or resources.</li>

				<li>It has a <b>level 1 oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website.</li>			
			</ul>
			<p>Submit your recap of project costs and ongoing operations costs, along with level 1 oversight calculation, to UW-IT via <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a> for review and concurrence by the VP for UW-IT and CIO.</p>

			<p>Your department is responsible for following all institutional procurement and stewardship practices, and for seeing that the project is successfully completed.</p>

			<p>Your department is to maintain a record to document all of the above if it is requested in a future audit. You may print a copy of this information, or save a screen shot for the department record.</p>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records.</p>
		</div>

		<div class="recap" id="aca-4">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<ul>
				<li>It is for an academic use in instruction, research, or other scholarly activity; it is not for administrative records or business operations use.</li>

				<li>The project cost is greater than $1 million, the ongoing operations costs will be greater than $2.5 million, or both.</li>

				<li>Other departments will be using the system, or you require tthe use of central administrative computing services or resources.</li>

				<li>It has a <b>level 1 oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website.</li>
			</ul>
			<p>Submit your recap of project cost and ongoing operation costs, along with level 1 oversight calculation, to UW-IT via <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a> for review and concurrence by the VP for UW-IT and CIO.</p>

			<p>Your department is responsible for following all institutional procurement and stewardship practices, and for seeing that the project is successfully completed. This includes coordinating with the other departments as necessary to ensure satisfactory results.</p>

			<p>Your department is to maintain a record to document all of the above if it is requested in a future audit. You may print a copy of this information, or save a screen shot for the department record.</p>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records.</p>
		</div>

		<div class="recap" id="aca-5">
			<h3>The following summary and requirements apply to your project or acquisition:</h3>

			<div class="basics-wrap"></div>

			<p>Your planned technology acquisition is for an academic use in instruction, research, or other scholarly activity; itis not for administrative records or business operations use.</p>

			<h4>A summary of the information about your project</h4>

			<ul>
				<li>It has a <b>level <span id="recap-level"></span> oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website. Please print out that report and include it for review by UW-IT.</li>

				<li><b>Total project cost:</b> $<span id="recap-investment"></span></li>

				<li><b>Five-year ongoing operatoins cost:</b> $<span id="recap-5yr"></span></li>

				<li>The project will affect multiple departments in the following way:<div id="recap-multi"></div></li>

				<li>The project require central computing resources in the following way:<div id="recap-central"></div></li>

				<li>It will take <b><span id="recap-duration"></span> months</b> to complete.</li>
			</ul>

			<p>UW-IT needs to work with you on additional information about your project, for review and approval by the VP for UW-IT and CIO.</p>

			<p>Please use the <a href="https://ocio.wa.gov/policy/appendix-c-technology-investmentproject-summaries-11210" target="_blank">Investment Plan Template</a>, being sure to include the above information, and the following:</p>

			<ul>
				<li>Selection process if acquiring any components from vendors, such as software, hardware, services including both hosting and consulting;</li>

				<li>The anticipated project plan and schedule, including major milestone dates and deliverables</li>

				<li>A copy of the oversight level calculation report</li>

				<li>Other information as outlined in the Investment Plan template</li>
			</ul>

			<p>Contact UW-IT via <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a> to set up a time to discuss the draft Investment Plan and any questions you may have about this process.</p>

			<p>Once your project is approved by the VP for UW-IT and CIO, your department will be responsible for:</p>
			<ul>
				<li>Following all institutional procurement and stewardship practices</li>
				<li>Project progress reporting and management oversight</li>
				<li>If the project will take more than 12 months, submitting quarterly progress reports to VP for UW-IT and CIO</li>
			</ul>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records. You may need to submit a copy of this information to UW-IT.</p>
		</div>


	<!-- NON-EXEMPT RECAPS -->
		<div class="recap" id="non-1">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<ul>
				<li>It is for administrative or business-related IT systems and applications that are not associated with UW Medicine</li>

				<li>
					<span id="recap-highcost" class="recap-hidden">The project cost is greater than $1 million, the five-year ongoing operations costs will be greater than $2.5 million, or both.</span>
					<span id="recap-lowcost" class="recap-hidden">The project cost is less than $1 million, and the five-year ongoing operations costs will be less than $2.5 million</span>
				</li>

				<li>The project will affect multiple departments in the following way:<div id="recap-multi-non"></span></li>

				<li>The project will require central administrative services or resources in the following way:<div id="recap-central-non"></span></li>

				<li>It has a <b>level 1 oversight requirement</b>, as calculated using the risk and severity tools on the State of Washington OCIO website.</li>

				<li>It will take <b><span id="recap-duration-non"></span> months</b> to complete.</li>
			</ul>

			<div id="recap-non-short">
				<p>Your department is responsible for following all institutional procurement and stewardship practices and for seeing that the project is successfully completed.</p>

				<p>Your department is responsible for providing project oversight and quality assurance to ensure the project remains on schedule, and is within its approved budget and scope. <b>Any significant changes require you to reassess the oversight level and project costs to validate that it still qualifies for this Small Project Exemption.</b></p>

				<p>Your department is to maintain documentation of all of the above in case it is requested in a future audit. You may print a copy of this information, or save a screen shot for the department record.</p>

				<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records.</p>
			</div>

			<div id="recap-non-long" class="recap-hidden">
				<p>UW-IT needs to work with you on additional information about your project, for review and approval by the Vice President for UW-IT and Chief Information Officer (VP for UW-IT and CIO).</p>

				<p>Please use the <a href="https://ocio.wa.gov/policy/appendix-c-technology-investmentproject-summaries-11210" target="_blank">Investment Plan Template</a>, being sure to include the above information, and the following:</p>

				<ul>
					<li>Selection process if acquiring any components from vendors, such as software, hardware, services including both hosting and consulting</li>

					<li>The anticipated project plan and schedule, including major milestone dates and deliverables, project risk identifications, mitigation plans, and quality assurance monitoring</li>

					<li>A copy of the oversight level calculation report</li>

					<li>Other information as outlined in the Investment Plan template</li>
				</ul>

				<p>Contact UW-IT via <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a> to set up a time to discuss the draft Investment Plan and any questions you may have about this process.</p>

				<p>Once your project is approved by the VP for UW-IT and CIO, your department will be responsible for:</p>

				<ul>
					<li>Following all institutional procurement and stewardship practices</li>
					<li>Project progress reporting and management oversight</li>
				</ul>

				<p>Any significant changes in approved project budget, scope or schedule will require you to reassess the oversight level and project costs to resubmit for review and approval by UW-IT.</p>

				<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records. You may need to submit a copy of this information to UW-IT.</p>
			</div>
		</div>

		<div class="recap" id="non-2">
			<h3>Here is a summary of your planned technology acquisition:</h3>
			<div class="basics-wrap"></div>
			<p>State of Washington law and policies of the State Chief Information Officer require certain reviews and approvals before any action can proceed, even when no state appropriations are to be used to fund the project.</p>
			 
			<p>As a general rule, we will work with you through three stages of reviews and approvals. Please review the steps outlined below, prepare preliminary materials as indicated, then contact UW-IT to schedule a meeting to review the overall process and plan next steps.</p>
			 
			<h4>Stage 1 – Getting started and first steps</h4>
			 
			<ul>
				<li>It is for administrative or business related IT systems and applications, and is not part of UW Medicine</li>
				<li>project cost is <b>$<span id="recap-investment-non"></span></b> and five-year ongoing operations costs are <b>$<span id="recap-5yr-non"></span></b></li>
				<li><span id="recap-multi-non-complex"></span></li>
				<li><span id="recap-central-non-complex"></span></li>
				<li>It has a <b>Level <span id="recap-level-non"></span> oversight</b> as calculated using risk and severity tools on State of Washington OCIO website</li>
				<li>It will take <b><span id="recap-duration-non-complex"></span> months</b> to complete.</li>
			</ul>
			 
			<p>Please draft a Concept Briefing Document, which is appendix B on the state of Washington's <a href="https://ocio.wa.gov/policies/121-it-investments-approval-and-oversight/121-procedures" target="_blank">OCIO IT Investments - Approval and Oversight website</a>.</p>
			 
			<p>Submit the draft Concept Briefing Document, a copy of your oversight level calculation report, and a copy of this Stage 1 summary information to UW-IT via <a href="mailto:help@uw.edu?subject=APS 2.3 request">help@uw.edu</a>.</p>

			<p>UW-IT will contact you to set up a time to meet and discuss next steps.   When we have all required materials assembled and approved by VP for UW-IT and CIO, we will proceed to work with State of Washington OCIO for approval to move forward.  <b>NOTE:</b> No acquisitions may begin until we have state approval.</p>
			 
			<p>UW IT Strategy Board will be informed of the proposed project, and may request a presentation.</p>
			 

			<h4>Stage 2 – Approval to proceed with acquisition</h4>
			 
			<p>After OCIO approves the Concept and related materials and gives an OK to proceed with acquisition steps, your department will work with Procurement for appropriate process (RFI, RFP, sole source).</p>
			 
			<p>This is also the time to determine acquisition method for external Quality Assurance consulting services; note that State of Washtingon OCIO requests to be involved in that selection process, and encourages that project QA consultants conduct both readiness assessment and planning activities prior to selection of successful vendor and award of contracts.</p>
			 
			<p>Draft an Investment Plan document based in large part on the Concept Briefing document&mdash;some sections will be blank (budget and schedule) until vendor proposals are received and an apparent successful vendor is identified.</p>
			 
			<p>State of Washingon OCIO approval is required before UW may award contracts for the project.</p>
			 
			 
			<h4>Stage 3 – Approval to launch project</h4>
			 
			<p>Complete evaluation and selection of apparent successful vendor(s).</p>
			 
			<p>Draft the complete Investment Plan document, with additional details (budget, schedule, risks and mitigation) as identified through procurement process. This must be approved by VP for UW-IT and CIO, who will request formal approval from state OCIO.</p>
			 
			<p>Depending on the size of the contracts and project project costs, UW Board of Regents approval may also be required.</p>
			 
			<p>Develop a Project Plan and governance process for approval by VP for UW-IT and CIO</p>
			 
			<p>UW IT Strategy Board will be updated and overall project.</p>
			 
			<p>Begin regular project reporting, including posting to State of Washington OCIO website of monthly progress report and QA report.</p>

			<p style="color: #4b2e83; font-weight: bold;">Please save or print this page for your records. You may need to submit a copy of this information to UW-IT.</p>
		</div>

		<div id="basics">
			<b>Name: </b><span id="basics-name"></span><br />
			<b>Department: </b><span id="basics-dept"></span><br />
			<b>Short title: </b><span id="basics-title"></span><br />
			<b>Description: </b><span id="basics-desc"></span><br />
		</div>

	</div><!-- Slide RECAP -->

</div>