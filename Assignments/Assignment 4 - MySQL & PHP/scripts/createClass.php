<?php
$serverName="localhost";
$userName= "root";
$passWord= "";
$DbName="school";

$className=$_POST['className'];
$sectionName=$_POST['sectionName'];
$sectionTeacher=$_POST['sectionTeacher'];

// Create connection
$conn= new mysqli($serverName,$userName,$passWord,$DbName);

// Check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO class (className, sectionName, sectionTeacher)
VALUES
('$className','$sectionName','$sectionTeacher')";
if ($conn->query($sql) === TRUE){
    header('location: ../pages/createClass.html');
    //How to propmt user with a success message?
} else {
    echo "oops".$sql."<br>".$conn->error;
}

$conn->close();
?>