<?php

// print_r($_POST); 

$error_count = 0;

$first_name = $_POST['first_name'] != ""?   $_POST['first_name'] : $error_count++;
$last_name = $_POST['last_name'] != ""?   $_POST['last_name'] : $error_count++;
$email = $_POST['email'] != ""?   $_POST['email'] : $error_count++;
$dob = $_POST['dob'] != ""?   $_POST['dob'] : $error_count++;
$gender = $_POST['gender'] != ""?   $_POST['gender'] : $error_count++;
$password = $_POST['password'] != ""?   $_POST['password'] : $error_count++;


// $_SESSION["first_name"] = $first_name;
// $_SESSION["last_name"] = $last_name;
// $_SESSION["email"] = $email;
// $_SESSION["dob"] = $dob;
// $_SESSION["gender"] = $gender;
// $_SESSION["password"] = $password;

// if ($error_count > 0){
// 	$_SESSION["error"] = "you have " . $error_count . "errors in your form submission" ;
// 	header("registration_page.php");

// }
// else 
	
// 	$count_all_users = 	count($all_users);
// $all_users = scandir("users/");
// $new_user_id = ($count_all_users -1);
	

	$userObject =
	[
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'dob' => $dob,
		'gender' => $gender,
		'password' =>$password 
	];

// //checking if user already exist in the db
// 	for ($counter=0; $counter < $count_all_users ; $counter++) { 
// 		$existing_user = $all_users [$counter];

		if ($existing_user  == $email . ".json") {
			$_SESSION ["error"] = "Registration failed, user already exists";
 			// header("location: registration_page.php");
 			header("registration_page.php");
 			die();

		}


{
//file database
file_put_contents("users/"  . $email . ".json", json_encode($userObject));
$_SESSION ["message"] = "Registration successful, you can now login";
header("location: login_page.php");

}







?>