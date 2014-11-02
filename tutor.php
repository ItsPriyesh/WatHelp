<!DOCTYPE html>
<html>
	<head>
		<title>WatHelp - Tutor</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="tut">
		<div id="header">
			<div id="tutor_heading">TUTORS</div>
			<div id="title_tut">
				<a href="index.html">
			Wat<span id="bold">Help</span>
				</a>
			</div> <!-- end title div -->
		</div> <!-- end header div -->

		<div id="content">
		<form action="make_tutor.php" method="post">
		<p>
			Please enter your contact information:
		</p>
		<table border="0">
			<tr>
				<td><input type="text" id="tut_fname" name="fname" placeholder="First Name" /></td>
				<td><input type="text" id="tut_lname" name="lname" placeholder="Last Name" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" id="tut_email" name="email" placeholder="Email" /></td>
			</tr>
		</table>
		<?php
			if (isset($_GET['err'])) {
				if ($_GET['err'] == "em") {
					echo "<script type='text/javascript'>
					document.getElementById('tut_email').style.background = '#FFD73C';
					document.getElementById('tut_email').placeholder = 'Invalid Email';
					</script>";
				}
			}
		?>
		<p>
			Please enter your course specialities:
		</p>
		<table border="0">
			<tr><td><input type="text" id="course_code1" placeholder="Course Code 1" name="cc1" /></td>
			<td><input type="text" id="course_code2" placeholder="Course Code 2" name="cc2" /></td></tr>
			<tr><td><input type="text" id="course_code3" placeholder="Course Code 3" name="cc3" /></td>
			<td><input type="text" id="course_code4" placeholder="Course Code 4" name="cc4" /></td></tr>
			<tr><td><input type="text" id="course_code5" placeholder="Course Code 5" name="cc5" /></td>
			<td><input type="text" id="course_code6" placeholder="Course Code 6" name="cc6" /></td></tr>
			<tr><td><input type="text" id="course_code7" placeholder="Course Code 7" name="cc7" /></td>
			<td><input type="text" id="course_code8" placeholder="Course Code 8" name="cc8" /></td></tr>
			<tr><td><input type="text" id="course_code9" placeholder="Course Code 9" name="cc9" /></td>
			<td><input type="text" id="course_code10" placeholder="Course Code 10" name="cc10" /></td></tr>
		</table>

		<?php
			if (isset($_GET['err'])) {
				if ($_GET['err'] != "em") {
					echo "<script type='text/javascript'>
					document.getElementById('course_code" . $_GET['err'] . "').style.background = '#FFD73C';
					document.getElementById('course_code" . $_GET['err'] . "').placeholder = 'Invalid Course Code';</script>";
				}
			}
		?>


		<p>
			Please enter a charging rate:
		</p>	
		<table border="0" id="rate_tab">
			<tr>
				<td><input type="text" id="charge_rate" name="charge" placeholder="Charging Rate" /> /hr</td>
			</tr>
		</table>
		<p>
			Please enter your availability times: 
		</p>
		<table border="0" id="avail">
			<tr>
				<td>Monday</td>
				<td>
					<select id="from_hour1" name="from_hour1">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min1" name="from_min1">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour1" name="to_hour1">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min1" name="to_min1">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td>
					<select id="from_hour2" name="from_hour2">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min2" name="from_min2">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour2" name="to_hour2">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min2" name="to_min2">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>

						<tr>
				<td>Wednesday</td>
				<td>
					<select id="from_hour3" name="from_hour3">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min3" name="from_min3">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour3" name="to_hour3">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min3" name="to_min3">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td>
					<select id="from_hour4" name="from_hour4">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min4" name="from_min4">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour4" name="to_hour4">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min4" name="to_min4">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>Friday</td>
				<td>
					<select id="from_hour5" name="from_hour5">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min5" name="from_min5">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour5" name="to_hour5">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min5" name="to_min5">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>Saturday</td>
				<td>
					<select id="from_hour6" name="from_hour6">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min6" name="from_min6">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour6" name="to_hour6">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min6" name="to_min6">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>Sunday</td>
				<td>
					<select id="from_hour7" name="from_hour7">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="from_min7" name="from_min7">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>
					to
					<select id="to_hour7" name="to_hour7">
						<option>HR</option>
						<option>00</option><option>01</option><option>02</option><option>03</option>
						<option>04</option><option>05</option><option>06</option><option>07</option>
						<option>08</option><option>09</option><option>10</option><option>11</option>
						<option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<select id="to_min7" name="to_min7">
						<option>MIN</option>
						<option>00</option>
						<option>30</option>
					</select>					
				</td>
			</tr>	
		</table>
		<input type="submit" value="Teach!" id="teach_button" />
		</form>
		</div> <!-- end content div -->

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>