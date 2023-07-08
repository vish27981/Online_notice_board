<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title> Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background: pink">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong> Notice Board</strong></a></li>
      
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>
	
<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/college.png" alt="...">
     

  
  
</div>

</div>


<div class="container">
	<div class="row">
	
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo " 
		<h4>
		
	             In today’s world, everything is digitalized and paper is being used less and less everyday.
             How often has it happened that we miss some important notice because we have to go to a
             Wall and read the notice there? There are dedicated file hosting sites and clouds used by     
              some institutions, but there is a definite need for dedicated noticeboard system. The
              proposed system is such a system.
 
		</h4>";
		}
		?>
		
		
		
		
		</div>
	
		
			</div>

</div>



<br/>
<br/>
<br/>
<br/>



			<nav class="navbar navbar-default navbar-center" style="background:pink">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-center">
    <align="center">
      <li align="center"><h4="center"><b>Copyright @ 2021 Notice Board. all rights reserved.</li><br/>
	  <li>Devloped & Managed by Vishakha Prajapati</b>
	</ul>




</div>
</nav>


	</body>
</html>