<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sofahouse";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo "Connection Granted";
}else{
    echo "Connection Failed".mysqli_connect_error();
}

?>