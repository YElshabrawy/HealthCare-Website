<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$PhysicianIDs; $FName; $MName; $LName; $major; $title; $Consultant; $ClinicNumber; $rate; $VisitNumber;
$result1 = physicianAShow();

if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $PhysicianIDs = $row['ID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $major = $row['major'];
        $title = $row['title'];
        $Consultant = $row['Consultant'];
        $ClinicNumber = $row['ClinicPhoneNumber'];
        $rate = $row['Rate'];
    }
}