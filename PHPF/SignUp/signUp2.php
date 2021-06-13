<?php
include_once '../connectDataBase.php';
session_start();

$userType = 1;
$AccID = $_SESSION['AccID'];
#$status = $_GET['social-st'];
$Country = $_GET['country'];
$City = $_GET['ci'];
$Address = $_GET['add'];
$FName = $_GET['fn'];
$MName= ' ';
$LName = $_GET['ln'];
$PhoneNum = $_GET['phone'];
$Job = $_GET['J'];
$Gender = $_GET['gender'];
$Date_Birth = $_GET['d'];
echo "nice";
signUp2($Country,$City,$Address,$FName,$MName,$LName,$PhoneNum,$Job,$Gender,$Date_Birth,$AccID);

if($userType == 2)
{
    Patient_WH(2 ,2 ,$AccID );
    header("Location:../../pages/authentication/sign_up3_patient.html");
}
else if($userType == 3)
{
    header("Location:../../pages/authentication/sign_up3_physician.html");   
}
else if($userType == 1)
{
    header("Location:../../pages/authentication/sign_in.html");
}