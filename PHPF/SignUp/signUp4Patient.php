<?php
include_once '../connectDataBase.php';
$AccID = $_SESSION['AccID'];
 //$AccID = 9;


$members_count = $_GET['count'];

for($i = 1; $i < $members_count; $i++){
    // For each member
    // Get name
    $name = $_GET["m$i-name"];

    // Relation
    $relation = $_GET["m$i-relation"];

    //Psychological Diseases
    $psychological = array();
    $Ulcer = array();
    $allergy = array();
    $abnormal = array();
    

    foreach($_GET["m$i-psychological"]as $key => $value){
        if($value != ""){
            array_push($psychological, $value);
        }
    }

    for($i = 0;$i < count($psychological); $i = $i +1)
    {
        insertFamilyHistoryPhsychological($AccID,$relation,$name,$psychological[$i]);
    }
    foreach($_GET["m$i-ulcher"]as $key => $value){
        if($value != ""){
            array_push($Ulcer, $value);
        }
    }
    for($i = 0;$i < count($Ulcer); $i = $i +1)
    {
        insertFamilyHistoryUlcer($AccID,$relation,$name,$Ulcer[$i]);
    }
    foreach($_GET["m$i-allergy"]as $key => $value){
        if($value != ""){
            array_push($allergy, $value);
        }
    }
    for($i = 0;$i < count($allergy); $i = $i +1)
    {
        insertFamilyHistoryAllergic($AccID,$relation,$name,$allergy[$i]);
    }
    foreach($_GET["m$i-abnormal"]as $key => $value){
        if($value != ""){
            array_push($abnormal, $value);
        }
    }
    for($i = 0;$i < count($abnormal); $i = $i +1)
    {
        insertFamilyHistoryGeneticAbnormalities($AccID,$relation,$name,$abnormal[$i]);
    }

    //Get the rest of data then add to database
}
header("Location:../../pages/authentication/sign_in.html");
