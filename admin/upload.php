<?php
	$conn=new PDO('mysql:host=localhost; dbname=online_notice', 'root', '') or die(mysql_error());
	if(isset($_POST['submit'])!=""){
	  $name=$_FILES['file']['name'];
	  $size=$_FILES['file']['size'];
	  $type=$_FILES['file']['type'];
	  $temp=$_FILES['file']['tmp_name'];
	  $fname = date("YmdHis").'_'.$name;
	  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
	  if($chk){
	    $i = 1;
	    $c = 0;
		while($c == 0){
	    	$i++;
	    	$reversedParts = explode('.', strrev($name), 2);
	    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
	    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
	    	if($chk2 == 0){
	    		$c = 1;
	    		$name = $tname;
	    	}
	    }
	}
	 $move =  move_uploaded_file($temp,"upload/".$fname);
	 if($move){
	 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
		if($query){
		header("location:upload.php");
		}
		else{
		die(mysql_error());
		}
	 }
	}
	?>


<html>
<body>
  <div class="container">
  
    <h1 align="center"><b><u>Upload File</u></b><h1>
	<br>
	<hr>
    <form align="center"enctype="multipart/form-data"  name="form" method="post">
		
			<input type="file" name="file" id="file" />
			<input type="submit" name="submit" id="submit" value="Submit" />
	</form>
	<hr>
	<br>

	
 
  </div>	
</body>
</html>