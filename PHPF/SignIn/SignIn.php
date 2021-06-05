<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$email = $_GET['e_mail'];
$password = $_GET['pass'];
#$email = "s-Amr.mohamed@zewailcity.edu.eg";
#$password = 'Amr1763';
$ID;
$pass = false;
$UserType = 5;
echo "Hello";
$result = signIn($email, $password);

$result2;
#$result = signIn('s-Amr.mohamed@zewailcity.edu.eg' , 'Amr1763');
if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $ID = $row['ID'];
        $pass = true;
    }
   
}
else{
    echo "Error";
}
echo $ID;
session_start();
$_SESSION['SignInID'] = $ID; 
$_SESSION['tst'] = $ID; 
clearStoredResults();
    $result2 = GET_USER_TYPE($ID);
    if($result2)
    {
        echo "hi";
        while($row2 = mysqli_fetch_assoc($result2)){
            $UserType = $row2['AccountType'];
            echo $UserType;
        } 
    }
    else{
        echo "Error";
    } 


if($pass && $UserType == 1) // patient
{
    header("Location:../../pages/dashboard/patient/dashboard.html");
}
elseif($pass && $UserType == 3) //Doctor
{
    header("Location:../../pages/dashboard/physician/dashboard.html?ID=$ID");
}
elseif($pass && $UserType == 2) // admin
{
    header("Location:../../pages/After_Sign_In_Admins.html?ID=$ID");
}
else{
    header("Location:../../pages/autentication/sign_in.html?error=noUser");
}


