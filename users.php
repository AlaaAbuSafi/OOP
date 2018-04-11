<?php  

class User{
	

	public function login($username,$password)
	{
		require 'connect.php';
		session_start();

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($conn, $query);
			//if (mysqli_num_rows($results) == 1) {
				//$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				//header('location: http://localhost/dashboard/OOP/member.php');
			//}

			if ($results) {
				$_SESSION['UserName'] = $username;
				$rows = $results-> fetch_assoc();
 				
				$fname = $rows['fName'];
				$_SESSION['FName'] = $fname;

				$mname = $rows['mName'];
				$_SESSION['MName'] = $mname;

				$lname = $rows['lName'];
				$_SESSION['LName'] = $lname;

				$email = $rows['email'];
				$_SESSION['Email'] = $email;

				$password = $rows['password'];
				$_SESSION['Password'] = $password;

				$phone = $rows['phone'];
				$_SESSION['Phone'] = $phone;

				$gender = $rows['gender'];
				$_SESSION['Gender'] = $gender;
			}
			return $results;
	}

	public function register($username,$fname,$mname,$lname,$email,$password,$phone,$gender)
	{
		require 'connect.php';
		session_start();

		$query = "INSERT INTO user (username, fname, mname, lname, email, password, phone, gender) 
					  VALUES('$username', '$fname', '$mname', '$lname', '$email', '$password', '$phone', '$gender')";
			$results = mysqli_query($conn, $query);
			
			if ($results) {
				$_SESSION['UserName'] = $username;
				
				$_SESSION['FName'] = $fname;

				$_SESSION['MName'] = $mname;
				
				$_SESSION['LName'] = $lname;

				$_SESSION['Email'] = $email;

				$_SESSION['Password'] = $password;

				$_SESSION['Phone'] = $phone;

				$_SESSION['Gender'] = $gender;
			}
			
			return $results;
	}

	public function contact_us($name,$phone,$message,$date)
	{
		require 'connect.php';

		$query = "INSERT INTO contactus (name, phone, message, date) 
					  VALUES('$name', '$phone', '$message', '$date')";
			$results = mysqli_query($conn, $query);
			
			
			return $results;
	}

	public function gestContact_us($name,$email)
	{
		require 'connect.php';

		$query = "INSERT INTO interests (name, email) 
					  VALUES('$name', '$email')";
			$results = mysqli_query($conn, $query);
			//if (mysqli_num_rows($results) == 1) {
				//$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				//header('location: http://localhost/dashboard/OOP/member.php');
			//}
			
			return $results;
	}




	public function upload_Image($image,$username)
		{
			require '../connect.php';

			
				
				$query = "UPDATE user SET picture = '$image' WHERE username = '$username'";
				
				//$query = "INSERT INTO user (fName) VALUES ('alaalaal') ";
				$results = mysqli_query($conn, $query);



			return $results;

		}

		public function get_Image($username)
		{
			require '../connect.php';

			$query = "SELECT picture FROM user WHERE username='$username'";
			
			$result = mysqli_query($conn, $query);

			return $result;




		}

		public function ptojectProposal($title,$proposal,$date,$username)
		{
			require 'connect.php';

			$query = "INSERT INTO projectProposal (title, proposal, date, userName) 
					  VALUES('$title', '$proposal', '$date', '$username')";
			$results = mysqli_query($conn, $query);
			 //echo("Error description: " . mysqli_error($conn));

			return $results;
		}

		public function allNews()
		{
			require 'connect.php';

			$query = "SELECT * FROM advert ORDER BY id DESC";
			$results = mysqli_query($conn, $query);
			
			$rows = array();

	 		while($row = $results-> fetch_assoc()){

	 			$rows[] = $row;

	 		}

 			return $rows;
		}

		public function userInfo($username)
		{
			require 'connect.php';

			$query = "SELECT * FROM user WHERE username='$username'";
			
			$results = mysqli_query($conn, $query);
			$rows = $results-> fetch_assoc();

 			return $rows;
		}

		public function allProject()
		{
			require 'connect.php';

			$query = "SELECT * FROM project ORDER BY id DESC";
			$results = mysqli_query($conn, $query);
			
			$rows = array();

	 		while($row = $results-> fetch_assoc()){

	 			$rows[] = $row;

	 		}

 			return $rows;
		}




	}	
?>