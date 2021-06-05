<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Doctors</title>
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
                    <span class="fname">FName</span>
                    <span class="lname">LName</span>
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
            echo "<div class="row-grid">"
            while($row = $doctors->fetch_assoc()){
                if()
                $ID = $row['ID'];
                $price = $row['Consultant'];
                $major = $row['major'];
                $rating = $row['Rate'];
                $fname = $row['FName'];
                $lname = $row['LName'];

                $code = "<div class=\"doctor center\" id=\"d$i\">
                    <div class=\"profile-pic big center smb\">
                        <img src=\"/images/default_pic.jpg\" alt=\"\" class=\"icon\">
                    </div>
                    <h2 class=\"name center\">Dr. <span class=\"fname\">$fname</span> <span class=\"lname\">$lname</span></h2>
                    <p class=\"smb specialization center\">Dentist</p>
                    <h3 class=\"adress\">Address: <span class=\"adress weakText\">Cairo</span></h3>
                    <h3 class=\"price smb\">Price: <span class=\"adress weakText\">EGP 120</span></h3>
                    <div class=\"rating mb\">
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star-half-full checked\"></span>
                        <span class=\"fa fa-star-o\"></span>
                    </div>
                    
                    <a href=\"./doctor_profile.html\" class=\"view-profile-btn\">View Profile</a>
                </div>"
                echo "$ID - $fname - $lname - $price<br>";
                if($i == 4){
                    $i = 1;
                }
                else{
                    $i++;
                }
            }
            
            print_r($doctors);
            ?>
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

            </div>
        </div>
    </main>
</body>

</html>