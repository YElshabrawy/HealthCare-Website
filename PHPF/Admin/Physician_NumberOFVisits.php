<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$ID;
$result2 = PhysiciannumberOFVisits($ID);

if($result2)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $VisitNumber = $row['NumberOfVisits'];
    }
}