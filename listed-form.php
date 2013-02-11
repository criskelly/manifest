<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8">
<title>Get listed</title>

<meta name="description" content="The Manifest is a nationwide directory of bands and musicians that allows you to search by city and state.  It's like a Craigslist of musicians." />

<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
</head>

<body>

	<?php include("header.php"); ?>

	<?php include("sidebar.php"); ?>

	<div id="content">

		<form action="submitted.php" method="POST" name="get_listed" id="get_listed">
			<h1>Get Listed</h1>
			<h3>The world's easiest way for performing musicians to be found</h3>
			<p>
				<label for="bandname">Band or Artist Name</label>
				<input type="text" name="bandname" id="bandname">
			</p>
			<p>
				<label for="bandsite">Website or Online Press Kit</label>
				<input type="text" name="bandsite" id="bandsite" value="http://">
			</p>
			<p>
				<label for="self_genre">Self Described Genre</label>
				<input name="self_genre" id="self_genre"></input>			
			</p>
			<p>
				<label for="manifest_genre">Manifest Genre</label>
				<select name="genre" id="manifest_genre">
					<option value="Rock">Rock | Blues | Alt. Country | Jamgrass</option>
					<option value="Country">Country | Country Rock | New Country</option>
					<option value="Jazz">Jazz | Blues/Jazz | Swing | Big Band</option>
					<option value="Folk">Folk | Bluegrass | Americana | Singer/Songwriter</option>
					<option value="Metal">Metal | Industrial | Punk | Punk Rock</option>
					<option value="World">World | Ethnic | Gypsy</option>
					<option value="Rap">R&ampB | Hip Hop | Rap</option>
					<option value="Dance">DJ | Dance | Electronica | Pop</option>
					<option value="Quartet">String Quartet | Piano | Classical</option>
					<option value="Cover">Cover Band | Lounge | Decadia</option>
				</select>
			</p>
			<p>
				<label for="city_form">City</label>
				<input type="text" id="city_form">
			</p>	
			<p>
				<label for="state_form" id="state_label">State</label>
				<select name="states" id="state_form">
					<option value="" selected="selected">Select a State</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>			
				</select>
			</p>
			<p>
				<input type="submit" value="Submit" id="submit_form">
			</p>
		</form>


	</div> <!-- end content -->

</body>
</html>
