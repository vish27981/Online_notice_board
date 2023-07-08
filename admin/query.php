<style>
td
{
	padding:15px;
}
</style>

<?php
include('connection.php');
$query="select * from contactus";
$data =mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0)
{
	?>
<html>

	<title>Query</title>
	
	<h1 align="center"><b><u>Queries</u></b></h1>
	  <table class="table table-bordered" align="center">
	  
	    <tr>
		  <th>ID</th>
	      <th>Name</th>
		  <th>Email</th>
		  <th>Mobile</th>
		  <th>Description</th>
		</tr>  
	  
	<?php

   while($result=mysqli_fetch_assoc($data))
    {
		echo"<tr>
			  <td>".$result['id']."</td>
			  <td>".$result['fullname']."</td>
			  <td>".$result['emailid']."</td>
			  <td>".$result['mobileno']."</td>
			  <td>".$result['description']."</td>
			   
		       
		    </tr>";
	}
}
else
{
	echo"no record";
}
?>


</table>