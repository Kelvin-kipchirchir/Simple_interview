<?php
include("database.php");
if (isset($_POST["create"])) {
	$title = mysqli_real_escape_string($conn, $_POST["title"]);
	$author = mysqli_real_escape_string($conn, $_POST["author"]);
	$type = mysqli_real_escape_string($conn, $_POST["type"]);
	$description = mysqli_real_escape_string($conn, $_POST["description"]);
	$sql = "INSERT INTO book (title,author,type,description) VALUES ('$title','$author','$type','$description')";
	if(mysqli_query($conn,$sql)){
		session_start();
		$_SESSION["create"] = "New Book added successfully";
		header("Location:booklist.php");
		//echo "<div class='alert alert-success'>Record inserted successfully</div>";

	}else{
		die("Error occured!!!");
	}

}
//--->Edit Function
if (isset($_POST["edit"])) {
	$title = mysqli_real_escape_string($conn, $_POST["title"]);
	$author = mysqli_real_escape_string($conn, $_POST["author"]);
	$type = mysqli_real_escape_string($conn, $_POST["type"]);
	$description = mysqli_real_escape_string($conn, $_POST["description"]);
	$id= mysqli_real_escape_string($conn, $_POST["id"]);
	$sql = "UPDATE book SET title = '$title',author = '$author',type = '$type',description = '$description' WHERE id=$id";
	if(mysqli_query($conn,$sql)){
		session_start();
		$_SESSION["update"] = "Book details updated  successfully";
		header("Location:booklist.php");
		//echo "<div class='alert alert-success'>Record updated successfully</div>";
	}else{
		die("Error occured!!!");
	}

}
//--->login script functionality
	
        if (isset($_POST["login"])) {
        	$email = $_POST["email"];
        	$password = $_POST["password"];
        	require_once "database.php";
        	$sql = "SELECT * FROM users WHERE email = '$email'";
        	$result = mysqli_query($conn,$sql);
        	$user = mysqli_fetch_array($result,MYSQLI_ASSOC);
        	if ($user) {
        		if (password_verify($password, $user['password'])) {
        			session_start();
        			$_SESSION["user"] =  "yes";
        			header("Location: Dashboard.php");
        			die();
        		}else{
        			echo "<div class='alert alert-danger'>Current user does not exist password mismatch!!!</div>";
        		}
        	}else{
        		echo "<div class='alert alert-danger'>Current user does not exist email mismatch!!!</div>";
        	}
        }

	//--->Registration functionality
		if (isset($_POST["submit"])) {
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$repeatpassword = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
			$errors = array();

          if (empty($fullname) OR empty($email) OR empty($password) OR empty($repeatpassword)) {
				array_push($errors,"All fields are required");
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "Email is not valid");	
			}
			if (strlen($password)<8) {
				array_push($errors, "Password must be at least 8 characters");
			}
			if ($password!== $repeatpassword) {
			    array_push($errors, "password does not match");
			}
			require_once "database.php";
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($conn,$sql);
			$rowcount = mysqli_num_rows($result);
			if ($rowcount>0) {
				array_push($errors, "user already exist");
			}


			if (count($errors)>0) {
				foreach($errors as $error) {
					echo "<div class='alert alert-danger'>$error</div>";
				}

			}else{
				//print_r($_POST);
				$sql = "INSERT INTO users (fullname,email,password) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				$preparestmt = mysqli_stmt_prepare($stmt,$sql);
				if ($preparestmt) {
					mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$passwordHash);
					mysqli_stmt_execute($stmt);
					session_start();
		            $_SESSION["register"] = "You have registered successfully";
					echo "<div class='alert alert-success'>You have registered successfully</div>";
				}else{
					die("registration error.....");
				}
			}
		}

		
?>