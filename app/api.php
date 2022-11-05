<?php
session_start();

include("run.php");
// print($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $data=$_REQUEST;
    Service::sendMail($data,$_FILES['document']['tmp_name']);
    $_SESSION['message']="Request Sent";
    header("location:../");
    // print_r($data);
    // echo("<br>");
    // print_r($_FILES['document']['tmp_name']);




}else{
    $_SESSION['message']=="Invalid Request Method";
    // print_r($_REQUEST);
}


?>