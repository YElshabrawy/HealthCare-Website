<?php
 include_once ('../connectDataBase.php');
 session_start();
$email = $_GET['E_mail'];
$pass = $_GET['pass'];
$pass2 = $_GET['pass2'];
$UserName = $_GET['user'];
$userType = $_GET['user_type'];
$ID;
// Validations!
// 1) Email
$slquery1 = "SELECT 1 FROM account WHERE EmailAddress = '$email'";
$selectresult1 = mysqli_query($conn, $slquery1);

$slquery2 = "SELECT 1 FROM account WHERE  UserName  = '$UserName'";
$selectresult2 = mysqli_query($conn, $slquery2);
if(mysqli_num_rows($selectresult1)>0){
    // echo '<script>alert("Email Already Exists!")</script>';
    header("Location:../../pages/authentication/sign_up.html?error=existingMail");
}
elseif(mysqli_num_rows($selectresult2)>0){
    // echo '<script>alert("Username Already Exists!")</script>';
    header("Location:../../pages/authentication/sign_up.html?error=existingUsername");
}
elseif($pass != $pass2){
    // echo '<script>alert("Passwords does not match!")</script>';
    header("Location:../../pages/authentication/sign_up.html?error=noMatchPass");

}
else{  
    signUp1($email,$pass,$UserName,$userType);
    $result2 = signIn($email, $pass);
    if($result2)
    {
        while($row = mysqli_fetch_assoc($result2)){
            $ID = $row['ID'];
        }
    }
    $_SESSION['AccID'] = $ID;
    
    if($userType == 1)
    {
        header("Location:../../pages/authentication/sign_up2.html");
    }
    else if($userType == 3)
    {
        header("Location:../../pages/authentication/sign_up2.html");   
    }

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