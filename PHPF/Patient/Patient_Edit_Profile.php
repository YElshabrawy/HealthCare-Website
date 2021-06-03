<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$pID = 55;


$mobile = $_GET['phone'];
$job = $_GET['J'];
$country= $_GET['country'];
$city= $_GET['C'];
$addresse= $_GET['add'];
$H= $_GET['H'];
$W = $_GET['W'];
$socialStat= $_GET['social-st'];

$result = patientEditProfile($pID,$mobile,$job,$country,$city,$addresse,$H,$W,$socialStat);

header("Location:../../pages/dashboard/patient/dashboard.html");