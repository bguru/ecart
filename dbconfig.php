<?php

require 'config.php';//to include file
$con = \mysqli_connect($server, $dbuser, $dbpassword, $dbname);
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo 'Connected';
}
?>