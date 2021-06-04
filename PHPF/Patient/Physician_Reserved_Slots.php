<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

//Reserved Slots:
$RPID; // Physician ID
$Date;
$day; // date to day
$VStartTime; // StartTime
//The end time is start time + physician.EstimatedTime
//----------------------------------------------------------------------------------


$result3 = PhysicianTimeTableReserved($RPID); //Return Date, start time 

//PhysicianTimeTableReserved
if($result3)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $RPID = $row['PID'];
        $Date = $row['Dates'];
        $day = date("D", strtotime($row['Dates']));
        $VStartTime = $row['StartTime'];
        
    }
}