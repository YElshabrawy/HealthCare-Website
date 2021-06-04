<?php

include_once '../connectDataBase.php';

session_start();
$ID = $_SESSION['SignInID'];

$_SESSION['PFName'];
$_SESSION['PLName'];
$_SESSION['Pemail'];
$_SESSION['PGender'];
$_SESSION['PCountry'];
$_SESSION['PWeight'];
$_SESSION['PBirthdate'];
$_SESSION['PCity'];
$_SESSION['PHeight'];
$_SESSION['PPhoneNumber'];
$_SESSION['PAllergies'];
$_SESSION['PChronicDiseases'];
$_SESSION['PSurgerys'];
$_SESSION['PMedicine'];

$result = ShowPatientProfile($ID);
if($result)
    {

        while($row = mysqli_fetch_assoc($result)){
            $UserType = $row['AccountType'];
            echo $UserType;
        } 
    }
    else{
        echo "Error";
    } 

$result2 = patientFHistory($ID);
$result3 = patientHistory($ID);


