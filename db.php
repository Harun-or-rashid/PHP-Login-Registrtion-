<?php
//include 'index.php';
$host="localhost";
$user="root";
$password="";
$D_name="login";

session_start();

$con=mysqli_connect($host,$user,$password,$D_name);


if($con){
	
 header('location:index.php');
}
else{
    echo "not connected";
}





if(isset($_POST['signup'])){
	$users=$_POST['name'];
	$pass=$_POST['password'];


	$ins="INSERT INTO sign (name,password)values('$users','$pass')";

	if (mysqli_query($con,$ins)) {
		echo "inserted";
	}
	else{
		echo "not";
	}
}


if(isset($_POST['login'])){
	$users=$_POST['name'];
	$pass=$_POST['password'];
	$s="SELECT * FROM sign WHERE name='$users' AND password='$pass'";
    
    $slkt=mysqli_query($con,$s);

    if (mysqli_num_rows($slkt)>0) {
    	$userInfo=mysqli_fetch_array($slkt);
    	echo "Successfull Login ", $userInfo['name'];

    	$_SESSION['user']=$userInfo['id'];
    	header('loction:user.php');
    }
    else{

    }



}