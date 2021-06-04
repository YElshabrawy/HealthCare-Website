<?php
// include_once '../connectDataBase.php';
$AccID;

$Weight = $_GET['Weight'];
$Height = $_GET['Height'];
$status = $_GET['social-st'];

foreach($_GET['ray_name']as $key => $value){
    if($value != ""){
        echo "text $key = $value <br>";
    }
}
// Patient_WH($Weight ,$Height ,$AccID );
// signUp3($status , $AccID );
