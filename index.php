<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Hotel Resource Guide</title>
	<link href="../assets/css/normalize.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="assets/css/style.css"  rel="stylesheet">

</head>
<body>
	<header>
		<div class="container clearfix"> 
			<img src="assets/img/svg/logo.svg" alt="Real Estate Form Logo" class="headLogo">
			<div class="deadline">Deadline: December 31st, 2016</div>
		</div>
	</header>
	<div class="wrap">
		<div class="clearfix container">
			<div id="next">Next</div>
			<div id="prev">Prev</div>
		</div>
		<div class="container">
			<form action="confirm.php" method="post">
				<div id="form">
					<div class="box1 current main">
						<img src="assets/img/svg/logo.svg" alt="Real Estate Form Logo">
						<h1>Hotel Resource Service Guide</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
						<div id="start">Start</div>
					</div> <!-- end of box one -->

					<div class="box2 listingSection">
						<h3 class="listing-type">Listing Type: <span>Choose your listing type</span></h3>

						<div class="listing clearfix">
							<div class="listingChoice">
								<input type="radio" value="basic" name="listingType" id="basic">
								<label for="basic" >No Logo - $625.00</span>
								<img src="assets/img/sample_nologo.png" alt="Listing with no Logo">
								</label>
							</div>
							<div class="listingChoice">
								<input type="radio" value="expanded b/w" name="listingType" id="bwLogo">
								<label for="bwLogo">B/W Logo - $710.00</span>
								<img  src="assets/img/sample_bw.png" alt="Listing with Black and White logo">
								</label>
							</div>
							<div class="listingChoice">
								<input type="radio" value="expanded w/ color" name="listingType" id="colorLogo">
								<label for="colorLogo">Color Logo - $865.00</span>
								<img  src="assets/img/sample_color.png" alt="Listing with Color Logo">
								</label>
							</div>
						</div>

					</div> <!-- end of box two -->
					<div class="box3 clearfix">
						<h3 class="category">Category</h3>
						
							<ul class="category-list">
								<li><input type="checkbox" id="appraisers" value="Appraisers/Valuation"><label for="appraisers">Appraisers/Valuation</label></li>
								<li><input type="checkbox" id="Architects" value="Architects"><label>Architects</label></li>
								<li><input type="checkbox" id="Architects_Engineers" value="Architects/Engineers"><label>Architects/Engineers</label></li> 
								<li><input type="checkbox" id="Asset_Management"><label>Asset Management</label></li> 
								<li><input type="checkbox" id="Attorneys" value="Attorneys"><label>Attorneys</label></li> 
								<li><input type="checkbox" id="Banker_Lender_Financial_Services" value="Banker/Lender/Financial Services"><label>Banker/Lender/Financial Services </label></li> 
								<li><input type="checkbox" id="Construction_Companies" value="Construction Companies"><label>Construction Companies</label></li> 
								<li><input type="checkbox" id="Designers" value="Designers"><label>Designers</label></li> 
								<li><input type="checkbox" id="Contractors_Construction_Managers" value=""><label>Contractors/Construction Managers </label></li> 
								<li><input type="checkbox" id="Developers_Owners" value="Developers/Owners"><label>Developers/Owners</label></li> 
								<li><input type="checkbox" id="Environmental_Services" value="Environmental Services"><label>Environmental Services</label></li> 
								<li><input type="checkbox" id="Exterminators" value="Exterminators"><label>Exterminators</label></li> 
								<li><input type="checkbox" id="Forecasting" value="Forecasting"><label>Forecasting</label></li> 
								<li><input type="checkbox" id="Full_Service_Real_Estate_Companies" value="Full Service Real Estate Companies"><label>Full Service Real Estate Companies </label></li> 
								<li><input type="checkbox" id="Hotel_Advisors" value="Hotel Advisors"><label>Hotel Advisors</label></li> 
								<li><input type="checkbox" id="Hotel_Brands" value="Hotel Brands"><label>Hotel Brands</label></li> 
								<li><input type="checkbox" id="Hotel_Business" value="Hotel Business"><label>Hotel Business</label></li> 
								<li><input type="checkbox" id="Hotel_Lodging_REITSs" value="Hotel Lodging REITSs"><label>Hotel Lodging REITSs</label></li> 
								<li><input type="checkbox" id="Hotel_Brokers" value="Hotel Brokers"><label>Hotel Brokers</label></li> 
								<li><input type="checkbox" id="Hotel_Managers_Group" value="Hotel Managers Group"><label>Hotel Managers Group</label></li> 
								<li><input type="checkbox" id="Hotel_Supplies" value="Hotel Supplies"><label>Hotel Supplies</label></li> 
								<li><input type="checkbox" id="Lodging_Hospitality" value="Lodging Hospitality"><label>Lodging Hospitality</label></li> 
								<li><input type="checkbox" id="Management_Companies" value="Management Companies"><label>Management Companies</label></li> 
								<li><input type="checkbox" id="Owners_and_Developers" value="Owners &amp; Developers"><label>Owners &amp; Developers</label></li> 
								<li><input type="checkbox" id="Purchasing_Companies" value="Purchasing Companies"><label>Purchasing Companies</label></li> 
								<li><input type="checkbox" id="Property_Management" value="Property Management"><label>Property Management</label></li> 
								<li><input type="checkbox" id="Property_and_Structuring" value="Property &amp; Structuring"><label>Property &amp; Structuring</label></li> 
								<li><input type="checkbox" id="Real_Estate_Advisors" value="Real Estate Advisors"><label>Real Estate Advisors</label></li> 
								<li><input type="checkbox" id="Real_Estate_Financing" value="Real Estate Financing"><label>Real Estate Financing</label></li> 
								<li><input type="checkbox" id="Sales_Brokers" value="Sales Brokers"><label>Sales Brokers</label></li> 
								<li><input type="checkbox" id="Other" value="Other"><label>Other</label></li> 
							</ul>
						
					</div> <!-- end of box three -->

					<div class="companyInfo">
						<label for="userCompany">Company Name</label> <input type="text" name="userCompany" id="userCompany" placeholder="(e.g. CBRE)">
						<label for="userAddress">Address 1</label> <input type="text" name="userAddress" id="userAddress">
						<label for="userAddress2">Address 2</label> <input type="text" name="userAddress2" id="userAddress2">
						<label for="userCity">City</label> <input type="text" name="userCity" id="userCity">
						<label>State</label> 
						<select name="userState" id="state">
											<option value=" ">Choose State</option>
											<option value="Alabama">Alabama</option>
											<option value="Alaska">Alaska</option>
											<option value="Arizona">Arizona</option>
											<option value="Arkansas">Arkansas</option>
											<option value="California">California</option>
											<option value="Colorado">Colorado</option>
											<option value="Connecticut">Connecticut</option>
											<option value="Delaware">Delaware</option>
											<option value="Florida">Florida</option>
											<option value="Georgia">Georgia</option>
											<option value="Alabama">Alabama</option>
											<option value="Hawaii">Hawaii</option>
											<option value="Idaho">Idaho</option>
											<option value="Illinois">Illinois</option>
											<option value="Iowa">Iowa</option>
											<option value="Kansas">Kansas</option>
											<option value="Kentucky">Kentucky</option>
											<option value="Louisiana">Louisiana</option>
											<option value="Maine">Maine</option>
											<option value="Maryland">Maryland</option>
											<option value="Massachusetts">Massachusetts</option>
											<option value="Michigan">Michigan</option>
											<option value="Minnesota">Minnesota</option>
											<option value="Mississippi">Mississippi</option>
											<option value="Missouri">Missouri</option>
											<option value="Montana">Montana</option>
											<option value="Nebraska">Nebraska</option>	
											<option value="Nevada">Nevada</option>
											<option value="New Hampshire">New Hampshire</option>
											<option value="New Jersey">New Jersey</option>
											<option value="New Mexico">New Mexico</option>
											<option value="New York">New York</option>
											<option value="North Carolina">North Carolina</option>
											<option value="Ohio">Alabama</option>
											<option value="Oregon">Oregon</option>
											<option value="Pennsylvania">Pennsylvania</option>
											<option value="Rhode Island">Rhode Island</option>
											<option value="South Carolina">South Carolina</option>
											<option value="South Dakota">South Dakota</option>
											<option value="Tennessee">Tennessee</option>
											<option value="South Carolina">South Carolina</option>
											<option value="Texas">Texas</option>
											<option value="Utah">Utah</option>
											<option value="Vermont">Vermont</option>
											<option value="Virginia">Virginia</option>
											<option value="Washington">Washington</option>
											<option value="West Virginia">Washington</option>
											<option value="Wisconsin">Wisconsin</option>
											<option value="Wyoming">Wyoming</option>
										</select>
						<label for="userZip">Zip</label> <input type="text" name="userZip" id="userZip">
						<label for="userPhone">Phone</label> <input type="tel" name="userPhone" id="userPhone">
						<label for="userEmail">Company Email</label> <input type="email" name="userEmail" id="userEmail" placeholder="email@email.com">
						<label for="userWebsite">Company Website</label> <input type="text" name="userWebsite" id="userWebsite">
						<div>
							<label for="userExecutive1">Key Executive #1	 </label> <input type="text" name="userExecutive1" id="userExecutive1">
							<label for="userExecutiveTitle1">Key Executive  Title #1</label> <input type="text" name="userExecutiveTitle1" id="userExecutiveTitle1">
							<label for="userExecutive1">Key Executive #2	 </label> <input type="text" name="userExecutive2" id="userExecutive2">
							<label for="userExecutiveTitle2">Key Executive  Title #2</label> <input type="text" name="userExecutiveTitle2" id="userExecutiveTitle2">
							<label for="userExecutive3">Key Executive #3	 </label> <input type="text" name="userExecutive3" id="userExecutive3">
							<label for="userExecutiveTitle3">Key Executive  Title #3</label> <input type="text" name="userExecutiveTitle3" id="userExecutiveTitle3">
						</div>
						<label for="servicesProvided">Services Provided</label><textarea id="servicesProvided" name="servicesProvided"></textarea>	
						<label for="companyDecription">Company Description</label><textarea id="companyDecription" name="companyDecription"></textarea>	
						<label for="majorClients">Major Clients</label><textarea id="majorClients" name="majorClients"></textarea>	
						




					</div> <!-- end of box 4 -->
					<div class="serviceTerritory">
						<h3>Service Territory</h3>
						<ul>ph
							<li><input type="checkbox"><label>Northeast</label></li>
							<li><input type="checkbox"><label>Southeast</label></li>
							<li><input type="checkbox"><label>Midwest</label></li>
							<li><input type="checkbox"><label>Southwest</label></li>
							<li><input type="checkbox"><label>West</label></li>
							<li><input type="checkbox"><label>International</label></li>
							<li><input type="checkbox"><label>Other <input type="text" name="territoryOther"></label></li>
						</ul>		

					</div> <!-- end of box 5 -->
					<div class="submitterInfo">
					<h3>Submitter Information <span>(will not be printed)</span> </h3>

							<label for="subName">Name</label> <input type="text" name="subName" id="subName">
							<label for="subCompany">Company</label> <input type="text" name="subCompany" id="subCompany">
							<label for="subPhone">Phone</label> <input type="tel" name="subPhone" id="subPhone">
							<label for="subEmail">Email</label> <input type="email" name="subEmail" id="subEmail">
	
						
					</div>	

				</div><!-- end of form box -->
			</form>	
		</div>
	</div>
	<footer>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>