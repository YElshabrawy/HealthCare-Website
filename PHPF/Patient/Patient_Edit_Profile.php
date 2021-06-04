<?php
include_once '../connectDataBase.php';
session_start();

$pID = $_SESSION['signInID'];


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