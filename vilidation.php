<?php 
include 'dbcon.php';
if (isset($_SERVER['REQUEST_METHOD'])) {
	 $name=$_POST['username'];
	 $pass=$_POST['password'];
    $sql = "SELECT `username`='$name' AND `password`='$pass' FROM `users`";
    $result = mysqli_query($conn, $sql);
     $row=mysqli_num_rows($result);    
    if ($row>0){
           
            header("location:index.php");
               }
          elseif($row=0){
            echo "invalid pass";
           }
              }
 ?>