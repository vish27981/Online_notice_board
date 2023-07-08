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
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Notice Board Admin Dashboard</title>

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">    
    
    <link href="../css/dashboard.css" rel="stylesheet">
   

    
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
          <a class="navbar-brand" href="index.php">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		  
          
			  
            <li><a href="logout.php"><span class="glyphicon glyphicon-off">Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><span class="sr-only">(current)</span></a></li>
			
			 <li><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
	
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Mange  Notification</a></li>
			 
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-lock"></span> Update Password</a></li>
			
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			
			 <li><a href="index.php?page=upload"><span class="glyphicon glyphicon-upload"> Upload</a></li>
			 <li><a href="index.php?page=query"><span class="glyphicon glyphicon-question-sign"> Query</a></li>
			
			 
			
            
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			if($page=="upload")
			{
				include('upload.php');
			}
			
			if($page=="query")
			{
				include('query.php');
				
			}
		  }
		  
		  else
		  {
		  ?>
		  
		  <h1 class="page-header">Dashboard</h1>
		  <table align="center">
		  <tr>
		 <td><a href="index.php?page=notification"><img align="left" width="500px" height="250px"src="v.png"><figcaption align="center"><h3>Add/Delete Notice</h3></figcaption></a></td>
		 
		 
		
		  <td><a href="index.php?page=update_password"><img align="right" width="500px" height="250px" src="3.png"><figcaption align="center"><h3>Update Password</h3></figcaption></a></td>
		  </tr>
		  <tr>
		  <td><a href="index.php?page=manage_users"><img align="left" width="500px" height="250px"src="2.png"><figcaption align="center"><h3>Manage User</h3></figcaption></a></td>
		  
		  
		  <td><a href="upload.php"><img align="right" width="500px" height="250px" src="1.png"><figcaption align="center"><h3>Upload</h3></figcaption></a>
		  </td>
		  </tr>
		  </table>
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

   
  </body>
</html>
