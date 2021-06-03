<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$ID // PatientID

$VisitID;
$Dates;
$FName;
$MName;
$LName;
$major;
$Complaints;
$Diagnoses;




$result = patientVisitShow($ID)
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