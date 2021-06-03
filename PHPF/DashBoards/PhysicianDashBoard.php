<?php 
 include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
$ID = 9;
$Date = date("Y/m/d");
$LName;
 $result = ShowPhysicianLastName($PID);
    while($row = mysqli_fetch_assoc($result)){
        $LName= $row['LName'];
    }

    /* LName should be changed */
$result= CancelledVisitN($PID);
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
$result= DoneAppointmentN($PID);
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
$result= UpcommingAppointmentN($PID);
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
$result= TodayAppointmentsN($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
$result= SalaryThisMonth($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
$result= SalaryAllTime($PID ,$Date );
while($row = mysqli_fetch_assoc($result)){
    $LName= $row['LName'];
}
