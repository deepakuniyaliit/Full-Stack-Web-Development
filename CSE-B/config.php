<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'CSEB2020';
    
    
if (mysqli_connect($hostName, $userName, $password, $databaseName)){
    echo 'Connection Successful!';
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>