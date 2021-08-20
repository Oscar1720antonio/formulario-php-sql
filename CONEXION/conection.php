 <?php
$servername = "localhost";
$username = "root";
$password = "";
$nombrebd = "oscar";

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
