<?php
include_once '../connectDataBase.php';
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
//Time Table:
$PID; // Physician ID
$Day;
$StartTime;
$EndTime;

//Reserved Slots:
$RPID; // Physician ID
$Date;
$DateToDay; // call a function to transfare from date to day
$VStartTime; // StartTime
//The end time is start time + physician.EstimatedTime

$result1 = patientPhysicianShow();

//These shall be in a loop (for each physician id)
$result2 = patientPhysicianTimeTable($PhysiciansIDs);  // Returns day, start time, end time
$result3 = PhysicianTimeTableReserved($PhysiciansIDs); //Return Date, start time 
$result4 = PhysiciannumberOFVisits($PhysiciansIDs); //Number of physicians visits

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

//PhysicianTimeTableReserved
if($result3)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $RPID = $row['PID'];
        $Date = $row['Dates'];
        $VStartTime = $row['StartTime'];
        
    }
}