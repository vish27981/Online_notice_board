<?php
include_once('connection.php');
$uname="admin";
$pwd="admin";

if(isset($_POST['submit']))
{
  $fullname=$_POST['fullname'];
  $emailid=$_POST['emailid'];
  $mobileno=$_POST['mobileno'];
  $description=$_POST['description'];

$query=" insert into contactus (fullname,emailid,mobileno,description)values ('$fullname','$emailid','$mobileno','$description')";

$data=mysqli_query($conn,$query);



}


?>

<html>
	<head>
		<title>Contact us</title>
		
	</head>
	
	<body>
	
	
		
		<form align="left" method="post" autocomplete="off">
		<table>
		
            <h1  class="title"><b><u>Contact us</u></b></h1>
            <div class="input-container">
			 <label>Username</label><br>
              <input type="text" name="fullname" class="input" /><br><br><br>
              
       
            </div>
            <div class="input-container">
			 <label>Email</label><br>
              <input type="email" name="emailid" class="input" /><br><br><br>
       
              
            </div>
            <div class="input-container">
			 <label>Phone</label><br>
              <input type="tel" name="mobileno" class="input" /><br><br><br>
             
            
            </div>
            <div class="input-container textarea">
			 <label>Message</label><br>
              <textarea name="description" class="input"></textarea><br><br><br>
            
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        
     
    
	
		   	
		                <h2>Contact us</h2>
		               <h4>Mobile: 973971621<br/><br>
		                Email:vishakhaprajapati516@gmail.com<br/><br>
		              Website: <a href=http://localhost/NoticeBoard/index.php>NoticeBoard</a><h4>
                   </div>
		   	      
		    </div>
              
		  
		
	</body>
</html>

