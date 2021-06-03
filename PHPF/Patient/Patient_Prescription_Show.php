<?php
include_once '../connectDataBase.php';

$VID; //VisitID

$FName;
$MName;
$LName;
$title;

$Dates;
$Diagnoses;
$Notes;
$Code;
$Dose;
$Duration;


$result = patientPrescriptionShow($VID);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $FName = $row['FName'];
        $MName = $row['MName'];
        $LName = $row['LName'];
        $title = $row['title'];
        $Dates = $row['Dates'];
        $Diagnoses = $row['Diagnoses'];
        $Notes= $row['Notes'];
        $Code = $row['Code'];
        $Dose = $row['Dose'];
        $Duration = $row['Duration'];
        
    }
}