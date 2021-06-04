<?php
include_once '../connectDataBase.php';
session_start();
$ID = $_SESSION['signInID'];// PatientID

$VisitID;
$Dates;
$FName;
$MName;
$LName;
$major;
$Complaints;
$Diagnoses;




$result = patientVisitShow($ID);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $VisitID =  $row['VisitID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $major = $row['major'];
        $Complaints = $row['Complaints'];
        $Dates =  $row['VisitDate'];
        $Diagnoses = $row['Diagnoses'];
        
    }
}