<?php
session_start();
include('connection.php');

//Define error message
$missingUsername = '<p><strong>Please enter a username!</strong></p>';
$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';

// get username, email, password,password2

//get username
if (!isset($POST["username"])) {
    $errors .= $missingUsername;
} else {
    $username = filter_var($POST["username"], FILTER_SANITIZE_STRING);
}
//get email
if (!isset($POST["email"])) {
    $errors .= $missingEmail;
} else {
    $email = filter_var($POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors .= $invalidEmail;
    }
}

//get password

if (empty($_POST["password"])) {
    $errors .= $missingPassword;
} elseif (!(strlen($_POST["password"]) > 6
    and preg_match('/[A-Z]/', $_POST["password"])
    and preg_match('/[0-9]/', $_POST["password"]))) {
    $errors .= $invalidPassword;
} else {
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    if (empty($_POST["password2"])) {
        $errors .= $missingPassword2;
    } else {
        $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
        if ($password !== $password2) {
            $errors .= $differentPassword;
        }
    }
}
//if there are any errors print error
if ($errors) {
    $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
    echo $resultMessage;
    exit;
}

//no errors

//Prepare variables for the queries
