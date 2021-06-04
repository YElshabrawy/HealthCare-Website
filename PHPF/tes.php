<?php
include_once '../../../PHPF/connectDataBase.php';
$PID ;
$Title;
$Major;
$price;
$result = ShowPhysicianInfo();
// if($result)
// {
//     while($row = mysqli_fetch_assoc($result)){
//         $PID =  $row['ID'];
//         //echo $PID;
//         $Title= $row['title'];
//         $Major= $row['major'];
//         $price= $row['Examination'];
//         $result2= ShowPhysicianLastName($PID);
//         // if($result2)
//         // {
//         //     while($row2 = mysqli_fetch_assoc($result2)){
//         //         $LName = $row2['LName'];
//         //         echo $LName;
//         //     }
            
        
        
//         // $Age= $row['Age'];
//         // $DateOfBirth= $row['DateOfBirth'];
//         // $Gender= $row['Gender'];
//         // $Job= $row['Job'];
//         // $Complaints= $row['Complaints'];
//     }
//     }
