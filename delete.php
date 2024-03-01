<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include("database.php");
	$sql = "Delete FROM book WHERE id = $id";
	if (mysqli_query($conn,$sql)) {
		session_start();
		$_SESSION["delete"] = "Book deleted successfully";
		header("Location:booklist.php");
		//echo "<div class='alert alert-success'>Record deleted successfully</div>";
	}else{
		echo "<div class='alert alert-success'>Record unable to delete</div>";
	}
}

?>