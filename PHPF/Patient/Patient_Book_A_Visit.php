<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
//Physicians Details:
$PhysiciansIDs;
$FName;
$MName;
$LName;
$major;
$title;
$Consultant; 
$ClinicPhoneNumber;
$Rate;
$EstimatedTime;
//--------------------------------

$result1 = patientPhysicianShow();

//patientPhysicianShow
if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $PhysiciansIDs =  $row['ID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $major = $row['major'];
        $title = $row['title'];
        $Consultant =  $row['Consultant'];
        $ClinicPhoneNumber = $row['ClinicPhoneNumber'];
        $Rate = $row['Rate'];
        $EstimatedTime = $row['EstimatedTime'];
    }
}


