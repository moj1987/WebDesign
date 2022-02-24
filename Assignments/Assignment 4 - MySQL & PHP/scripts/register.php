<?php
$serverName="localhost";
$userName= "root";
$passWord= "";
$DbName="school";

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$fatherName=$_POST['fatherName'];
$phoneNumber=$_POST['phoneNumber'];
$address=$_POST['address'];
$DOB=$_POST['dob'];

// Create connection
$conn= new mysqli($serverName,$userName,$passWord,$DbName);

// Check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO student (firstName, lastname, fatherName, phoneNumber, address, DOB)
VALUES
('$firstName','$lastName','$fatherName','$phoneNumber','$address','$DOB')";
if ($conn->query($sql) === TRUE){
    header('location: ../pages/register.html');
    //How to propmt user with a success message?
} else {
    echo "oops".$sql."<br>".$conn->error;
}

$conn->close();
?>