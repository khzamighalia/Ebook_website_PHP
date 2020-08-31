<?php
define('DB_SERVER','localhost');// Your hostname
define('DB_USER','root'); // Databse username
define('DB_PASS' ,''); // Database Password
define('DB_NAME','wisdom');// Database name
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
}

 ?>  