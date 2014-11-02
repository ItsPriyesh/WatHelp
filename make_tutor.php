<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("tutors") or die(mysql_error());
	//echo "CONNECTED TO THE MOTHERFUCKIN' DATABASE!!";
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ./tutor.php?err=em");
	}
	else {
		$cc1 = strtolower(str_replace(" ", "", $_POST['cc1']));
		$cc2 = strtolower(str_replace(" ", "", $_POST['cc2']));
		$cc3 = strtolower(str_replace(" ", "", $_POST['cc3']));
		$cc4 = strtolower(str_replace(" ", "", $_POST['cc4']));
		$cc5 = strtolower(str_replace(" ", "", $_POST['cc5']));
		$cc6 = strtolower(str_replace(" ", "", $_POST['cc6']));
		$cc7 = strtolower(str_replace(" ", "", $_POST['cc7']));
		$cc8 = strtolower(str_replace(" ", "", $_POST['cc8']));
		$cc9 = strtolower(str_replace(" ", "", $_POST['cc9']));
		$cc10 = strtolower(str_replace(" ", "", $_POST['cc10']));
		$ccs = [$cc1, $cc2, $cc3, $cc4, $cc5, $cc6, $cc7, $cc8, $cc9, $cc10];

		for ($each_cc = 0; $each_cc < count($ccs); $each_cc++) {
			if (strlen($ccs[$each_cc]) > 0) {
				$first_letter = $ccs[$each_cc][0];
				$res = mysql_query("SELECT * FROM course WHERE codes LIKE '$first_letter%'");
				$good = false;
				while($row = mysql_fetch_array($res)) {
					$search = substr($row['codes'], 0, strlen($row['codes']) - 1);
					if ($search == $ccs[$each_cc]) {
						$good = true;
						break;
					}
				}
				if (!$good) {
					$error_num = $each_cc + 1;
					header("Location: ./tutor.php?err=" . $error_num);
				}
			}
		}
		
		$charge = $_POST['charge'];
		echo("<br>First Name: " . $firstname);
		echo("<br>Last Name: " . $lastname);
		echo("<br>Email: " . $email . "<br>");
		for ($x = 0; $x < 10; $x++) {
			echo("cc" . $x . " = " . $ccs[$x] . "<br>");
		}
		echo("<br>Charging Rate: " . $charge . "<br>");
		$from_h1 = $_POST['from_hour1'];
		$from_m1 = $_POST['from_min1'];
		$to_h1 = $_POST['to_hour1'];
		$to_m1 = $_POST['to_min1'];
		$from_h2 = $_POST['from_hour2'];
		$from_m2 = $_POST['from_min2'];
		$to_h2 = $_POST['to_hour2'];
		$to_m2 = $_POST['to_min2'];
		$from_h3 = $_POST['from_hour3'];
		$from_m3 = $_POST['from_min3'];
		$to_h3 = $_POST['to_hour3'];
		$to_m3 = $_POST['to_min3'];
		$from_h4 = $_POST['from_hour4'];
		$from_m4 = $_POST['from_min4'];
		$to_h4 = $_POST['to_hour4'];
		$to_m4 = $_POST['to_min4'];
		$from_h5 = $_POST['from_hour5'];
		$from_m5 = $_POST['from_min5'];
		$to_h5 = $_POST['to_hour5'];
		$to_m5 = $_POST['to_min5'];
		$from_h6 = $_POST['from_hour6'];
		$from_m6 = $_POST['from_min6'];
		$to_h6 = $_POST['to_hour6'];
		$to_m6 = $_POST['to_min6'];
		$from_h7 = $_POST['from_hour7'];
		$from_m7 = $_POST['from_min7'];
		$to_h7 = $_POST['to_hour7'];
		$to_m7 = $_POST['to_min7'];
	
		$monday = $from_h1 . ":" . $from_m1 . " - " . $to_h1 . ":" . $to_m1;
		$tuesday = $from_h2 . ":" . $from_m2 . " - " . $to_h2 . ":" . $to_m2;
		$wednesday = $from_h3 . ":" . $from_m3 . " - " . $to_h3 . ":" . $to_m3;
		$thursday = $from_h4 . ":" . $from_m4 . " - " . $to_h4 . ":" . $to_m4;
		$friday = $from_h5 . ":" . $from_m5 . " - " . $to_h5 . ":" . $to_m5;
		$saturday = $from_h6 . ":" . $from_m6 . " - " . $to_h6 . ":" . $to_m6;
		$sunday = $from_h7 . ":" . $from_m7 . " - " . $to_h7 . ":" . $to_m7;
		$weekdays = [$monday, $tuesday, $wednesday, $thursday, $friday, $sunday, $saturday];
		if ($monday == "HR:MIN - HR:MIN") {
			$monday = "N/A";
		}
		if ($tuesday == "HR:MIN - HR:MIN") {
			$tuesday = "N/A";
		}
		if ($wednesday == "HR:MIN - HR:MIN") {
			$wednesday = "N/A";
		}
		if ($thursday == "HR:MIN - HR:MIN") {
			$thursday = "N/A";
		}
		if ($friday == "HR:MIN - HR:MIN") {
			$friday = "N/A";
		}
		if ($saturday == "HR:MIN - HR:MIN") {
			$saturday = "N/A";
		}
		if ($sunday == "HR:MIN - HR:MIN") {
			$sunday = "N/A";
		}	

	 //                                 DONE        DONE     DONE   DONE    DONE    DONE     DONE     DONE     DONE      DONE    DONE     DONE      DONE     DONE    
		mysql_query("INSERT INTO tutor (firstname, lastname, email, price, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES('$firstname', '$lastname', '$email', '$charge', '$cc1', '$cc2', '$cc3', '$cc4', '$cc5', '$cc6', '$cc7', '$cc8', '$cc9', '$cc10', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday')") or die(mysql_error());
		echo("DATA INSERTED SUCCESSFULLY!");
	}
?>