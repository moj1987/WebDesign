<?php
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

$getAllClasses = "SELECT * FROM class";

$allClasses =  $conn->query($getAllClasses);

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/ico" href="../images/favicon.ico" />
  <link rel="stylesheet" href="../styles/main.css" />
  <title>Conestoga</title>

<!--// https://www.w3schools.com/PHP/php_ajax_database.asp -->
<script>
function showClassStudents(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../scripts/showInfo.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

</head>

<body>
  <header>
    <img src="../images/logo.png" alt="Conestoga logo" />
    <div>
      <h1>Conestoga School</h1>
    </div>

    <nav id="navMenu">
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li>
          <a>Students</a>
          <ul>
            <li><a href="info.php" class="current">Info</a></li>
            <li>
            <li><a href="register.html">Register</a></li>
        </li>
      </ul>
      </li>
      <li class="lastItem"><a>Class</a>
        <ul>
          <li><a href="createClass.html">Create class</a></li>
          <li><a href="addToClass.php">Add to class</a></li>
        </ul>
      </li>
      </ul>
    </nav>
  </header>

  <aside id="navBar">
    <ul>
      <li>
        <a href="Info.php" class="current"> Info </a>
      </li>

      <li>
        <a href="addToClass.php"> Add to a class </a>
      </li>

      <li>
        <a href="register.html"> Register </a>
      </li>
      <li>
        <a href="CreateClass.html"> Create classes </a>
      </li>
    </ul>
  </aside>

  <main>
    <h2>Information</h2><br>
        <form>

            <select name="info_list" onchange="showClassStudents(this.value)" tabindex="1" autofcus>
               
               <?php
                  echo "<option id=''>Select a class</option>";
                  echo "<option id='0'>All students</option>";

                  if ($allClasses->num_rows > 0) {
                  while ($row = $allClasses->fetch_assoc()) {
                   echo " <option value=".$row['id'].">" . $row['className']."</option>";
                  }
                  } else {
                  echo "oops" . $sql . "<br>" . $conn->error;
                  }
                ?>
            </select>
      
            <div id="txtHint"><b>Student info will be listed here...</b></div>

         </form>

  </main>

  <footer>
    <h2>&copy; Mojtaba Abbasszadeh</h2>
  </footer>
</body>

</html>