<?php
	class Auth extends Database
	{
		public function Login($data){
			$email = $data['email'];
			$password = $data['password'];
			if ($email == '' or $password == '') {
				$_SESSION['msg'] = "<div class='alert alert-danger'>Pleace fill out the form</div>";
				return $_SESSION['msg'];
			}else{

			$password = sha1($password);

		 	$sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
		 	$query = $this->db->query($sql);
		 	$res = mysqli_fetch_array($query);
		 	if ($res != null) {
		 		$_SESSION['email']= $res;
		 		header('location:index.php');
		 	}else{
		 		$_SESSION['msg'] = "<div class='alert alert-danger'>User Login not success..</div>";
		 		return $_SESSION['msg'];
		 	}

			}
		}
		public function register($data){
			$firstname = trim($data['first_name']);
			$lastname = trim($data['last_name']);
			$email = trim($data['email']);
			$password = sha1($data['password']);
			$cpassword = sha1($data['confirm_password']);
			$sheck_email = $this->emailCheck($email);
			if($firstname == '' or $lastname == '' or $email == '' or $password == '' or $cpassword == '')
			{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Pleace fill out the form</div>";
				return $_SESSION['msg'];
			}
			if(strlen($firstname) < 3){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Firstname must be 3 character.</div>";
				return $_SESSION['msg'];
			}
			if(strlen($lastname) < 3){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Last name must be 3 charecter.</div>";
				return $_SESSION['msg'];
			}
			if(strlen($password) < 6){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Passwor must be 6 charecter.</div>";
				return $_SESSION['msg'];
			}
			if($password != $cpassword){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Password and confirm password not match</div>";
				return $_SESSION['msg'];
			}
			if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Email is not valid</div>";
				return $_SESSION['msg'];
			}
			if($sheck_email == true)
			{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Email all ready exist.</div>";
				return $_SESSION['msg'];
			}

			$sql = "INSERT INTO users(first_name,last_name,email,password)VALUES('$firstname','$lastname','$email','$password')";
			if($this->db->query($sql)){
				header('location:login.php');
				$_SESSION['msg'] = "<div class='alert alert-success'>User Registration successfull.</div>";
				return $_SESSION['msg'];

			}else{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Sorry! You are registration not success</div>";
				return $_SESSION['msg'];
			}
		}

		//email check function ----
		public function emailCheck($email){
			$sql = "SELECT email FROM users WHERE email = '$email'";
			
			$query = $this->db->query($sql);
			$data = mysqli_fetch_array($query);
			if($data != null){
				return true;
			}
			return false;
		}
	}