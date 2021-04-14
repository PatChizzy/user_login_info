
<?php session_start();
$error_count = 0;
$email = $_POST ['email'] != "" ? $_POST['email'] : $error_count++;
$password = $_POST['password'] != "" ? $_POST['password']  : $error_count++;
$_SESSION  ['password'] = $password;
$_SESSION ['email'] = $email;


if ($error_count > 0) {
	$session_error = "You have " . $error_count  . "error";

	if ($error_count > 1)  {
		$session_error .= "s";
	}

	$session_error .= "in your form submission";
	$_SESSION["error"] = $session_error;
		header("Location: forgot_password.php");
	}
else{
	$all_users = scandir("users/");
		$count_all_users = 	count($all_users);


	for ($counter=0; $counter < $count_all_users ; $counter++) { 
		$current_user = $all_users[$counter];




		if ($current_user == $email. ".json") {

			$user_string = file_get_contents("users/" .  $current_user);

			$user_object = json_decode($user_string , true);

			// var_dump($user_object);
			// exit();

	$userObject =
	[
		'first_name' => $user_object['first_name'],
		'last_name' => $user_object['last_name'],
		'email' => $user_object['email'],
		'dob' => $user_object['dob'],
		'gender' => $user_object['gender'],
		'password' =>$password 
	];

		// var_dump($userObject);
		// 	exit();

	file_put_contents("users/"  . $userObject ['email'] . ".json" , json_encode($userObject));
	$_SESSION ["message"] = "Registration successful, you can now login";
	echo $_SESSION ["message"];
	header("location: login_page.php");


}			
}
}


	?>