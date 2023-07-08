<style>
td
{
	padding:10px;
}
</style>
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

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
			<table align="center">
			<h1 align="center"><u><b>Downloads</h1>
				<tr>
				     
					<th align="center"><h3>Files</th>
					<th align="center"><h3>Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
 
	
</body>
</html>