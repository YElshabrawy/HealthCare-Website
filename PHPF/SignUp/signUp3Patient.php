<?php
include_once '../connectDataBase.php';
session_start();

$AccID = $_SESSION['AccID'];
//$AccID = 53;

$Weight = $_GET['Weight'];
$Height = $_GET['Height'];
$status = $_GET['social-st'];
echo $Height;
Insert_Patient_WH($Weight ,$Height ,$AccID );
signUp3($status , $AccID );
clearStoredResults();
foreach($_GET['ray_name']as $key => $value){
    if($value != ""){
        InsertRay($AccID,"","",$value,"");
    }
}
foreach($_GET['medical_test_name']as $key => $value){
    if($value != ""){
        InsertMedicalTest($AccID,'',' ',$value,1);
    }
}



$arr1 = array();
$arr2 = array();

foreach($_GET['surgery_type']as $key => $value){
    if($value != ""){
        array_push($arr1,$value);
    }
}
foreach($_GET['surgery_location']as $key => $value){
    
     if($value != ""){
         array_push($arr2,$value);
     }
 }
 for ($i = 0; $i < count($arr1); $i= $i +1)
 {
    InsertSurgery_SignUp($AccID,$arr2[$i]," ",$arr1[$i]);
 }


 foreach($_GET['disease_name']as $key1 => $value1){
    if($value != ""){
        insertHistory($AccID,$value,1);
    }
}
foreach($_GET['allergy_name']as $key1 => $value1){
    if($value != ""){
        insertHistory($AccID,$value,2);
    }
}
foreach($_GET['medicine_name']as $key1 => $value1){
    if($value != ""){
        insertHistory($AccID,$value,3);
    }
}


header("Location:../../pages/authentication/sign_up4_patient.html");
