<?php 
include 'dbcon.php';
if (isset($_SERVER['REQUEST_METHOD'])) {
	 $name=$_POST['name'];
	 $pass=$_POST['password'];
	 $cpass=$_POST['cpassword'];
	 if ($pass==$cpass) {
$sql = "SELECT * FROM `users` WHERE username='$name' AND password='$pass';";
    $run=mysqli_query($conn , $sql);
    if (mysqli_num_rows($run)==1) {
    echo "Date Duplicated";
    header("location:login.php");
    }
    else{
    	$sq="INSERT INTO `users`(`username`, `password`) VALUES ('$name','$pass')";
    	$result=mysqli_query($conn ,$sq);
    	if ($result) {
          header("location:login.php");
    	}
    }
    
     }   
	 }
?>
