<?php
// die("dcedcdc");
// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Registration code
if (isset($_POST['reg_user'])) {
	// die('register');
	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
		// Checking if the passwords match
	}

	// If the form is error free, then register the user
	if (count($errors) == 0) {

		$sql_u = "SELECT * FROM users WHERE username='$username'";
		$sql_e = "SELECT * FROM users WHERE email='$email'";
		$res_u = mysqli_query($db, $sql_u);
		$res_e = mysqli_query($db, $sql_e);

		//check already exist
		if (mysqli_num_rows($res_u) > 0) {
		   echo $name_error = "Sorry... username already taken";
		} else if (mysqli_num_rows($res_e) > 0) {
			print $email_error = "Sorry... email already taken";
		} else {
			// Password encryption to increase data security
			$password = md5($password_1);

			// Inserting data into table
			$query = "INSERT INTO users (username, email, password)
				VALUES('$username', '$email', '$password')";

			mysqli_query($db, $query);


			// Storing username of the logged in user,
			// in the session variable
			$_SESSION['username'] = $username;

			// Welcome message
			$_SESSION['success'] = "You have logged in";

			// Page on which the user will be
			// redirected after logging in
			header('location: welcome.php');
		}
	}
}

// User login
if (isset($_POST['login_user'])) {
	// die('login');

	// Data sanitization to prevent SQL injection
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// Error message if the input field is left blank
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {

		// Password matching
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username=
				'$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {

			// Storing username in session variable
			$_SESSION['username'] = $username;

			// Welcome message
			$_SESSION['success'] = "You have logged in!";

			// Page on which the user is sent
			// to after logging in
			header('location: welcome.php');
		} else {

			// If the username and password doesn't match
			array_push($errors, "Username or password incorrect");
		}
	}
}
