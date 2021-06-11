<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profile</title>
    <link rel="shortcut icon" href="/images/_WEBSITE_ICON.svg">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="./main_patient.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    session_start();
                     $ID = $_SESSION['SignInID'];
                    //$ID = 1;
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
                    <img class="logo" src="/images/i_doctors.svg" alt="">
                    <a href="./doctors.html">
                        <span>Doctors</span>
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
        <form action="../patient/perscription.html" method="GET">

        <div class="data-titles patient-grid">
            <input type="checkbox" name="select-all" id="select-all">
            <h3 id="long">Basic Info</h3>
            <h3>Phone Number</h3>
            <h3>City</h3>
            <h3>Next Appointment</h3>
            <h3>Time</h3>
            <!-- <h3>Register Date</h3> -->
        </div>
        <div class="patients-list">
            <?php
            ob_start();
            clearStoredResults();
            $result2 =  PhysicianDoneVisits($PhyID);
            if($result2)
            {
                $total =0;
                while($row = mysqli_fetch_assoc($result2)){
                    $total++;
                    $visit_ID = $row['VisitID'];
                    $Patient_ID = $row['ID'];
                    $PFName = $row['FName'];
                    $PLName = $row['LName'];
                    $Date = $row['Dates'];
                    $ST = $row['StartTime'];
                    $Email = $row['EmailAddress'];
                    $Phone = $row['MobilePhone'];
                    $City = $row['City'];
                    echo
                    "
                    <div class='patient' id='p1'>
                        <input type='checkbox' name='p1' id='p1'>
                        <a href='#' class='no-eff'><img class='logo profile-pic' src='/images/default_pic.jpg' alt=''></a>
                        <div class='personal-info'>
                            <h1>$PFName $PLName</h1>
                            <p>$Email</p>
                        </div>
                        <h2 class='phone'>$Phone</h2>
                        <h2 class='city'>$City</h2>
                        <h2 class='next-app'>$Date</h2>
                        <h2 class='last-app'>$ST </h2>
                        <!-- <button name='db$total' class='no-eff'><i class='fa fa-trash delete-me'></i></button> -->
                        <button name=\"b$total\"><i class='fa fa-ellipsis-h delete-me'></i></button>
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
                    session_start();
                    $_SESSION['vidi'] = $phys_id;
                    header("Location:../../dashboard/patient/perscription.html?vidi=$visit_id");
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

</html>