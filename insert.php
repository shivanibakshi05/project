<?php
  $con = mysqli_connect('localhost','root','');
  if(!$con)
  {
	  echo 'Not Connected To Server';
  }
  if(!mysqli_select_db($con,'db1'))
  {
	  echo 'Database Not Selected';
  }
  
  $Name = $_POST['fullname'];
  $Email = $_POST['email'];
  
  $sql = "INSERT INTO users (Name,Email) Values ('$Name', '$Email')"; 
  
  if(!mysqli_query($con,$sql))
  {
	echo 'Not Inserted';  
  }
  else
  {
	echo 'Inserted'; 
  }	  
   
  header("refresh:2; url=loginform.html");   
?>