<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$ID;
$VisitNumber;
$result = PatientnumberOFVisits($ID);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $VisitNumber = $row['NumberOfVisits'];
    }
}
