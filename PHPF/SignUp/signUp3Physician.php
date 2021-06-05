<?php
include_once '../connectDataBase.php';
session_start();
//$PID = 13;
$PID =$_SESSION['AccID'];
$Major = $_POST['major'];
// $CV = "";
$ACDegree = $_POST['degree'];
// Cv
$cv_name = $_FILES['myfile']['name'];
$cv_data = file_get_contents($_FILES['myfile']['tmp_name']);

if(!file_exists($_FILES['myfile']['tmp_name']) || !is_uploaded_file($_FILES['myfile']['tmp_name'])) {
    header("Location:../../pages/authentication/sign_up3_physician.html?error=noCV");
    exit();
}


$ESTime = $_POST['ES'];

$VPrice = $_POST['VP'];
$RevesitPrice = $_POST['RVP'];
$ConsultationPrice = $_POST['CP'];

insertPhysicianInfo($PID, $VPrice, $ConsultationPrice, $RevesitPrice,$Major, $ACDegree, "cv_data", 4,$ESTime);

//  ========== TIMETABLE =============== \\
$slots = $_POST['counter'];
for($i = 1; $i <= $slots; $i++){
    // Check if any front slot is not empty
    $f_sun = $_POST["f$i-sun"];
    $f_mon = $_POST["f$i-mon"];
    $f_tue = $_POST["f$i-tue"];
    $f_wed = $_POST["f$i-wed"];
    $f_thur = $_POST["f$i-thur"];
    $f_fri = $_POST["f$i-fri"];
    $f_sat = $_POST["f$i-sat"];

    $t_sun = $_POST["t$i-sun"];
    $t_mon = $_POST["t$i-mon"];
    $t_tue = $_POST["t$i-tue"];
    $t_wed = $_POST["t$i-wed"];
    $t_thur = $_POST["t$i-thur"];
    $t_fri = $_POST["t$i-fri"];
    $t_sat = $_POST["t$i-sat"];

    if($f_sun != "" && $t_sun != ""){
        $Day = "Sunday";
        insertTimeTable($PID, $Day, $f_sun, $t_sun);
    }
    if($f_mon != "" && $t_mon != ""){
        $Day = "Monday";
        insertTimeTable($PID, $Day, $f_mon, $t_mon);
    }
    if($f_tue != "" && $t_tue != ""){
        $Day = "Tuesday";
        insertTimeTable($PID, $Day, $f_tue, $t_tue);
    }
    if($f_wed != "" && $t_wed != ""){
        $Day = "Wednesday";
        insertTimeTable($PID, $Day, $f_wed, $t_wed);
    }
    if($f_thur != "" && $t_thur != ""){
        $Day = "Thursday";
        insertTimeTable($PID, $Day, $f_thur, $t_thur);
    }
    if($f_fri != "" && $t_fri != ""){
        $Day = "Friday";
        insertTimeTable($PID, $Day, $f_fri, $t_fri);
    }
    if($f_sat != "" && $t_sat != ""){
        $Day = "Saturday";
        insertTimeTable($PID, $Day, $f_sat, $t_sat);
    }

}


// updatePhysicianInfoGeneral($PID ,$Major ,$ACDegree ,$CV ,00 );

// updatePhysicianInfoTimeTb($PID ,$VPrice,$ConsultationPrice ,$RevesitPrice ,$ESTime );

// foreach($_GET['ray_name']as $key => $value){
//     if($value != ""){
//         UpdateTimeTable($PID ,$Dayss ,$From ,$To );
//     }
// }

// header("Location:../../pages/authentication/sign_in.html");