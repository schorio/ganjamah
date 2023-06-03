<?php 

$config = [
    "URL" => "http://localhost/ganjamah/",
    "DB_HOST" => "localhost",
    "DB_NAME" => "ganjamah",
    "DB_USER" => "root",
    "DB_PASSWORD" => "",
    "ROLES" => ["admin","visiteur"],
];

$username = "schorio";                  // Use your username
$password = "schorio";

$mydb="
  (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )";

// --------------------------------------------


// $conn = oci_connect($username, $password, $base);
try {
  $dbh = new PDO("oci:dbname=".$mydb.";charset=UTF8", $username, $password);

}
catch (PDOException $e){
  exit("Error: " . $e->getMessage());
  
}


// ------------------------------------------------


// $conn = new mysqli($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// -------------------------------------------------



// $link = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


?>