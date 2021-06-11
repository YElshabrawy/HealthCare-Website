<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$AdminIDs; $FName; $MName; $LName; $MobilePhone; $Job; $Gender
$result1 = AdminShowAdminsRequest();
if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $AdminIDs = $row['ID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $MobilePhone = $row['MobilePhone'];
        $Job = $row['Job'];
        $Gender = $row['Gender'];
    }
}