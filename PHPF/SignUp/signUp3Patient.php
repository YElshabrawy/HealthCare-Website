<?php
include_once '../connectDataBase.php';
session_start();

$AccID = $_SESSION['AccID'];


$Weight = $_GET['Weight'];
$Height = $_GET['Height'];
$status = $_GET['social-st'];

Patient_WH($Weight ,$Height ,$AccID );
signUp3($status , $AccID );

foreach($_GET['ray_name']as $key => $value){
    if($value != ""){
        InsertRay($AccID,"","",$value,"");
    }
}


header("Location:../../pages/authentication/sign_up4_patient.html");
