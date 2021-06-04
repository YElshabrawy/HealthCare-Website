<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$email = $_GET['e_mail'];
$password = $_GET['pass'];
#$email = "s-Amr.mohamed@zewailcity.edu.eg";
#$password = 'Amr1763';
$ID;
$UserType = 1;
echo "Hello";
$result = signIn($email, $password);
$result2;
#$result = signIn('s-Amr.mohamed@zewailcity.edu.eg' , 'Amr1763');
if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $ID = $row['ID'];
    }
   
}
else{
    echo "Error";
}
echo $ID;
$_SESSION['SignInID'] = $ID; 
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


if($UserType == 1) // patient
{
    header("Location:../../pages/dashboard/patient/dashboard.html");
}
else if($UserType == 3) //Doctor
{
    header("Location:../../pages/dashboard/physician/dashboard.html?ID=$ID");
}
else // admin
{
    header("Location:../../pages/After_Sign_In_Admins.html?ID=$ID");
}


