<?php

define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "mydb");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

if (mysqli_connect_errno()){
    echo "broken" . mysqli_connect_error();
}

?>