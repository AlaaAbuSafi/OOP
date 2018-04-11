
<?php
	require_once "users.php";
		$errors = array(); 

	if (isset($_POST['login_user'])) {
		require 'connect.php';

		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);


		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		
		}
		


		if (count($errors) == 0) {
			$password = md5($password);
			$user = new User();
			$results = $user->login($username,'aa@bb',$password);
			//header('location: http://localhost/dashboard/OOP/login.php');
			echo $username . $password . "     hi" . $results;
			
			if ($results) {
				header('location: http://localhost/dashboard/OOP/member.php');
				//array_push($errors, "Wrong username/password combination");
			}

			
		}
		else{
			
		}


	}

?>

