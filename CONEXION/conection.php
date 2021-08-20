 <?php
$servername = "us-cdbr-east-04.cleardb.com";
$username = "bab2d28a59808a";
$password = "0235d5dc";
$nombrebd = "heroku_f599ea5399356c2";

// Create connection
$conn = new mysqli($servername, $username, $password, $nombrebd);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//$serverName = "DESKTOP-N7I0UFJ\SQLSERVER"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"oscar","CharacterSet"=>"UTF-8");
//$conn = sqlsrv_connect($serverName, $connectionInfo);


?>
