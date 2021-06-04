<?php
include_once '../connectDataBase.php';

$PID = 13;

$Major = $_GET['major'];
//$CV = $_GET[''];
$CV = "";
$ACDegree = $_GET['degree'];

//$Dayss = $_GET[''];
//$From = $_GET[''];
//$To = $_GET[''];
$Dayss= "";
$From  = "";
$To = "";

$ESTime = $_GET['ES'];

$VPrice = $_GET['VP'];
$RevesitPrice = $_GET['RVP'];
$ConsultationPrice = $_GET['CP'];

updatePhysicianInfoGeneral($PID ,$Major ,$ACDegree ,$CV ,00 );
updatePhysicianInfoTimeTb($PID ,$VPrice,$ConsultationPrice ,$RevesitPrice ,$ESTime );

// foreach($_GET['ray_name']as $key => $value){
//     if($value != ""){
//         UpdateTimeTable($PID ,$Dayss ,$From ,$To );
//     }
// }

header("Location:../../pages/authentication/sign_in.html");