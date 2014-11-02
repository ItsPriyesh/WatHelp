<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("tutors") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
	<head>
		<title>WatHelp - Listings</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
		<body id="tut">
			<div id="header">
				<div id="tutor_heading">LISTINGS FOR <?php echo(strtoupper($_GET['cc'])); ?></div>
				<div id="title_tut">
				<a href="index.html">
				Wat<span id="bold">Help</span></a>
				</div> <!-- end title div -->
			</div> <!-- end header div -->
			<div id="search_content">
				<?php
					$course_code = strtolower(str_replace(" ", "", $_GET['cc']));
					$res = mysql_query("SELECT * FROM tutor");
					$course_num = ["course1", "course2", "course3", "course4", "course5", "course6", "course7", "course8", "course9", "course10"];
					$num = 0;
					while($row = mysql_fetch_array($res)) {
						for ($x = 0; $x < count($course_num); $x++) {
							$course = strtolower(str_replace(" ", "", $row[$course_num[$x]]));
							if ($course == $course_code) {
								echo("<div id='tutor_info'>");
								echo("<p id='tut_name'>");
								echo(strtoupper($row['firstname']) . " " . strtoupper($row['lastname']));
								echo("</p>");
								echo("<p id='tut_info_email'>");
								echo("Email me at <a id='tut_info_email' href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a> for more info!");
								echo("</p>");
								echo("<table border='0' id='tut_info_table'><tr>");
								echo("<td id='day_name'>Monday</td>");
								echo("<td id='day_name'>Tuesday</td>");
								echo("<td id='day_name'>Wednesday</td>");
								echo("<td id='day_name'>Thursday</td>");
								echo("<td id='day_name'>Friday</td>");
								echo("<td id='day_name'>Saturday</td>");
								echo("<td id='day_name'>Sunday</td>");
								echo("</tr><tr>");
								echo("<td id='tut_time'>" . $row['monday'] . "</td>");
								echo("<td id='tut_time'>" . $row['tuesday'] . "</td>");
								echo("<td id='tut_time'>" . $row['wednesday'] . "</td>");
								echo("<td id='tut_time'>" . $row['thursday'] . "</td>");
								echo("<td id='tut_time'>" . $row['friday'] . "</td>");
								echo("<td id='tut_time'>" . $row['sunday'] . "</td>");
								echo("<td id='tut_time'>" . $row['saturday'] . "</td>");
								echo("</td></tr></table>");
								echo("</div>");
								$num += 1;
							}
						}
					}
					if ($num == 0) {
						echo("<div id='no_tut'><i class='fa fa-5x fa-exclamation-triangle'></i><br><br>We're sorry for the inconveinience but are the currently no tutors for " . strtoupper($_GET['cc']) . " at this time.");
					}
				?>
			</div> <!-- end search_content div -->
		</body>
</html>