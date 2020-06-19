<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Welcome Admin!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Admin Home Page<span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=VolunteerList"><span class="glyphicon glyphicon-th-list"></span> Volunteer List</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-list-alt"></span> Manage  Programmes</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="VolunteerList")
			{
				include('VolunteerList.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('DisplayProgram.php');
			
			}
			
			if($page=="update_program")
			{
				include('update_program.php');
			
			}
			
			
			
			if($page=="addNewProgram")
			{
				include('addNewProgram.php');
			
			}
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
<div class="content-wrapper">
    <div class="container-fluid">		
		  <h1 class="page-header">VROOM</h1>
		  This is a system that manages volunteer's info like request, updating<br>
		  and deleting volunteer data and updating programmes that being held by Yayasan Salam Malaysia<br><br><br>

<div class="card mb-3">
        <div class="card-header">
          <b>Condition for deleting user data.</b></div>
<div class="card-body">
          <div class="table-responsive"><td colspan="2">
           <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
				<td><b>Status</b></td>
                <td><b>Program Joined</b></td>
                </tr>
			<tbody>
                <tr>
                  <td>Active Member</td>
                  <td>>=30</td>
				</tr>
				<tr>
                  <td>Member</td>
                  <td>>=20</td>
				</tr>
				<tr>
                  <td>User data will be deleted</td>
                  <td><15</td>
				</tr>
				</tbody>
				</td>
</table>
		  
		  <?php } ?>
		  
		  </div>
        </div>
      </div>
    </div>
</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="js/datatables/jquery.dataTables.js"></script>
    <script src="js/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
  </body>
</html>