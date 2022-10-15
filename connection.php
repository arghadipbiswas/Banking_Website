<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'youtubecrud';

$con = mysqli_connect($server,$username,$password,$db);



if ($con){
    echo "Connection Successful";
}
else{
    //echo "Connection Not Sucessful";
    die("no connection" . mysqli_connect_error());
}

?>