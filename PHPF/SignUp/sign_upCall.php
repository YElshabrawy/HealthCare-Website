<?php
 include_once ('../connectDataBase.php');
$email = $_GET['E_mail'];
$pass = $_GET['pass'];
$UserName = $_GET['user'];
$userType = 1;
signUp1($email,$pass,$UserName,$userType);
if($userType == 1)
{
    header("Location:../../pages/authentication/sign_up2.html");
}
else if($userType == 2)
{
    header("Location:../../pages/authentication/sign_up2.html");   
}
#$status = $_GET['social-st'];
// signUp1('m@M.com','123','helmy',1);
// $Country = $_GET['country'];
// $City = $_GET['ci'];
// $Address = $_GET['add'];
// $FName = $_GET['fn'];
// $MName;
// $LName = $_GET['ln'];
// $PhoneNum = $_GET['phone'];
// $Job = $_GET['J'];
// $Gender = $_GET['gender'];
// $Date_Birth = $_GET['d'];



 //  signUp($_GET['ci'],
//  $_GET['add'],$_GET['fn'],'',$_GET['ln'],$_GET['phone'],$_GET['J'],$_GET['gender'],$_GET['d']);
#$conn = mysqli_connect("localhost","root","","healthcare") ;
// signUp("Mohamed@hoooooooo00000oo.com","Moj","Hell","singl","","Egypt","Mahella",
//  "Tanta","kk","helmy","ElMalkh",011157,"Phy","Male","");
 #$result = signIn('s-Amr.mohamed@zewailcity.edu.eg' , 'Amr1763');
//     while($row = mysqli_fetch_assoc($result)){
//         echo $result[0];
//     } // returned
//  if($result)
//  {
//          while($row = mysqli_fetch_assoc($result)){
//          echo $row['ID'];
//         } // returned
//     }
 
//  $Stat , 
//  $AccountType ,
//  $Country ,
//  $City ,
//  $Address ,
//  $FName ,
//  $MName ,
//  $LName ,
//  $MobilePhone ,
//  $Job ,
//  $Gender ,
//  $DateOfBirth
#include '../../pages/authentication/sign_up2.html'
 #header("Location:../../pages/authentication/sign_up2.html");
?>