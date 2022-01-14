<?php 
  
  
  include "connection.php";
  
  
  $username = "";
  $email = "";
 
  if (isset($_POST['registration'])) {
  	$first_name = $_POST['first_name'];
  	
  	$email = $_POST['email'];
  	

  	$sql_u = "SELECT * FROM users WHERE first_name ='$first_name'";
  	
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
          
        exit();
  	}
  }
?>