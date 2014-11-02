<!DOCTYPE html>
<html>
	<head>
		<title>WatHelp - Students</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="tut">
		<div id="header">
			<div id="tutor_heading">STUDENTS</div>
			<div id="title_tut">
			<a href="index.html">
			Wat<span id="bold">Help</span>
				</a>
			</div> <!-- end title div -->
		</div> <!-- end header div -->
		<div class="form-container">
			<p class="student-title">Please enter the course you are looking for:</p>
			<form action="find_tutor.php" method="get">
				<input type="text" placeholder="Course code" id="stud_course_code" name="cc" class="text-field">
				<input type="submit" class="find-tutor-btn" value="Find me a Tutor!" />
			</form>
		</div>

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>