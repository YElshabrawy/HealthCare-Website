<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$PatientID;
$VisitID;
$VisitDate;
$VisitStartTime;
$VisitComplaints;
//physician
$FName;
$MName;
$LName;
$major;


$result1 = patientCurrentVisitShow($ID);


if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $VisitID =  $row['VisitID'];
        $VisitDate = $row['Dates'];
        $VisitStartTime = $row['StartTime'];
        $VisitComplaints = $row['Complaints'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $major = $row['major'];
        
    }
}

