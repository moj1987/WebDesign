<?php
$class=$_POST['class'];
$selectedStudents= $_POST['student'];

if (isset($_POST["save"])) {

$serverName="localhost";
$userName= "root";
$passWord= "";
$DbName="school";

// Create connection
$conn= new mysqli($serverName,$userName,$passWord,$DbName);

// Check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

// Make values string for SQL query
$items="";
foreach($selectedStudents as $stu){
   $items.="(".$stu . ",".$class."),";
}

// Remove the last comma
$items = rtrim($items, ",");

// Insert items into table
$sql = "INSERT INTO studentClass (studentId, classId)
        VALUES $items";

if ($conn->query($sql) === TRUE){
    header('location: ../pages/addToClass');
    //How to propmt user with a success message?
} else {
    echo "oops".$sql."<br>".$conn->error;
}

$conn->close();
}
?>