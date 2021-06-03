<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$VisitID = 1 ;

$IllnessName = $_GET['Symptoms-data'];
$StartDate =$_GET['SD-data'] ;
$Duration = $_GET['Duration-data'];
$Descrip = $_GET['']; 
$ThingsWorsenIllness =$_GET['TTWI-data'];

$Code;
$Dose = $_GET['dose-data'];
$Time = $_GET['Time-data'];

InsertIllnessInfo($VisitID ,$IllnessName,$StartDate ,$Duration ,$Descrip ,$ThingsWorsenIllness);
InsertPrescriptionInfo($VisitID , $Code, $Dose, $Duration);