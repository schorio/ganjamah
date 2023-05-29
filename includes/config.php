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
$host = 'localhost'; // Adresse du serveur Oracle
$port = '1521'; // Port du serveur Oracle
$service = 'XE';          // and your password
$database = "oci:dbname=localhost:1521/xe"; 
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
];  // and the connect string to connect to your database



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
  // $dbh = new PDO("mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']}", $config['DB_USER'], $config['DB_PASSWORD'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  $dbh = new PDO("oci:dbname=".$mydb, $username, $password);

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