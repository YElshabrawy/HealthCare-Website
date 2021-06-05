<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "HealthCare";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $db );
$conn = new mysqli("localhost", "root", "", "healthCare");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
function signUp1(
    $Email ,
    $Pass ,
    $UserName , 
    $AccountType ,
  )
{

    $sql = "CALL SignUp1('$Email' ,'$Pass' ,'$UserName' , '$AccountType'  );";

    echo $sql ;
    $sql_query = $sql;
    if(mysqli_query($GLOBALS['conn'],$sql_query)) {
    //echo 'done';
    return true;
    }
    else
    {
    echo("Error description: " . $GLOBALS['conn'] -> error);
    return false;
    }

}

function signUp2($Country,$City,$Address,$FName,$MName,$LName,$MobilePhone,$Job,$Gender,$DateOfBirth,$AID)
{
    echo "Hello";
    $sql = "CALL SignUp2('$Country','$City','$Address','$FName','$MName','$LName','$MobilePhone','$Job','$Gender','$DateOfBirth','$AID');";
    echo $sql ;
    $sql_query = $sql;
    if(mysqli_query($GLOBALS['conn'],$sql_query)) {
    echo 'done';
    return true;
    }
    else
    {
    echo("Error description: " . $GLOBALS['conn'] -> error);
    return false;
    }
}
function signUp3($Stat , $AccID )
{

        $sql = "CALL SignUp3('$Stat' , '$AccID' );";

        echo $sql ;
        $sql_query = $sql;
        if(mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return true;
        }
        else
        {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
        }

}

function Patient_WH($W ,$H ,$AccID )
{

        $sql = "CALL Patient_WH('$W' ,'$H', '$AccID' );";

        echo $sql ;
        $sql_query = $sql;
        if(mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return true;
        }
        else
        {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
        }

}
function Insert_Patient_WH($W ,$H ,$AccID )
{

        $sql = "CALL Insert_Patient_WH('$W' ,'$H', '$AccID' );";

        echo $sql ;
        $sql_query = $sql;
        if(mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return true;
        }
        else
        {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
        }

}

function GetPhysicianInfo($ID){
    $sql = "CALL GetPhysicianInfo('$ID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        //echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function signUp(
                $Email ,
                $Pass ,
                $UserName ,
                $Stat , 
                $AccountType ,
                $Country ,
                $City ,
                $Address ,
                $FName ,
                $MName ,
                $LName ,
                $MobilePhone ,
                $Job ,
                $Gender ,
                $DateOfBirth )
{
    
    $sql = "CALL SignUp('$Email' ,'$Pass' ,'$UserName' ,'$Stat' , '$AccountType' ,'$Country' ,'$City' ,'$Address' ,'$FName' ,'$MName' ,'$LName' ,'$MobilePhone' ,'$Job' ,'$Gender' ,'$DateOfBirth' );";
        
        echo $sql ;
        $sql_query = $sql;
        if(mysqli_query($GLOBALS['conn'],$sql_query)) {
	        echo 'done';
            return true;
        }
        else
        {
            echo("Error description: " . $GLOBALS['conn'] -> error);
            return false;
        }
    
    // if($result = mysqli_query($GLOBALS['conn'],$sql)){
    //         while($row = mysqli_fetch_assoc($result))
    //         {
            
    //         } // returned
    // }
}

