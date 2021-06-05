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
                    $hhh = $_SESSION['tst'];
                    echo "<script>alert($hhh)</script>";
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
            <li class=" sidebar-item flex">
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
            <li class="active-sb sidebar-item flex">
                <img class="logo" src="/images/i_profile.svg" alt="">
                <a href="./profile.html">
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="container main">
        <div class="patient-profile-grid">
            <div class="id-card center">
                <div class="profile-pic big center smb">
                    <img src="/images/default_pic.jpg" alt="" class="icon">
                </div>
                <h2 class="name center"><span class="fname"><?php echo $FName; ?></span> <span class="lname"><?php echo $LName; ?></span></h2>
                <p class="smb mail center"><?php echo $email; ?></p>
                <div class="dealings center flex">
                    <div>
                        <h2 class="past-deals">12</h2>
                        <p>Past</p>
                    </div>
                    <div>
                        <h2 class="upcoming-deals">2</h2>
                        <p>Upcoming</p>
                    </div>
                </div>
                <a href="../edit_profile.html" class="view-profile-btn">Edit Profile</a>
            </div>
            <div class="personal-info grid-3x3">
                <div>
                    <h6>Gender</h6>
                    <h5 class="tst">
                        <?php if($sex=="M") 
                                {echo  "Male";}
                                else
                                {echo  "Female";}
                                 ?>
                    </h5>
                </div>
                <div>
                    <h6>Birthdate</h6>
                    <h5 class="tst"><?php echo $date; ?></h5>
                </div>
                <div>
                    <h6>Phone Number</h6>
                    <h5 class="tst"><?php echo $mobile; ?></h5>
                </div>
                <div>
                    <h6>Country</h6>
                    <h5 class="tst"><?php echo $Country; ?></h5>
                </div>
                <div>
                    <h6>City</h6>
                    <h5 class="tst"><?php echo $city; ?></h5>
                </div>
                <div>
                    <h6>Weight</h6>
                    <h5 class="tst"><?php echo $Weight; ?> Kg</h5>
                </div>
                <div>
                    <h6>Height</h6>
                    <h5 class="tst"><?php echo $Height; ?> Cm</h5>
                </div>
            </div>
            <div class="notes">
                <h4>About</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui exercitationem fugit sapiente alias corporis nihil, assumenda tempora hic nostrum aspernatur, explicabo maxime! Expedita, sint quisquam recusandae reiciendis aliquid eveniet pariatur velit distinctio placeat non at est officiis rerum, iste veritatis.</p>
            </div>
            <div class="history patient-history">
                <div class="my-history">
                    <h2>My History</h2>
                    <div class="flex jc">
                        <div class="l3">
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
                        </div>
                        <div class="r3">
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

                </div>
                <div class="fam-history">
                    <h2 class="smb">Family History</h2>
                    <?php
                    clearStoredResults(); 
                    $result1 = patientFHistory($ID);
                    if($result1)
                    {
                        $connter=1;
                        while($row = mysqli_fetch_assoc($result1)){
                            $RelName = $row['RelationName'];
                            $Name = $row['PersonName'];
                            $TypeName = $row['TypeName'];
                            echo"
                            <div class='smb' id='m1'>
                                <h3>#$connter <span class='fname'>$Name</span> - <span class='rel'>$RelName</span></h3>
                                <div class='flex jc'>
                                    <div class='r3'>
                                        <div class='medicine'>
                                            <h2>Diseases: </h2>
                                            <h4 class='medicine'> $TypeName</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                            $connter=$connter+1;
                        } 
                    }
                    else{echo "Error";} 
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>