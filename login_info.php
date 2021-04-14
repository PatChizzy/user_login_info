<?php

$error_count =0;

$email = $_POST ['email'] != ""? $_POST ['email'] : $error_count ++;
$password = $_POST ['password'] != ""? $_POST ['password'] : $error_count ++;

$_SESSION ['email'] = $email;

if ($error_count > 0) {
	$session_error = "You have " . $error_count  . "error";

	if ($error_count > 1)  {
		$session_error .= "s";
	}

	$session_error .= "in your form submission";
	$_SESSION["error"] = $session_error;
		header("Location: login_page.php");
	}

	else
	{
		$all_users = scandir("users/");
		$count_all_users = 	count($all_users);
		// print_r($all_users);

	for ($counter=0; $counter < $count_all_users ; $counter++) { 
		$current_user = $all_users[$counter];

		if ($current_user == $email. ".json") {
		// echo "Login email found, but password not checked";	
			$user_string = file_get_contents("users/" .  $current_user);

			$user_object = json_decode($user_string);

			$password_from_DB = $user_object ->  password;


			$password_from_User =$password;

		
				if ($password_from_DB == $password_from_User)  {
				header("Location: homepage.php");
				die();
				
				}

				else{
					echo "Invalid email or password ";
					die();
				}


					

		}

	
	}
	




}


?>