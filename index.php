<!DOCTYPE html>
<html>
<head>

<!-- META -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Quick Survey / Feedback Form</title>
<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


<!-- CSS STYLESHEETS -->
<link rel="stylesheet" href="assets/css/style.css">

<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700,300' rel='stylesheet' type='text/css'>

<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/functions.js"></script>

</head>

<!-- CONTENT START -->
<!--[if lte IE 8]>
	<body class="legacy">
<![endif]-->
<body class="modern">
<div class="container" style="margin-bottom:100px;">

<div id="header">
	<h1>SURVEY TITLE</h1>
	<h3>Part <span>1</span></h3>
</div>

<div id="survey">
	<form action="assets/inc/submit.php" method="post">

		<!-- PART 1: Personal Info -->
		<div id="p1" class="form-part current">
			<div class="form-field">
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="Joe" class="required" />
			</div>
			<div class="form-field">
				<label for="phone">Phone</label>
				<input type="text" name="phone" class="number required" placeholder="1 234 567 8910" />
			</div>
			<div class="form-field">
				<label for="email">Email</label>
				<input type="text" name="email" class="email required" placeholder="email@address.com" />
			</div>
		</div>


		<!-- PART 2: Questionaire Section 1 -->
		<div id="p2" class="form-part">
			<div id="q1" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q2" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q3" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q4" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q5" class="form-field form-field--question-multi" data-option="Option one, Option two, Option three">
				<p>This is an example question that will allow multiple answers, as checkboxes?</p>
			</div>
			<div id="q6" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
		</div>


		<!-- PART 3: Questionaire Section 3 -->
		<div id="p3" class="form-part">
			<div id="q7" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q8" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q9" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q10" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q11" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q12" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q13" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q14" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q15" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q16" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q17" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q18" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q19" class="form-field--question-multi" data-option="Option 1, Option 2, Option 3">
				<p>This is an example question that will allow multiple answers, as checkboxes?</p>
			</div>
		</div>


		<!-- PART 4: Questionaire Section 4 -->
		<div id="p4" class="form-part">
			<div id="q20" class="form-field form-field--question-multi" data-option="Option 1, Option 2, Option 3">
				<p>This is an example question that will allow multiple answers, as checkboxes?</p>
			</div>
			<div id="q21" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q22" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q23" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q24" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
			<div id="q25" class="form-field form-field--question">
				<p>This is an example survey question with an aboslute answer, three options and required?</p>
			</div>
		</div>



		<!-- PART as needed -->
		


		<!-- Section Navigation -->
		<div class="form-navigation">
			<!-- Go Back -->
		    <a href="#" class="previous">Go back</a>
		    <!-- Next Section -->
		    <a href="#" class="next button">Continue</a>
		    <!-- Submit -->
		    <input type="submit" class="button" id="submit" name="submit" value="Submit for review">
		</div>
	</form>
</div>
</div>




</body>
</html>
