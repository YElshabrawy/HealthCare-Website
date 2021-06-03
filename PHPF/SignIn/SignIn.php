<?php
include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$email = $_GET['e_mail'];
$password = $_GET['pass'];
#$email = "s-Amr.mohamed@zewailcity.edu.eg";
#$password = 'Amr1763';
$ID;
echo "Hello";
$result = signIn($email, $password);
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


