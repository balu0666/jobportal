<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="asset/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/css/style.css">
   
    <script src="asset/script/jquery-3.5.1.min.js"></script>
    <script src="asset/script/popper.min.js"></script>
    <script src="asset/script/bootstrap.min.js"></script>
    <script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>
    <script src="asset/script/script.js"></script>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<section class="header pt-1 light">
    <div class="container light">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand pr-sm-3" href="index.php"><img src="asset/images/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse px-xl-5" id="navbarNavAltMarkup">
                        <ul class="navbar-nav mr-auto ml-xl-3 px-xl-3 px-lg-4 ml-lg-2 py-3">
                            <li class="nav-item">
                                <a class="nav-link style_link px-xl-4 px-lg-3" id="id_home" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link style_link px-xl-4 px-lg-3" id="id_pricing" href="pricing.php">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link style_link px-xl-4 px-lg-3" id="id_candidate" href="candidatelisting.php">Employers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link style_link px-xl-4 px-lg-3" id="id_whyus" href="whyus.php">Why us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link style_link px-xl-4 px-lg-3" id="id_contact" href="contact.php">Contact us</a>
                            </li>
                            <li class="dropdown  text_account">
                                <a class="dropdown-toggle  p-0 py-2 d-lg-none  text_account" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                <div class="dropdown-menu border_drop" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item py-2 px-3" href="candidatedashboard.php"><i class="fa fa-tachometer pr-3" aria-hidden="true"></i>Candidate Dashboard</a>
                                <a class="dropdown-item py-2 px-3" href="emdash.php"><i class="fa fa-tachometer pr-3" aria-hidden="true"></i>Employer Dashboard</a>
                                <a class="dropdown-item py-2 px-3" href="mycollection.php"><i class="fa fa-pencil-square-o pr-3" aria-hidden="true"></i>My Folders</a>
                                <!-- <a class="dropdown-item py-2 px-3" href="profile.php"><i class="fa fa-pencil-square-o pr-3" aria-hidden="true"></i>Edit Profile</a> -->
                                <a class="dropdown-item py-2 px-3" href="unlockprofile.php"><i class="fa fa-unlock pr-3" aria-hidden="true"></i></i>Unlocked Profile</a>
                                <a class="dropdown-item py-2 px-3" href="#"><i class="fa fa-key pr-3" aria-hidden="true"></i>Change password</a>
                                <a class="dropdown-item py-2 px-3" href="#"><i class="fa fa-sign-out  pr-3" aria-hidden="true"></i>Log out</a>
                               
                            </li>
                        </ul>
                        <!-- <div class="header_signup-signin d-lg-none pr-xl-0 px-0">
                            <ul class="list-inline pt-3">
                                <li class="list-inline-item"><a class="home_signup" href="signup.php">Sign Up</a></li>
                                <li class="list-inline-item"><a class="home_signin" href="signin.php">Sign In</a></li>
                            </ul>
                            </a>
                        </div> -->
                    </div>
                    <div class="dropdown d-none d-lg-block"> 
                        <a class="btn pr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="name_tag px-2">john smith</span><img src="asset/images/profile.png"> </a>
                        <div class="dropdown-menu smith_boxdrop mt-2" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item py-2 px-3" href="candidatedashboard.php"><i class="fa fa-tachometer pr-3" aria-hidden="true"></i>Candidate Dashboard</a>
                            <a class="dropdown-item py-2 px-3" href="emdash.php"><i class="fa fa-tachometer pr-3" aria-hidden="true"></i>Employer Dashboard</a>
                            <a class="dropdown-item py-2 px-3" href="mycollection.php"><i class="fa fa-pencil-square-o pr-3" aria-hidden="true"></i>My Folders</a>
                            <!-- <a class="dropdown-item py-2 px-3" href="profile.php"><i class="fa fa-pencil-square-o pr-3" aria-hidden="true"></i>Edit Profile</a> -->
                            <a class="dropdown-item py-2 px-3" href="unlockprofile.php"><i class="fa fa-unlock pr-3" aria-hidden="true"></i></i>Unlocked Profile</a>
                            <a class="dropdown-item py-2 px-3" href="#"><i class="fa fa-key pr-3" aria-hidden="true"></i>Change password</a>
                            <a class="dropdown-item py-2 px-3" href="#"><i class="fa fa-sign-out  pr-3" aria-hidden="true"></i>Log out</a>
                        </div>
                    </div>
                    <!-- <div class="header_signup-signin d-none d-lg-block pr-xl-0 px-0">
                            <ul class="list-inline pt-3">
                                <li class="list-inline-item"><a class="home_signup" href="signup.php">Sign Up</a></li>
                                <li class="list-inline-item"><a class="home_signin" href="signin.php">Sign In</a></li>
                            </ul>
                        </a>
                    </div> -->
                </nav>
            </div>
        </div>
    </div>
</section>

<!--fixed icon-->
<section class="four_links">
    <div class="icons">
        <a href="https://www.linkedin.com/" target="_blank" class="list_nav">
            <svg>
                <use xlink:href='asset/images/linkedin.svg#icon_linkedin'></use>
            </svg>
        </a>
        <a href="https://www.facebook.com/" target="_blank" class="list_nav">
            <svg class="px-1">
                <use xlink:href='asset/images/facebook.svg#icon_facebook'></use>
            </svg>
        </a>
        <a href="https://www.twitter.com/" target="_blank" class="list_nav">
            <svg>
                <use xlink:href='asset/images/twitter.svg#icon_twitter'></use>
            </svg>
        </a>
    </div>
</section>
