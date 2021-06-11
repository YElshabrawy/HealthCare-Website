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
        <form action="#" method="GET">
        <div class="search-n-filter">
            <div class="flex">
                <div class="wrap mb">
                    <div class="search">
                        <input type="text" class="reset-this searchTerm" placeholder="Search">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-doctors">
            <?php 
            include_once '../../../PHPF/connectDataBase.php';

            $doctors = ShowPhysicianInfo();
            $i = 1;
            $total = 0;
            echo "<div class=\"row-grid\">";
            while($row = $doctors->fetch_assoc()){
                $total++;
                $ID = $row['ID'];
                $price = $row['Consultant'];
                $major = $row['major'];
                $rating = $row['Rate'];
                $fname = $row['FName'];
                $lname = $row['LName'];
                $city = $row['City'];

                echo "<div class=\"doctor center\" id=\"d$i\">
                    <div class=\"profile-pic big center smb\">
                        <img src=\"/images/default_pic.jpg\" alt=\"\" class=\"icon\">
                    </div>
                    <h2 class=\"name center\">Dr. <span class=\"fname\">$fname</span> <span class=\"lname\">$lname</span></h2>
                    <p class=\"smb specialization center\">$major</p>
                    <h3 class=\"adress\">Address: <span class=\"adress weakText\">$city</span></h3>
                    <h3 class=\"price smb\">Price: <span class=\"adress weakText\">$price EGP</span></h3>
                    <div class=\"rating \">";
                    switch($rating){
                        case 0:
                            echo"<span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>";
                            break;
                        case 1:
                            echo "<span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>";
                            break;
                        case 2:
                            echo "<span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>";
                            break;
                        case 3:
                            echo "<span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star-o\"></span>
                            <span class=\"fa fa-star-o\"></span>";
                            break;
                        case 4:
                            echo "<span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star-o\"></span>";
                            break;
                        default:
                            echo "<span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>
                            <span class=\"fa fa-star checked\"></span>";
                            break;
                    }
                 echo"</div>
                 <button name=\"b$total\" class=\"view-profile-btn\">View Profile</button>
                 <input type=\"number\" name=\"q$total\" id=\"Pat_ID\" value=\"$ID\" style=\"display: none;\">
                 </div>
                 ";

                if($i == 4){
                    $i = 1;
                    echo "</div>
                    <div class=\"row-grid\">";
                }
                else{
                    $i++;
                }
            }
            //////////////////////////////////////////////////////////////////////////////////////////
            for($i=1; $i<=$total;$i++){
                if(isset($_GET["b$i"])){
                    $phys_id = $_GET["q$i"];
                    echo "<script>alert(\"Hello There! My ID is $phys_id\")</script>";
                }
            }
            ?>
            <!-- <div class="row-grid">
                <div class="doctor center" id="d1">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d2">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d3">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d4">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
            </div>
            <div class="row-grid">
                <div class="doctor center" id="d1">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d2">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d3">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d4">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
            </div>
            <div class="row-grid">
                <div class="doctor center" id="d1">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d2">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>
                <div class="doctor center" id="d3">
                    <div class="profile-pic big center smb">
                        <img src="/images/default_pic.jpg" alt="" class="icon">
                    </div>
                    <h2 class="name center">Dr. <span class="fname">FName</span> <span class="lname">LName</span></h2>
                    <p class="smb specialization center">Dentist</p>
                    <h3 class="adress">Address: <span class="adress weakText">Cairo</span></h3>
                    <h3 class="price smb">Price: <span class="adress weakText">EGP 120</span></h3>
                    <div class="rating mb">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-full checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                
                    <a href="./doctor_profile.html" class="view-profile-btn">View Profile</a>
                </div>

            </div> -->
        </div>
        </form>
    </main>
</body>

</html>