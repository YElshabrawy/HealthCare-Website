<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';


$PhysicianIDs; $FName; $MName; $LName; $majors; $Consultant;
$result1 = physicianRequests();


//pid shall be the id for the selected physician:
$pID;
$result2 = physicianCV($pID);
$CV;



if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $PhysicianIDs = $row['ID'];
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $majors = $row['major'];
        $Consultant = $row['Consultant'];
    }
}
if($result2)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $CV = $row['CV'];
    }
}
