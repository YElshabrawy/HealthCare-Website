<?php
$members_count = $_GET['count'];

for($i = 1; $i <= $members_count; $i++){
    // For each member
    // Get name
    $name = $_GET["m$i-name"];

    // Relation
    $relation = $_GET["m$i-relation"];

    //Psychological Diseases
    $psychological = array();

    foreach($_GET["m$i-psychological"]as $key => $value){
        if($value != ""){
            array_push($psychological, $value);
        }
    }

    //Get the rest of data then add to database
}
