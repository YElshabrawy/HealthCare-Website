<?php
include_once '../connectDataBase.php';
session_start();

$PhysicianID = 5;
$PatientID = $_SESSION['signInID'];


$Date = $_GET['vst-data'];
$sT= $_GET['Visit_Time'];
$compl = $_GET['Complaint-data'];

PatientBookVisit($PhysicianID,$PatientID,$Date,$sT,$compl);

header("Location:../../pages/dashboard/patient/appointments.html");