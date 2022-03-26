<?php 
$host = $_ENV["MYSQL_HOST"];
$user = $_ENV["MYSQL_USER"];
$pass = $_ENV["MYSQL_PASSWORD"];
$db = $_ENV["MYSQL_DATABASE"];
print_r($_ENV);
phpinfo();