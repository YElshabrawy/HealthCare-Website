<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profile</title>
    <link rel="shortcut icon" href="/images/_WEBSITE_ICON.svg">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="./main_physician.css">
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
                    echo "<script>alert($_SESSION['tst'])</script>";
                    // $ID = 1;
                    $result = ShowPhysicianLastName($ID);
                    if($result)
                    {

                        while($row = mysqli_fetch_assoc($result)){
                            $FName = $row['FName'];
                            $LName= $row['LName'];
                            $email = $row['EmailAddress'];
                            $Country = $row['Country'];
                            $city = $row['City'];
                            $mobile = $row['MobilePhone'];
                            $date = $row['DateOfBirth'];
                            $sex = $row['Gender'];
                            $Address = $row['Address'];
                        } 
                    }
                    else{
                        echo "Error";
                    }  ?>
                    <span class="fname"><?php echo  $FName; ?></span>
                    <span class="lname"><?php echo  $LName; ?></span>
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
            <li class="active-sb sidebar-item flex">
                <img class="logo" src="/images/i_profile.svg" alt="">
                <a href="./profile.html">
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="container main">
       <div class="profile-grid container">
           <div class="left">
            <?php 
            $ID = 6;
            clearStoredResults();
            $result2 = GetPhysicianInfo($ID);
            if($result2)
            {
               
                while($row = mysqli_fetch_assoc($result2)){
                    $Major = $row['major'];
                    $Title = $row['title'];
                    $CPhone = $row['ClinicPhoneNumber'];
                    $Rate = $row['Rate'];
                } 
            }
            else{
                echo "Error";
            }  ?>
               <div class="profile-pic big center smb">
                   <img src="/images/default_pic.jpg" alt="" class="icon">
               </div>
               <h2 class="name center">Dr. <span class="fname"><?php echo  $FName; ?></span> <span class="lname"><?php echo  $LName; ?></span></h2>
               <p class="smb specialization center"><?php echo   $Major; ?></p>
               <div class="social-icons center">
                   <a href="#">
                       <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
               </div>
               <div class="working-time">
                   <h3>Working Time</h3>
                   <p class="working-time-data">
                       Mon 9:00-13:00 <br>
                       Fri 12:00-15:00
                   </p>
               </div>
               <div class="contact-info">
                <h3>Contact</h3>
                <p class="email">
                    <?php echo  $email; ?>
                </p>
                <p class="phone1">
                    <?php echo  $mobile; ?>
                </p>
                <p class="phone2">
                    <?php echo  $mobile; ?>
                </p>
               </div>
               <div class="rating mb100">
                <h3>Rating</h3>
                <?php
                    if($Rate==0)
                    {
                        echo '  <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        ';
                    }
                    elseif($Rate==1)
                    {
                        echo ' <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        ';
                    }
                    elseif($Rate==2)
                    {
                        echo ' <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        ';
                    }
                    elseif($Rate==3)
                    {
                        echo ' <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        ';
                    }
                    elseif($Rate==4)
                    {
                        echo ' <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                        ';
                    }
                    elseif($Rate==5)
                    {
                        echo ' <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        ';
                    }?>
               </div>
                <div class="center">
                    <a href="../edit_profile.html" class="view-profile-btn">Edit Profile</a>
                </div>
           </div>
           <div class="right2">
               <div class="about">
                   <h3>About</h3>
                   <p class="about-data">
                       Dr Smith is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat nesciunt consequatur eaque repudiandae quibusdam magnam numquam quae est. Voluptas, velit natus! Pariatur, dolor nostrum fugit explicabo quisquam earum ad, quia nemo veniam velit blanditiis. Fuga itaque dignissimos nobis iusto tenetur laudantium suscipit? Accusamus rerum placeat quasi est inventore obcaecati neque unde odit omnis tempora, at facilis molestiae explicabo perferendis sit.
                   </p>
               </div>
               <div class="personal-information">
                   <h3>Personal Info</h3>
                   <div class="country">
                       <h5>Country</h5>
                       <p class="country-data">
                        <?php echo   $Country; ?>
                       </p>
                   </div>
                <div class="city">
                    <h5>City</h5>
                    <p class="city-data">
                        <?php echo   $city; ?>
                    </p>
                </div>
                <div class="adress">
                    <h5>Address</h5>
                    <p class="address-data">
                        <?php echo  $Address; ?>
                    </p>
                </div>
                <div class="gender">
                    <h5>Gender</h5>
                    <p class="gender-data">
                        <?php if($sex=="M") 
                        {echo  "Male";}
                        else
                        {echo  "Female";}
                         ?>
                    </p>
                </div>
                <div class="dob">
                    <h5>Date of Birth</h5>
                    <p class="dob-data">
                        <?php echo   $date; ?>
                    </p>
                </div>
               </div>
               <div class="qualification">
                   <h3>Qualifications</h3>
                <div class="academic-degree">
                    <h5>Academic Degree</h5>
                    <p class="cademic-degree-data">
                        <?php echo   $Title; ?>
                    </p>
                </div>
                <div class="cv">
                    <h5>CV</h5>
                    <a class="flex download-cv" href="#">
                        <i class="fa fa-download"></i>
                        <p>Download</p>
                    </a>
                </div>
               </div>
           </div>
       </div>
    </main>
</body>

</html>