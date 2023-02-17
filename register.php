<?php
// Get the username and password from the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Make sure the password and confirm password fields match
if ($_POST['password'] != $_POST['confirm_password']) {
    die("Error: Passwords do not match.");
}

// Open the users file for appending
$users_file = fopen("users.txt", "a");

// Write the username and password to the users file
fwrite($users_file, $username . ":" . $password . "\n");

// Close the users
