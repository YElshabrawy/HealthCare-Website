<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
//Time Table:
$PID; // Physician ID
$Day;
$StartTime;
$EndTime;
$result2 = patientPhysicianTimeTable($PhysiciansIDs);  // Returns day, start time, end time

//patientPhysicianTimeTable
if($result2)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $PID = $row['PID'];
        $Day = $row['Dayss'];
        $StartTime = $row['StartTime'];
        $EndTime = $row['EndTime'];


    }
}