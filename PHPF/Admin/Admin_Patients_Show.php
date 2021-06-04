<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$PatientIDs; $FName; $MName; $LName; $WarningsNumber;
$result1 = PatientAshow();
if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $PhysicianIDs = $row['ID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $major = $row['WarningsNumber'];
    }
}