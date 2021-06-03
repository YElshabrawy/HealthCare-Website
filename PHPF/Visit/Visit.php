<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$ID; 
$FName;
$MName;
$LName;
$Height;
$Weight;
$SocialStatus;
$Age;
$DateOfBirth;
$Gender;
$Job;
$Name;
$HistoryType;
$Surgeryname;
$Complaints;

$result = ViewPatientSummary('1');
if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $ID =  $row['ID'];
        $FName = $row['FName'];
        #$MName= $row[''];
        $LName= $row['LName'];
        $Height= $row['Height'];
        $Weight= $row['Weights'];
        $SocialStatus= $row['SocialStatus'];
        $Age= $row['Age'];
        $DateOfBirth= $row['DateOfBirth'];
        $Gender= $row['Gender'];
        $Job= $row['Job'];
        $Complaints= $row['Complaints'];
        
        /*
        $resultH = patientHistory($ID);
        while($rowH = mysqli_fetch_assoc($resultH)){
            $Name= $rowH['DName'];
            $HistoryType= $rowH['HistoryType'];
        }

        $resultS = patientSurgeries($ID);
        while($rowS = mysqli_fetch_assoc($resultS)){
            $Surgeryname= $rowS['Surgeryname'];
        }*/
        
        echo " $ID. '    '.
        $FName. '    '.
        
        $LName. '    '.
        $Height. '    '.
        $Weight. '    '.
        $SocialStatus. '    '.
        $Age. '    '.
        $DateOfBirth. '    '.
        $Gender. '    '.
        $Job. '    '.
        
        $Complaints. '    '.
        ";
    } // returned
}
else{
    echo "Error";
}
