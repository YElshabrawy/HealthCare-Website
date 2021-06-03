<?php
include_once '../connectDataBase.php';
$AccID;

$Weight = $_GET['Weight'];
$Height = $_GET['Height'];
$status = $_GET['social-st'];

Patient_WH($Weight ,$Height ,$AccID );
signUp3($status , $AccID );
