<!--// https://www.w3schools.com/PHP/php_ajax_database.asp -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

$serverName = "localhost";
$userName = "root";
$passWord = "";
$DbName = "school";

// Create connection
$conn = new mysqli($serverName, $userName, $passWord, $DbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,$DbName);

if ($q==0){
$sql="SELECT  student.firstName, student.lastName
      FROM  student" ;    
} else{
$sql="SELECT studentclass.studentId , student.firstName, student.lastName
      FROM  studentclass 
      JOIN student ON  studentclass.studentId = student.id
      WHERE classId =" .$q ."";
}

$result = mysqli_query($conn,$sql);

if (!$result) {
    die( mysqli_error($conn));
}

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>

</tr>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['lastName'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html> 