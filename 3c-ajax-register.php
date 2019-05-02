<?php
// (1) INIT
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "3a-config.php";
require PATH_LIB . "3b-database.php";
$pdoUsers = new Users();
$regPass = true;
$checks = "";

// (2) PROCESS REGISTRATION CHECKS
// YOU MIGHT WANT TO CHANGE SOME OF THE CHEKCS HERE
// E.G. MINUMUM 5 CHARACTERS FOR THE NAME, PASSWORD STRENGTH, ETC...

// NAME
if ($_POST['name']=="") {
	$regPass = false;
	$checks .= "Please enter your name\n";
}

// EMAIL
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$regPass = false;
	$checks .= "Please enter a valid email\n";
}
// CHECK IF EMAIL IS ALREADY REGISTERED
else {
	if ($pdoUsers->checkReg($_POST['email'])) {
		$regPass = false;
		$checks .= $_POST['email']." is already registered\n";
	}
}

// PASSWORD
// DO YOUR OWN MINIMUM PASSWORD STRENGTH TEST HERE
if ($_POST['password']=="") {
	$regPass = false;
	$checks .= "Please enter a password\n";
}

if ($_POST['cpassword']=="") {
	$regPass = false;
	$checks .= "Please confirm your password\n";
}

// CHECK IF PASSWORDS MATCH
if ($_POST['password']!=$_POST['cpassword']) {
	$regPass = false;
	$checks .= "Passwords do not match\n";
}

// (3) IF CHECKS ARE ALL GREEN - GO FOR ACTUAL DATABASE REGISTRATION
if ($regPass) {
	if (!$pdoUsers->register([$_POST['name'], $_POST['email'], $_POST['password']])) {
		$regPass = false;
		$checks = "Error with registration";
	}
}

// (4) THE RESULTS
echo json_encode([
	"status" => $regPass,
	"message" => $checks
]);
?>