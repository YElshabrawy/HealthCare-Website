<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
 $VisitID = $_GET['vidi'];
//$VisitID = $_SESSION['vid'];
 //$VisitID = 11;
$diagnoses = $_GET['diagnosis-data'];


$IllnessName = $_GET['Symptoms-data'];
$StartDate =$_GET['SD-data'] ;
$Duration = $_GET['Duration-data'];
$Descrip = " "; 
$ThingsWorsenIllness =$_GET['TTWI-data'];

$Code = "";
$Dose = $_GET['dose-data'];
$Time = $_GET['Time-data'];
$St= $_GET['Strength-data'];
$form = $_GET['Form-data'];
$name =$_GET['medicine-data'];
$Note = $_GET['notes-data'];
echo $name;

$result = GetMedicine($St,$name,$form);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $Code = $row['Code'];
        //echo "<br> ID = $Code";
    }
}
if($Code == ""){
        header("Location:../../pages/dashboard/physician/patients.html?error=noData");
}else{
    echo "<br> ID = $VisitID";

    clearStoredResults();
    InsertIllnessInfo($VisitID ,$IllnessName,$StartDate ,$Duration ,$Descrip ,$ThingsWorsenIllness); //insert

    clearStoredResults();
    InsertPrescriptionInfo($VisitID,$Code, $Dose, $Duration); // insert

    clearStoredResults();
    UpdateVisit_withPorescriptionInfo($VisitID, $diagnoses, $Note);

    clearStoredResults();
    UpdateToDone($VisitID);
    
     header("Location:../../pages/dashboard/physician/patients.html?error=none");
}