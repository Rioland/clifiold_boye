<?php
session_start();

include("run.php");
// print($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    Service::sendMail();
    $data=$_REQUEST;
    echo($data['fname']);




}else{
    $_SESSION['message']=="Invalid Request Method";
    // print_r($_REQUEST);
}


?>