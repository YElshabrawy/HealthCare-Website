<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
session_start();
$PhysicianID = $_SESSION['SignInID'];
//$PhysicianID = 5;
echo $PhysicianID;
$PatientID = $_GET['PID_NewVisit'];
date_default_timezone_set('Africa/Cairo');
$Date = date('y-d-m');
$sT = time();
$compl = "Added by the doctor";
if($result = PatientBookVisit($PhysicianID,$PatientID,$Date,$sT,$compl))
{
    clearStoredResults();
    session_start();
    $result = GetVisitID($PatientID , $PhysicianID);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $visit_id = $row['VisitID'];
        }
    }
   // echo $_SESSION['vidi'];
    header("Location:../../pages/dashboard/physician/new_visit.html?vidi=$visit_id");
}
else{
    header("Location:../../pages/dashboard/physician/AddNewVisit.html?error_noIDmatched");
}


