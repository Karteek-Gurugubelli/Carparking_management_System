<?php

$fname = filter_input(INPUT_POST,'fname');

$lname = filter_input(INPUT_POST,'lname');
$birthday = filter_input(INPUT_POST,'birthday');
$gender = filter_input(INPUT_POST,'gender');
$email = filter_input(INPUT_POST,'email');
$phone = filter_input(INPUT_POST,'phone');
$date = filter_input(INPUT_POST,'date');
$time = filter_input(INPUT_POST,'time');

if(!empty($fname)){
	if (!empty($lname)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "cars";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error() .') '
     . mysqli_connect_error());
	}
	else{
	$sql = "INSERT INTO s5(fname,lname,birthday,gender,email,phone,date,time)
	value ('$fname','$lname','$birthday','$gender','$email','$phone','date','time')";
		if ($conn->query($sql)){
			echo"Your slot has been Booked Successfully";
		}
		else{
			echo"Error: " . sql ."<br>". $conn->error;
		}
	$conn->close();
	}
}
}

?>