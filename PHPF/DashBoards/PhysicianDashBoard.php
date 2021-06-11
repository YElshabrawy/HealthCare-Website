<?php 
 include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$ID = 9;
$Date = date("Y/m/d");
$LName;
 $result = ShowPhysicianInfo($PID);
    while($row = mysqli_fetch_assoc($result)){
        $LName= $row['LName'];
    }

    /* LName should be changed */
$result= CancelledVisitN($PID);
while($row = mysqli_fetch_assoc($result)){
    $CancelledVisitN= $row['CN'];
}
$result= DoneAppointmentN($PID);
while($row = mysqli_fetch_assoc($result)){
    $DoneAppointmentN= $row['DN'];
}
$result= UpcommingAppointmentN($PID);
while($row = mysqli_fetch_assoc($result)){
    $UpcommingAppointmentN= $row['UN'];
}
$result= TodayAppointmentsN($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $TodayAppointmentsN= $row['TAN'];
}
$result= SalaryThisMonth($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $SalaryThisMonth= $row['SM'];
}
$result= SalaryAllTime($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $SalaryAllTime= $row['SAT'];
}
