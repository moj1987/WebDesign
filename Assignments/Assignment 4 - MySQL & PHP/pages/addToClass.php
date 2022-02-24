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
$student_table_query = "SELECT * FROM student";
$class_table_query = "SELECT * FROM class";

$students = $conn->query($student_table_query);
$classes= $conn->query($class_table_query);;

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
        <link rel="stylesheet" href="../styles/addToClass.css" />

    <title>Conestoga</title>
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
              <li><a href="info.php">Info</a></li>
              <li>
                <li><a href="register.html">Register</a></li>
                
                
              </li>
            </ul>
          </li>
          <li class="lastItem" class="current"><a >Class</a>
          <ul>
                  <li><a href="createClass.html" >Create class</a></li>
                  <li><a href="addToClass.php" class="current">Add to class</a></li>
                </ul>
          </li>
        </ul>
      </nav>
    </header>

    <aside id="navBar">
      <ul>
        <li>
          <a href="Info.php"> Info </a>
        </li>

        <li>
          <a href="addToClass.php" class="current"> Add to a class </a>
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
      <form id="add_student_to_class_form" action="../scripts/addStuToClass.php" method="post">
      <?php
        if ($classes->num_rows > 0) {
          
            echo '<fieldset required>';
            echo '<legend>Classes</legend>';

              while ($row = $classes->fetch_assoc()) {

                echo '<input type="radio" name="class" value='.$row['id'].'  required /> <label for='.$row['id'].'>'. $row['className'].'</label><br />';
                      }
              echo '</fieldset><br>';
       } else {
            echo "oops" . $class_table_query . "<br>" . $conn->error;
         }

            if ($students->num_rows > 0) {
              echo '<fieldset>';
              echo '<legend>Students</legend>';
              while ($row = $students->fetch_assoc()) {
                echo "<label><input type=checkbox name=student[] value=".$row['id']." />" . $row['firstName']  . " ". $row['id'] ."</label><br />";
              }
              echo '</fieldset>';
            }
             else {
               echo "oops" . $student_table_query . "<br>" . $conn->error;
              }

    ?>
       <br> <div>
            <input
              type="submit"
              id="submitButton"
              name="save"
              value="Add"
              tabindex="14"
            />
            <input type="reset" id="resetButton" tabindex="13" />
          </div>
        </form>
    </main>

    <footer>
      <h2>&copy; Mojtaba Abbasszadeh</h2>
    </footer>
  </body>
</html>
