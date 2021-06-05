<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';

$ID;
//Account info
$FName; $MName; $LName; $Addresse; $Country; $City; $DOB; $Age; $Gender; $Job; $MobilePhone; $EmailAdresse; 

//patient info
$Height; $Weight; $SocialStat; $WarningsNumber; 

//Number of visits
$Vnumber;

//History
$HistoryNumber;
$Dname;         //Disease Name
$HistoryType;   //1- OLD DIAGNOSES 2- CHRONIC DISEAES 3-ALLERGIC 4-OLD THERAPY

//Family History
$FHKey;        //Familt History Key
$FDName;       //Disease Name
$Type;         //1-PSYCHOLOGICAL 2-ULCER 3-ALLERGIC 4-GENETIC ABNORMALITIES 
$RelationName;
$PersonName;

//Medical Tests
$MTKey;       //Medical Test key
$report; $picture;$MTdate;$descrip;

//Rays
$RKey;       //Ray key
$Rreport; $Rpicture;$Rdate;$Rdescrip;

//Surgeries
$SKey;       //Surgery key
$physicianID; $Location; $SurgeryName; $SDate;

$result9 = PatientnumberOFVisits($ID);
$result7 = WarningNumberUpdate($ID); 
$result8 = CalculateAge($ID);
$result1 = patientAccountDetails($ID);
$result2 = patientHistory($ID);
$result3 = patientFHistory($ID);
$result4 = patientMedicalTests($ID);
$result5 = patientRays($ID);

$result6 = patientSurgeries($ID);

//Patient number of visits
if($result9)
{
    while($row = mysqli_fetch_assoc($result9))
    {
        $Vnumber =  $row['NumberOfVisits'];
    }
}
//patientAccountDetails
if($result1)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $Addresse =  $row['Address'];
        $Country = $row['Country'];
        $City = $row['City'];
        $DOB = $row['DateOfBirth'];
        $Age = $row['Age'];
        $Gender =  $row['Gender'];
        $Job = $row['Job'];
        $MobilePhone = $row['MobilePhone'];
        $EmailAdresse = $row['EmailAdress'];
        $Height = $row['Height'];
        $Weight = $row['Weights'];
        $SocialStat =  $row['SocialStatus'];
        $WarningsNumber = $row['WarningsNumber'];
        
    }
}
//patientHistory
if($result2)
{
    while($row = mysqli_fetch_assoc($result2))
    {
        $HistoryNumber = $row['HistoryNumber'];
        $Dname =  $row['DName'];
        $HistoryType = $row['HistoryType'];
        
    }
}
//patientFHistory
if($result3)
{
    while($row = mysqli_fetch_assoc($result3))
    {
        $FHKey = $row['FHistoryNumber'];
        $FDName = $row['TypeName'];
        $Type = $row['DType'];
        $RelationName = $row['RelationName'];
        $PersonName = $row['PersonName'];
    }
}
//patientMedicalTests
if($result4)
{
    while($row = mysqli_fetch_assoc($result4))
    {
        $MTKey = $row['TestNumber'];
        $report = $row['report'];
        $picture = $row['Picture'];
        $MTdate = $row['Dates'];
        $descrip = $row['Descrip'];
        
    }
}
//patientRays
if($result5)
{
    while($row = mysqli_fetch_assoc($result5))
    {
        $RKey = $row['RayNumber'];
        $Rreport = $row['report'];
        $Rpicture = $row['Picture'];
        $Rdate = $row['Dates'];
        $Rdescrip = $row['Descrip'];   
    }
}
//patientSurgeries
if($result6)
{
    while($row = mysqli_fetch_assoc($result6))
    {
        $SKey = $row['SurgeryNumber'];
        $physicianID = $row['physicianID'];
        $SurgeryName = $row['Surgeryname'];
        $SDate = $row['Dates'];
        $Location = $row['Locationn'];  
    }
}