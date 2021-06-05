<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Patients</title>
    <link rel="shortcut icon" href="/images/_WEBSITE_ICON.svg">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="./main_physician.css">
    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
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
                    $PhyID = 5;
                    $result1 = ShowPhysicianLastName($PhyID);
                    if($result1)
                    {
                        while($row = mysqli_fetch_assoc($result1)){
                            $Name1 = $row['FName'];
                            $Name2 = $row['LName'];
                        } 
                    } 
                    else{echo "Error";}
                    ?>
                    <span class="fname"><?php echo $Name1; ?></span>
                    <span class="lname"><?php echo $Name2; ?></span>
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
            clearStoredResults();
            $result2 =  PhysicianShowPatients($PhyID);
            if($result2)
            {
                $total =0;
                while($row = mysqli_fetch_assoc($result2)){
                    $total++;
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
                        <a class='no-eff' href='#''><i class='fa fa-trash delete-me'></i></a>
                        <button name=\"b$total\"><i class='fa fa-ellipsis-h delete-me'></i></button>
                        <input type=\"number\" name=\"q$total\" id=\"Pat_ID\" value=\"$Patient_ID\" style=\"display: none;\">
                    </div>
                    ";
                } 
            } 
            else{echo "Error";}

            //////////////////////////////////////////////////////////////////////////////////////////
            for($i=1; $i<=$total;$i++){
                if(isset($_GET["b$i"])){
                    $pati_id = $_GET["q$i"];
                    // session_start();
                    // $_SESSION['pid2'] = $phys_id;
                    // header("Location:./patient_profile.html?pidi=$pati_id");
                    echo "<script>alert(\"Hello There! My ID is $pati_id\")</script>";
                }
            }
            ?>
            </div>
        </div>
    </main>
</body>

</html>