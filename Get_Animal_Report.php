<?php
session_start();
?>
<html>
<body>
FinancialReport <?php
// define variables and set to empty values
$month = $quarter = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $animalID = test_input($_POST["animalID"]);
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";
 
  // Create connection
  $server = mysql_connect($servername,$username, $password);
  // Check connection
  if ($server->connect_error) {
    header("Location: FinancialReport.html");
    die("Connection failed: " . $conn->connect_error);
    exit;
  }
  else{
  $db =  mysql_select_db("$dbname,$server");
  $sql = "SELECT $animalID FROM animal";

  $result = $server->mysql_query($sql);
  
  $server->close();

  }
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
    $row = mysql_fetch_array($sql)
       echo "<h1>Animal Number".$animalID"<h1>";
   }

?>
</table>
</body>
</html>