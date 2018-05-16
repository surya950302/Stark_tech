<?php
	$conn = mysqli_connect("localhost","root","","newark_it");
	session_start();
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	 $username=            $_POST['Username'];
	 $password=   		  $_POST['Password'];
   $_SESSION['name'] = $username;
	 #echo "MY USERNAME IS".$username." <br/> AND MY PASSWORD IS ".$password;
	
      $response=mysqli_query($conn, "SELECT * FROM MANAGER Where CUSERNAME='$username' AND CPASSWORD='$password' ");
    	$rowcount=mysqli_num_rows($response);
      #echo $rowcount;
      if ($rowcount==0)
      {
   	  	echo "PLEASE ENTER VALID USERNAME AND PASSWORD.";
  		  die('Error: ' . mysqli_error($conn));
      }
      else
      {        
          //echo "<script>alertI('Login Success');</script>";
          header('location:first.php?');
  		  
      }

	mysqli_close($conn);
?>