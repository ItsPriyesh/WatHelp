<?php
	// 1. connect to database
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("tutors") or die(mysql_error());
	echo "CONNECTED TO THE MOTHERFUCKIN' DATABASE!!";
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['fname'];
	$price = $_POST['fname'];
	$course1 = $_POST['fname'];
	$course2 = $_POST['fname'];
	$course3 = $_POST['fname'];
	$course4 = $_POST['fname'];
	$course5 = $_POST['fname'];
	$course6 = $_POST['fname'];
	$course7 = $_POST['fname'];
	$course8 = $_POST['fname'];
	$course9 = $_POST['fname'];
	$course10 = $_POST['fname'];
	$monday = $_POST['fname'];
	$tuesday = $_POST['fname'];
	$wednesday = $_POST['fname'];
	$thursday = $_POST['fname'];
	$friday = $_POST['fname'];
	$saturday = $_POST['fname'];
	$sunday = $_POST['fname'];
?>