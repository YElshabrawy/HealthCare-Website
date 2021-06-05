<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - New Visit</title>
    <link rel="shortcut icon" href="/images/_WEBSITE_ICON.svg">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="./main_patient.css">
    <script type = "text/javascript" src="../Sidebar.js">  </script>  
</head>

<body>
    <nav class="container nav-container">
        <div class="Menu-Btn" onclick="Sidebar_Action()">☰</div>
        <a class="nav-logo" href="#"><img src="/images/nav-logo.svg" alt="HealthCare"></a>
        <div class="right">
            <a href="#" class="notifications-btn active">
                <img class="logo" src="/images/i_bell.svg" alt="">
            </a>
            <a href="#" class="messages-btn active">
                <img class="logo" src="/images/i_msg.svg" alt="">
            </a>
            <div class="personai-info flex">
                <a href="#" class="profile-pic">
                    <img src="/images/default_pic.jpg" alt="">
                </a>
                <div class="username">
                    <?php 
                    include_once 'C:\xampp\htdocs\HealthCare\PHPF\connectDataBase.php';
                   // $ID = $_SESSION['SignInID'];
                    $ID = 1;
                    $result = ShowPatientProfile($ID);
                    if($result)
                    {

                        while($row = mysqli_fetch_assoc($result)){
                            $FName = $row['FName'];
                            $LName= $row['LName'];
                            $email = $row['EmailAddress'];
                            $sex = $row['Gender'];
                            $Country = $row['Country'];
                            $city = $row['City'];
                            $mobile = $row['MobilePhone'];
                            $date = $row['DateOfBirth'];
                            $Weight = $row['Weights'];
                            $Height = $row['Height'];
                            $Job = $row['Job'];
                            $Age =$row['Age'];
                            $SS =$row['SocialStatus'];
                        } 
                    }
                    else{
                        echo "Error";
                    }  ?>
                    <span class="fname"><?php echo $FName; ?></span>
                    <span class="lname"><?php echo $LName; ?></span>
                </div>
            </div>
        </div>
    </nav>

    <aside class="sidebar">
        <ul>
            <li class="sidebar-item flex">
                <img class="logo" src="/images/i_dashboard.svg" alt="">
                <a href="./dashboard.html">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active-sb sidebar-item flex">
                <img class="logo" src="/images/i_patient2.svg" alt="">
                <a href="./patients.html">
                    <span>Patients</span>
                </a>
            </li>
            <li class="sidebar-item flex">
                <img class="logo" src="/images/i_calendar.svg" alt="">
                <a href="./appointments.html">
                    <span>Appointment</span>
                </a>
            </li>
            <li class="sidebar-item flex">
                <img class="logo" src="/images/i_profile.svg" alt="">
                <a href="./profile.html">
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="container main">
        <form action="../../../PHPF/Visit/InsertVisit.php" method="GET">
        <?php 
        $VID = $_GET['vidi'];
        $code = 1;
        clearStoredResults();
        $result1=VisitInfo($VID);
        if($result1)
        {
            while($row = mysqli_fetch_assoc($result1)){
                $PhyID = $row['PhysicianID'];
                $PaID = $row['PatientID'];
                $StartT = $row['StartTime'];
                $Diagnosis = $row['Diagnoses'];
                $Complaints = $row['Complaints'];
                $Notes = $row['Notes'];
                $Date = $row['Dates'];
            } 
        } 
        else{echo "Error";}
        clearStoredResults();
        $result2 = GetPhysicianInfo($PhyID);
        if($result2)
        {
            while($row = mysqli_fetch_assoc($result2)){
                $Major = $row['major'];
                $Title = $row['title'];
            } 
        } 
        else{echo "Error";}
        clearStoredResults();
        $result3 = ShowPatientProfile($PaID);
        if($result3)
        {

            while($row = mysqli_fetch_assoc($result3)){
                $FName = $row['FName'];
                $LName= $row['LName'];
            } 
        }
        clearStoredResults();
        $result4 = GetMCode($VID);
        if($result4){
            while($row = mysqli_fetch_assoc($result3)){
                $code = $row['Code'];
            }
        }
        else{echo "Error";}

        ?>

            <div class="visit" style="grid-template-rows: 1fr 2fr;">
                <div class="head flex">
                    <div class="l">
                        <h1>Dr.<span class="fname"><?php echo $FName; ?></span> <span class="lname"><?php echo $LName; ?></span></h1>
                        <h3><span class="specialization"><?php echo $Title; ?></h3>
                    </div>
                    <div class="r">
                        <h3>Visit ID: <span class="visit-id"><?php echo $VID; ?></span></h3>
                        <h3>Date: <span class="date"><?php echo $Date; ?></span></h3>
                    </div>
                </div>
                <div class="summary flex">
                    <div class="l2">
                        <div class="weight flex">
                            <h2>Weight: </h2>
                            <h4 class="weight"><?php echo $Weight; ?> Kg</h4>
                        </div>
                        <div class="height flex">
                            <h2>Height: </h2>
                            <h4 class="height"><?php echo $Height; ?> Cm</h4>
                        </div>
                        <div class="ss flex">
                            <h2>Social State: </h2>
                            <h4 class="ss"><?php echo $SS; ?></h4>
                        </div>
                        <div class="age flex">
                            <h2>Age: </h2>
                            <h4 class="age"><?php echo $Age; ?></h4>
                        </div>
                        <div class="gender flex">
                            <h2>Gender: </h2>
                            <h4 class="gender">                        
                                <?php if($sex=="M") 
                                {echo  "Male";}
                                else
                                {echo  "Female";}
                                 ?></h4>
                        </div>
                        <div class="job flex">
                            <h2>Job: </h2>
                            <h4 class="job"><?php echo $Job; ?></h4>
                        </div>
                        <div class="city flex">
                            <h2>City: </h2>
                            <h4 class="city"><?php echo $city; ?></h4>
                        </div>
                    </div>
                    <div class="r2">
                        <div class="allergies">
                            <h2>Allergies: </h2>
                            <h4 class="allergies">
                                <?php 
                                clearStoredResults();
                                $result2 = patientHistory($ID);
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 1)
                                        {
                                            echo $row2['DName'] . " - ";
                                        }
                                        }
                                    }
                            ?>
                            </h4>
                        </div>
                        <div class="chronic">
                            <h2>Chronic Diseases: </h2>
                            <h4 class="chronic">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 2)
                                        {
                                            echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                        <div class="medicine">
                            <h2>Medicine: </h2>
                            <h4 class="medicine">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 3)
                                        {
                                            echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                        <div class="surgery">
                            <h2>Surgerys: </h2>
                            <h4 class="surgery">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 4)
                                        {
                                            echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="complaint">
                    <div class="complaint-block">
                        <h5>Complaint:</h5>
                        <p class="complaint-data">
                            <?php echo $Complaints; ?>
                        </p>
                    </div>
                    <div class="from-block">
                        <h5>Start Date:</h5>
                        <p class="from-data">
                            <?php echo $StartT; ?>
                        </p>
                    </div>
                </div>
                </div>
                <div class="diagnosis">
                    <div class="flex">
                        <div class="">
                            <div class="diagnosis-block">
                                <h5>Diagnosis:</h5>
                                <h4><?php echo $Diagnosis?></h4>
                            </div>
                            <div class="medicine-block">
                                <h5>Medicine:</h5>
                                <h4><?php echo $code ?></h4>
                            </div>
                            <div class="medicine-block">
                                <h5>Time:</h5>
                                <input type="tel" name="Time-data" id="Time-data" class="resizable"">
                            </div>
                            <div class="medicine-block">
                                <h5>Form:</h5>
                                <!-- <input type="text" name=Form-data"" id="Form-data" class="resizable"spellcheck="true"> -->
                                <select name="Form-data" id="Form-data" class="tmp-dropdown">
                                    <option value=""></option>
                                    <?php
                                        clearStoredResults();
                                        $result = MedicineForm();
                                        while($row = mysqli_fetch_assoc($result)){
                                            $data = $row['Form'];
                                            echo "<option value=\"$data\">$data</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                             <div class="notes-block">
                                <h5>Notes:</h5>
                            <input type="text" name="notes-data" id="notes-data" class="resizable">
                            <div class="dose-block">
                                <h5>Dose:</h5>
                                <input type="text" name="dose-data" id="dose-data" class="resizable">
                            </div>
                        </div>
                        <div class="notes-block">
                            <h5>Strength:</h5>
                        <!-- <input type="text" name=Strength-data"" id="Strength-data" class="resizable"> -->
                        <select name="Strength-data" id="Strength-data" class="tmp-dropdown">
                        <option value=""></option>
                        <?php
                            clearStoredResults();
                            $result = MedicineStrength();
                            while($row = mysqli_fetch_assoc($result)){
                                $data = $row['Strength'];
                                echo "<option value=\"$data\">$data</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="notes-block" style="visibility: hidden;">
                        <h5><br></h5>
                    <input type="text"name=""class="resizable">
                </div>   
                    </div>
                </div>
                    <button type="submit" class="send-btn">Send</button>
                </div>
                
            </div>
            </form>
    </main>
</body>

</html>