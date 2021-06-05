<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Appointment</title>
    <link rel="shortcut icon" href="/images/_WEBSITE_ICON.svg">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="./main_patient.css">
    <link rel="stylesheet" href="../physician/main_physician.css">
    <link rel="stylesheet" href="/node_modules/fullcalendar/main.min.css">
    <script type = "text/javascript" src="../Sidebar.js">  </script>  
</head>

<body>
    <nav class="containery nav-container">
        <div class="Menu-Btn" onclick="Sidebar_Action()">☰</div>
        <a class="nav-logo" href="#"><img src="/images/nav-logo.svg" alt="HealthCare"></a>
        <div class="right">
            <a href="#" class="notifications-btn activey">
                <img class="logo" src="/images/i_bell.svg" alt="">
            </a>
            <a href="#" class="messages-btn activey">
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
                                        $ID = 9;
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
                    <span class="fname">
                        <?php echo $FName; ?>
                    </span>
                    <span class="lname">
                        <?php echo $LName; ?>
                    </span>
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
            <li class="sidebar-item flex">
                <img class="logo" src="/images/i_doctors.svg" alt="">
                <a href="./doctors.html">
                    <span>Doctors</span>
                </a>
            </li>
            <li class="active-sb sidebar-item flex">
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
        <form action="#" method="GET">
        
            <div class="data-titles patient-grid flex-jc">
                <h3 id="long">Visits Info</h3>
                <!-- <h3>Register Date</h3> -->
            </div>
            <div class="patients-list">
                <?php
                    ob_start();
                    clearStoredResults();
                    $result2 =  patientVisitShow($ID);
                    if($result2)
                    {
                        $total =0;
                        while($row = mysqli_fetch_assoc($result2)){
                            $total++;
                            $visit_ID = $row['VisitID'];
                            $FName = $row['FName'];
                            $LName = $row['LName'];
                            echo
                            "
                            <div class='patient flex-jc' id='p1'>
                    <div class='personal-info'>
                        <h1>Visit Number:</h1>
                        <p>$visit_ID</p>
                    </div>
                    <div class='personal-info'>
                        <h1>Doctor:</h1>
                        <p>$FName $LName</p>
                    </div>
                    <button class=\"btn btn-primary\" name=\"b$total\">Show Visit</button>
                    <input type=\"number\" name=\"q$total\" id=\"Pat_ID\" value=\"$visit_ID\" style=\"display: none;\">
                </div>
                            ";
                        } 
                    } 
                    else{echo "Error";}
                    //////////////////////////////////////////////////////////////////////////////////////////
                    for($i=1; $i<=$total;$i++){
                        if(isset($_GET["b$i"])){
                            $visit_id = $_GET["q$i"];
                            // session_start();
                            // $_SESSION['vidi'] = $phys_id;
                            header("Location:./perscription.php?vidi=$visit_id");
                            // echo "<script>alert(\"Hello There! My ID is $visit_id\")</script>";
                        }

                    }
                    ob_end_flush();
                    ?>
            </div>
            </div>
        </form>
    </main>
</body>
<script src="/node_modules/fullcalendar/main.min.js"></script>
<script src="/js/calender.js"></script>
</html>