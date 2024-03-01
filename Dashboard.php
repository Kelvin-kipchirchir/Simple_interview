<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--script src="myscript.js" defer></script-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
      	<a href="logout.php" class="nav-link px-3" onclick="confirm();">Logout</a>
        <!--a class="nav-link px-3" href="/logout">Sign out</a-->
      </div>
    </div>
  </header>
<body>
	<div class="container">

     <div class="container-fluid">
       <div class="row">
       	 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="notify()">
                <span data-feather="file" class="align-text-bottom"></span>
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="add_new_book()">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Add new book
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="contact()">
                <span data-feather="users" class="align-text-bottom"></span>
                Contacts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="quote()">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                Quotes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers" class="align-text-bottom"></span>
                Integrations
              </a>
            </li>
          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>App Settings</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Security
              </a>
            </li>
          </ul>
        </div>
      </nav>


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>
      <div id="interface">
         <div id="profilediv">
             <h2>Profile</h2>
              <p>sggsgsgsgsgs</p>
         </div>
         <div id="notificationdiv">
            <h4>Notifications</h4>
            <p>xhdhddjjdjdj</p>
       </div>
        <div id="add_new_bookdiv">
           <div class="container">
		       <header class="d-flex justify-content-between my-4">
			      <h1>Add New Book</h1>
			         <div>
				      <a href="booklist.php" class="btn btn-primary  ">Back</a>
			       </div>
			
		        </header>
		  <form action="process.php" method="post">
			<div class="form-element my-4">
				<input type="text" class="form-control" name="title" placeholder="Book Title:">
			</div>
			<div class="form-element my-4">
				<input type="text"  class="form-control" name="author" placeholder="Author Name:">
			</div>
			<div class="form-element my-4">
				<select name="type" class="form-control">
					<option value="">Select Book Type</option>
					<option value="Adventure">Adventure</option>
					<option value="Fantasy">Fantasy</option>
					<option value="SciFi">SciFi</option>
					<option value="Horror">Horror</option>
				</select>
			</div>
			<div class="form-element my-4">
				<input type="text"  class="form-control" name="description" placeholder="Book Description:">
			</div>
				<div class="form-element">
				<input type="submit" class="btn btn-success" value="Add Book" name="create">
			</div>

		</form>
	</div>
        </div>
       <div id="contactsdiv">
         <h3>Contacts</h3>
    </div>
    <div id="quotesdiv">
        <h3>Quotes</h3>
    </div>
     </div>
        </div>
      </main>
       </div>
   </div>
		
	</div>
<script type="text/javascript">
		function confirm(){
			var v=confirm("Are you sure");
			if(v==true){
				alert("OK loging out.....")
			}else{
				alert("you have aborted......")
			}
		}
	function notify(){
        var note=document.getElementById('notificationdiv').style.display = 'block';
        var prof=document.getElementById('profilediv').style.display = 'none';
        var resum=document.getElementById('add_new_bookdiv').style.display = 'none';
        var quo=document.getElementById('quotesdiv').style.display = 'none';
        var cont=document.getElementById('contactsdiv').style.display = 'none';
     }
     function add_new_book(){
        var note=document.getElementById('notificationdiv').style.display = 'none';
        var prof=document.getElementById('profilediv').style.display = 'none';
        var resum=document.getElementById('add_new_bookdiv').style.display = 'block';
        var quo=document.getElementById('quotesdiv').style.display = 'none';
        var cont=document.getElementById('contactsdiv').style.display = 'none';
     }
     function contact(){
        var note=document.getElementById('notificationdiv').style.display = 'none';
        var prof=document.getElementById('profilediv').style.display = 'none';
        var resum=document.getElementById('add_new_bookdiv').style.display = 'none';
        var quo=document.getElementById('quotesdiv').style.display = 'none';
        var cont=document.getElementById('contactsdiv').style.display = 'block';
     }
     function quote(){
        var note=document.getElementById('notificationdiv').style.display = 'none';
        var prof=document.getElementById('profilediv').style.display = 'none';
        var resum=document.getElementById('add_new_bookdiv').style.display = 'none';
        var quo=document.getElementById('quotesdiv').style.display = 'block';
        var cont=document.getElementById('contactsdiv').style.display = 'none';
     }
</script>
</body>
</html>