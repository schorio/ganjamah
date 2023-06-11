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


try {
  $dbh = new PDO("oci:dbname=".$mydb.";charset=UTF8", $username, $password);

}
catch (PDOException $e){
  exit("Error: " . $e->getMessage());
  
}


?>