function signIn($email , $password){
    $sql = "CALL SignIn('$email','$password');";
    echo $sql;
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function GET_USER_TYPE($PID){
    $sql = "CALL GETUSERTYPE('$PID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function clearStoredResults()
 { //global GLOBALS['conn']; 
    do{ if ($res = $GLOBALS['conn']->store_result()) { $res->free(); } } 
    while ($GLOBALS['conn']->more_results() && $GLOBALS['conn']->next_result()); }

function ShowPhysicianInfo(){
    $sql = "CALL ShowPhysicianInfo();";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        // echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function ShowPhysicianInfo2(){
    $sql = "CALL ShowPhysicianInfo2();";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        // echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function ShowPatientProfile($ID){
    $sql = "CALL ShowPatientProfile('$ID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        //echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function GetPhysicianInfo($ID){
    $sql = "CALL GetPhysicianInfo('$ID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        //echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function ViewPatientSummary($VisitID)
{
    $sql = "CALL PatientSummary('$VisitID');";
    echo "Hello";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function InsertPrescriptionInfo($VisitID, $Code, $Dose, $Duration)
{
    $sql = "CALL PrescriptionInfo('$Code', '$Dose', '$Duration','$VisitID');";
    echo $sql;
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function VisitInfo($VisitID)
{
    $sql = "CALL VisitInfo('$VisitID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function UpdateVisitNote($VID, $Note)
{
    $sql = "CALL UpdateVisitNote('$VID', '$Note');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function InsertIllnessInfo($VisitID ,$IllnessName,$StartDate ,$Duration ,$Descrip ,$ThingsWorsenIllness)
{
    $sql = "CALL IllnessInfo('$VisitID' ,'$IllnessName','$StartDate' ,'$Duration' ,'$Descrip' ,'$ThingsWorsenIllness');";
    echo $sql;
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function UpdateVisit_withPorescriptionInfo($VisitID, $Diagnoses, $Notes)
{
    $sql = "CALL UpdateVisit_withPorescriptionInfo($VisitID, $Diagnoses, $Notes);";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function UpdateVisit_Status($VisitID,$Stat)
{
    $sql = "CALL UpdateVisit_Status($VisitID,$Stat);";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function ShowPhysicianLastName($PID)
{
    $sql = "CALL ShowPhysicianLastName('$PID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        // echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function CancelledVisitN($PID)
{
    $sql = "CALL CancelledVisitN('$PID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}


function DoneAppointmentN($PID)
{
    $sql = "CALL DoneAppointmentN('$PID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function UpcommingAppointmentN($PID)
{
    $sql = "CALL UpcommingAppointmentN('$PID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function TodayAppointmentsN($PID ,$Date )
{
    $sql = "CALL TodayAppointmentsN('$PID' ,'$Date');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function SalaryThisMonth($PID ,$Date )
{
    $sql = "CALL SalaryThisMonth('$PID' ,'$Date');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}



function SalaryAllTime($PID ,$Date )
{
    $sql = "CALL SalaryAllTime('$PID' ,'$Date');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function ShowCommingVisit($PhysicianID )
{
    $sql = "CALL ShowCommingVisit('$PhysicianID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}

function VisitInfo($VisitID)
{
    $sql = "CALL VisitInfo('$VisitID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}

function ShowDoneVisit($PhysicianID)
{
    $sql = "CALL ShowDoneVisit('$PhysicianID');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function updatePhysicianInfoGeneral($ID ,$major ,$title ,$CV ,$ClinicPhoneNumber )
{
    $sql = "CALL updatePhysicianInfoGeneral('$ID' ,'$major' ,'$title' ,'$CV' ,'$ClinicPhoneNumber');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function updatePhysicianInfoTimeTb($ID ,$Examination,$Consultant ,$Revisit ,$EstimatedTime )
{
    $sql = "CALL updatePhysicianInfoTimeTb('$ID' ,'$Examination','$Consultant' ,'$Revisit' ,'$EstimatedTime');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }

}


function UpdateTimeTable($PhysicianID ,$Dayss ,$StartTime ,$EndTime )
{
    $sql = "CALL UpdateTimeTable('$PhysicianID' ,'$Dayss' ,'$StartTime' ,'$EndTime');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}



function insertFamilyHistoryPhsychological($PID ,$RelationName ,$PersonName ,$TypeName  )
{
    $sql = "CALL insertFamilyHistoryPhsychological('$PID' ,'$RelationName' ,'$PersonName' ,'$TypeName'  );";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function insertHistory($PID ,$DName ,$TypeN)
{
    $sql = "CALL InsertHistory('$PID' ,'$DName','$TypeN');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        //echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function insertFamilyHistoryUlcer($PID ,$RelationName ,$PersonName ,$TypeName  )
{
    $sql = "CALL insertFamilyHistoryUlcer('$PID' ,'$RelationName' ,'$PersonName' ,'$TypeName');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}



function insertFamilyHistoryAllergic($PID ,$RelationName ,$PersonName ,$TypeName  )
{
    $sql = "CALL insertFamilyHistoryAllergic('$PID' ,'$RelationName' ,'$PersonName' ,'$TypeName'  );";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}



function insertFamilyHistoryGeneticAbnormalities($PID ,$RelationName ,$PersonName ,$TypeName  )
{
    $sql = "CALL insertFamilyHistoryGeneticAbnormalities('$PID' ,'$RelationName' ,'$PersonName' ,'$TypeName'  );";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}



function InsertMedicalTest($ID,$Pic,$rep,$Descr, $Dat)
{
    $sql = "CALL InsertMedicalTest ('$ID','$Pic','$rep','$Descr','$Dat');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function insertPhysicianInfo($ID ,$Examination ,$Consultant ,$Revisit ,$major ,$title ,$CV ,$ClinicPhoneNumber ,$EstimatedTime )
{
    $sql = "CALL insertPhysicianInfo('$ID' ,'$Examination' ,'$Consultant' ,'$Revisit' ,'$major' ,'$title' ,'$CV' ,'$ClinicPhoneNumber' ,'$EstimatedTime' );";
    echo $sql;
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function InsertRay($PID ,$Picture ,$report ,$Descrip ,$Dates )
{
    $sql = "CALL InsertRay('$PID' ,'$Picture' ,'$report' ,'$Descrip' ,'$Dates');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}
function GetMedicine($St,$name,$form )
{
    $sql = "CALL GetMedicine('$St' ,'$name' , '$form');";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function InsertSurgery_SignUp($PatientID ,$Locationn ,$Dates ,$Surgeryname  )
{
    $sql = "CALL InsertSurgery_SignUp('$PatientID','$Locationn' ,'$Dates' ,'$Surgeryname' );";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function insertTimeTable($PhysicianID ,$Dayss ,$StartTime ,$EndTime)
{
    $sql = "CALL insertTimeTable('$PhysicianID' ,'$Dayss' ,'$StartTime' ,'$EndTime' );";
    $sql_query = $sql;
    if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
        echo 'done';
        return $result;
    }
    else
    {
        echo("Error description: " . $GLOBALS['conn'] -> error);
        return false;
    }
}


function UpdateAccountInfo( $ID , $Email ,$Pass , $UserName ,
                            $Stat , 
                            $AccountType ,
                            $Country ,
                            $City ,
                            $Address ,
                            $FName ,
                            $MName ,
                            $LName ,
                            $MobilePhone ,
                            $Job ,
                            $Gender ,
                            $DateOfBirth )
{
    $sql = "CALL UpdateAccountInfo('$ID' ,'$Email' ,'$Pass' ,'$UserName' ,
        '$Stat' , '$AccountType' ,'$Country' ,'$City' ,'$Address' ,'$FName' ,
        '$MName' ,'$LName' ,'$MobilePhone' ,'$Job' ,'$Gender' ,'$DateOfBirth');";
        $sql_query = $sql;
        if($result = mysqli_query($GLOBALS['conn'],$sql_query)) {
            echo 'done';
            return $result;
        }
        else
        {
            echo("Error description: " . $GLOBALS['conn'] -> error);
            return false;
        }
}

        //AdminPhysicianRequest
        function physicianRequests(){
            $sql = "CALL physicianRequests();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)){
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function physicianCV($pID)
        {
            $sql = "CALL physicianCV('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        
        }
        function physicianapproved($pID)
        {
            $sql = "CALL physicianapproved('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        
        }
        function physiciandenied($pID)
        {
            $sql = "CALL physiciandenied('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        
        }
        function physicianARFilterprice(){
            $sql = "CALL physicianARFilterprice();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
            
        }
        function physicianARFiltermajor($major){
            $sql = "CALL physicianARFiltermajor('$major');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        
                //Admin Physician
        function physicianAShow(){
            $sql = "CALL physicianAShow();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        
        function physicianARemove($pID)
        {
            $sql = "CALL physicianARemove('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        
        }
        function physicianASearchid($pID){
            $sql = "CALL physicianASearchid('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function physicianASearchname($fname,$mname,$lname){
            $sql = "CALL physicianASearchname('$fname','$mname','$lname');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function physicianAFilterRate(){
            $sql = "CALL physicianAFilterRate();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function physicianAFilterprice(){
            $sql = "CALL physicianAFilterprice();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function physicianAFiltermajor($major){
            $sql = "CALL physicianAFiltermajor('$major');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        
                //Admin Patient
        function PatientAshow(){
            $sql = "CALL PatientAshow();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function PatientARemove($pID)
        {
            $sql = "CALL PatientARemove('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        
        }
        function PatientASearchid($pID){
            $sql = "CALL PatientASearchid('$pID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function patientASearchname($fname,$mname,$lname){
            $sql = "CALL patientASearchname('$fname','$mname','$lname');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function patientAFilterWarnings(){
            $sql = "CALL patientAFilterWarnings();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        
                //Patient book a visit
        function patientPhysicianShow(){
            $sql = "CALL patientPhysicianShow();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function patientAFilterPhysicianRate(){
            $sql = "CALL patientAFilterPhysicianRate();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }         
        function patientAFilterPhhysicianprice(){
            $sql = "CALL patientAFilterPhhysicianprice();";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }   
        function patientAFilterPhysicianmajor($major){
            $sql = "CALL patientAFilterPhysicianmajor('$major');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }   
        function PatientSearchphysicianname($fname,$mname,$lname){
            $sql = "CALL PatientSearchphysicianname('$fname','$mname','$lname');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }
        function patientPhysicianTimeTable($ID){
            $sql = "CALL patientAFilterPhysicianmajor('$ID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }   
        function PhysicianTimeTableReserved($ID){
            $sql = "CALL PhysicianTimeTableReserved('$ID');";
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }   
        function PatientBookVisit($PhysicianID,$PatientID,$Date,$startTime,$comp){
        
            $sql = "CALL PatientBookVisit('$PhysicianID','$PatientID','$Date','$startTime','$comp');";
            echo $sql;
            if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                echo 'done';
                return $result;
            }
            else
            {
                echo("Error description: " . $GLOBALS['conn'] -> error);
                return false;
            }
        }   
        
                    //Patient Current  visits
            function patientCurrentVisitShow($ID){
                $sql = "CALL patientCurrentVisitShow('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }   
            function patientCancelVisit($VisitID)
            {
                $sql = "CALL patientCancelVisit('$VisitID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            
            }
            function patientChangeVisitTime($visitID,$visitdate,$startTime)
            {
                $sql = "CALL patientChangeVisitTime('$visitID','$visitdate','$startTime');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }
             
                    //Patient Show Visits
            function patientVisitShow($ID){
                $sql = "CALL patientVisitShow('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }   
            function patientPrescriptionShow($VID){
                $sql = "CALL patientPrescriptionShow('$VID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }      
            
                    //Patient Profile
            function patientAccountDetails($ID){
                $sql = "CALL patientAccountDetails('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }       
            function patientHistory($ID){
                $sql = "CALL patientHistory('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    //echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }       
            function patientFHistory($ID){
                $sql = "CALL patientFHistory('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    //echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function patientMedicalTests($ID){
                $sql = "CALL patientMedicalTests('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function patientRays($ID){
                $sql = "CALL patientRays('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function patientSurgeries($ID){
                $sql = "CALL patientSurgeries('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function patientEditProfile($pID,$mobile,$job,$country,$city,$addresse,$H,$W,$socialStat){
                $sql = "CALL patientEditProfile('$pID','$mobile','$job','$country','$city','$addresse','$H','$W','$socialStat');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }
        
            function WarningNumberUpdate($ID){
                $sql = "CALL WarningNumberUpdate('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            }   
        
            function CalculateAge($ID){
                $sql = "CALL CalculateAge('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function PatientnumberOFVisits($ID){
                $sql = "CALL PatientnumberOFVisits('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function PhysiciannumberOFVisits($ID){
                $sql = "CALL PhysiciannumberOFVisits('$ID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
            function   PhysicianShowPatients($PID){
                $sql = "CALL   PhysicianShowPatients('$PID');";
                if($result = mysqli_query($GLOBALS['conn'],$sql)) {
                    // echo 'done';
                    return $result;
                }
                else
                {
                    echo("Error description: " . $GLOBALS['conn'] -> error);
                    return false;
                }
            } 
          
        