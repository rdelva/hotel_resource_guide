<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Hotel Resource Guide</title>
	<link href="../assets/css/normalize.css" rel="stylesheet">
	<link href="assets/css/style.css"  rel="stylesheet">

</head>
<body>
	<header>
		<div class="container"> <h1>Hotel Services Resource Guide</h1></div>
	</header>
	<div class="wrap">
		<section>
		<div class="container">
			<form action="confirm.php" method="post">
				<fieldset id="info">
					<legend>Listing Info</legend>
						<div><h3>Listing Type</h3></div>
						<p>Choose your listing type:</p>
						<div class="listing">
							<div>
								<input type="radio" value="basic" name="listingType" id="basic">
								<label for="basic" >Basic <span>(no logo) - $625.00</span>
								<img src="assets/img/sample_nologo.png">
								</label>
							</div>
							<div>
								<input type="radio" value="expanded b/w" name="listingType" id="bwLogo">
								<label id="bwLogo">Expanded <span>(w/ black and white logo) - $710.00</span>
								<img  src="assets/img/sample_bw.png">
								</label>
							</div>
							<div>
								<input type="radio" value="expanded w/ color" name="listingType" id="colorLogo">
								<label for="colorLogo">Expanded <span>(w/ color logo) - $865.00</span>
								<img  src="assets/img/sample_color.png">
								</label>
							</div>
						</div>
						<div class="category"><h3>Category</h3></div>
						<div>
							<ul>
								<li><input type="checkbox" id="appraisers" value="Appraisers/Valuation"><label for="appraisers">Appraisers/Valuation</label></li>
								<li><input type="checkbox" id="appraisers" value=""><label>Architects</label></li>
								<li><input type="checkbox" id="appraisers"><label>Architects/Engineers</label></li> 
								<li><input type="checkbox"><label>Asset Management</label></li> 
								<li><input type="checkbox"><label>Attorneys</label></li> 
								<li><input type="checkbox"><label>Banker/Lender/Financial Services </label></li> 
								<li><input type="checkbox"><label>Construction Companies</label></li> 
								<li><input type="checkbox"><label>Designers</label></li> 
								<li><input type="checkbox"><label>Contractors/Construction Managers </label></li> 
								<li><input type="checkbox"><label>Developers/Owners</label></li> 
								<li><input type="checkbox"><label>Environmental Services</label></li> 
								<li><input type="checkbox"><label>Exterminators</label></li> 
								<li><input type="checkbox"><label>Forecasting</label></li> 
								<li><input type="checkbox"><label>Full Service Real Estate Companies </label></li> 
								<li><input type="checkbox"><label>Hotel Advisors</label></li> 
								<li><input type="checkbox"><label>Hotel Brands</label></li> 
								<li><input type="checkbox"><label>Hotel Business</label></li> 
								<li><input type="checkbox"><label>Hotel Lodging REITSs</label></li> 
								<li><input type="checkbox"><label>Hotel Brokers</label></li> 
								<li><input type="checkbox"><label>Hotel Managers Group</label></li> 
								<li><input type="checkbox"><label>Hotel Supplies</label></li> 
								<li><input type="checkbox"><label>Lodging Hospitality</label></li> 
								<li><input type="checkbox"><label>Management Companies</label></li> 
								<li><input type="checkbox"><label>Owners &amp; Developers</label></li> 
								<li><input type="checkbox"><label>Purchasing Companies</label></li> 
								<li><input type="checkbox"><label>Property Management</label></li> 
								<li><input type="checkbox"><label>Property &amp; Structuring</label></li> 
								<li><input type="checkbox"><label>Real Estate Advisors</label></li> 
								<li><input type="checkbox"><label>Real Estate Financing</label></li> 
								<li><input type="checkbox"><label>Sales Brokers</label></li> 
								<li><input type="checkbox"><label>Other</label></li> 
							</ul>
						</div>	
						<div id="next">Next</div>
				</fieldset>
				<fieldset id="details">
					<legend>Listing Details</legend>
						<label for="userCompany">Company Name</label> <input type="text" name="userCompany" id="userCompany">
						<label for="userAddress">Address 1</label> <input type="text" name="userAddress" id="userAddress">
						<label for="userAddress2">Address 2</label> <input type="text" name="userAddress2" id="userAddress2">
						<label for="userCity">City</label> <input type="text" name="userCity" id="userCity">
						<label for="userState">State</label> 
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
						<label for="userPhone">Phone</label> <input type="text" name="userPhone" id="userPhone">
						<label for="userEmail">Company Email</label> <input type="text" name="userEmail" id="userEmail">
						<label for="userWebsite">Company Website</label> <input type="text" name="userWebsite" id="userWebsite">
						<div>
							<label for="userExecutive1">Key Executive #1	 </label> <input type="text" name="userExecutive1" id="userExecutive1">
							<label for="userExecutiveTitle1">Key Executive  Title #1</label> <input type="text" name="userExecutive1" id="userExecutive1">
							<label for="userExecutive1">Key Executive #2	 </label> <input type="text" name="userExecutive2" id="userExecutive2">
							<label for="userExecutiveTitle2">Key Executive  Title #2</label> <input type="text" name="userExecutiveTitle2" id="userExecutiveTitle2">
							<label for="userExecutive3">Key Executive #3	 </label> <input type="text" name="userExecutive1" id="userExecutive3">
							<label for="userExecutiveTitle3">Key Executive  Title #3</label> <input type="text" name="userExecutive1" id="userExecutive3">
						</div>
						<label for="servicesProvided">Services Provided</label><textarea id="servicesProvided" name="servicesProvided"></textarea>	
						<label for="companyDecription">Company Description</label><textarea id="companyDecription" name="companyDecription"></textarea>	
						<label for="majorClients">Major Clients</label><textarea id="majorClients" name="majorClients"></textarea>	
						<h3>Service Territory</h3>
						<ul>
							<li><input type="checkbox"><label>Northeast</label></li>
							<li><input type="checkbox"><label>Southeast</label></li>
							<li><input type="checkbox"><label>Midwest</label></li>
							<li><input type="checkbox"><label>Southwest</label></li>
							<li><input type="checkbox"><label>West</label></li>
							<li><input type="checkbox"><label>International</label></li>
							<li><input type="checkbox"><label>Other <input type="text" name="territoryOther"></label></li>
						</ul>
						
				</fieldset>
				<fieldset id="submitter">
					<legend>Submitter Information <span>(will not be printed)</span></legend>
							<label for="subName">Name</label> <input type="text" name="userCompany" id="userCompany">
							<label for="subCompany">Company</label> <input type="text" name="subCompany" id="subCompany">
							<label for="subPhone">Phone</label> <input type="text" name="subPhone" id="subPhone">
							<label for="subEmail">Email</label> <input type="email" name="subEmail" id="subEmail">
						
				</fieldset>


			</form>
		</div>
		</section>
	</div>
	<footer>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../assets/js/script.js"></script>
</body>
</html>