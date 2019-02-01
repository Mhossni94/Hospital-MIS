<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hospital Name</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/fontawesomepro.css" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link id="rtlStyle" rel="stylesheet" href="">
</head>

<body>

    <!-- Navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light position-fixed fixed-top bg-light">


        <!-- Navbar Brand -->
        <a href="index.php" class="navbar-brand"><img src="images/HospitalIQ.png" alt="HQLogo" /></a>

        <!-- Navbar Expand Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Items In Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="Receptionist.php" class="nav-link">Receptionist *</a></li>
                    <li class="nav-item active"><a href="Profile%20Patient.php" class="nav-link">Profile *</a></li>
                <li class="nav-item"><a href="registeration.php" class="nav-link">Signup</a></li>
                <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
        <!-- end of Navbar -->
    </nav>

    <div class="mb-5">Navbar Place</div>
    <!-- Start After Nav bar-->


    <!-- Cover Photo -->

    <section class="cover-photo">

        <!-- Profile Picture -->
        <div class="profile-picture">
            <img class="img-fluid" src="images/pp.jpg" alt="Profile Picture">
        </div>

        <!-- Patient Emergency Info -->
        <div class="emergency-info-container">

            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>
            <p>Blood Type : O+</p>
            <p>Allergic to pencilin</p>
            <p>Fixation Surgeries in both Legs</p>

        </div>

    </section>


    <section class="py-5">
        <div class=" container px-0 patient-data-container">
            <div class="patient-info-tabs py-4 px-5 border-bottom">

                <ul class="nav nav-pills" id="pills-tab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="pills-ov-tab" data-toggle="pill" href="#pills-ov" role="tab" aria-controls="pills-ov" aria-selected="true">Overview</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-fh-tab" data-toggle="pill" href="#pills-fh" role="tab" aria-controls="pills-fh" aria-selected="false">Family History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-al-tab" data-toggle="pill" href="#pills-al" role="tab" aria-controls="pills-al" aria-selected="false">Allergies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-im-tab" data-toggle="pill" href="#pills-im" role="tab" aria-controls="pills-im" aria-selected="false">Immunations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-sr-tab" data-toggle="pill" href="#pills-sr" role="tab" aria-controls="pills-sr" aria-selected="false">Surgeries</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-lr-tab" data-toggle="pill" href="#pills-lr" role="tab" aria-controls="pills-lr" aria-selected="false">Lab Results</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" id="pills-rad-tab" data-toggle="pill" href="#pills-rad" role="tab" aria-controls="pills-rad" aria-selected="false">Radiology</a>
                    </li>

                </ul>
            </div>
            <div class="patient-info-container px-3">
                <div class="tab-content float-left py-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-ov" role="tabpanel" aria-labelledby="pills-ov-tab">Overview data ...</div>
                    <div class="tab-pane fade" id="pills-fh" role="tabpanel" aria-labelledby="pills-fh-tab">Family History...</div>
                    <div class="tab-pane fade" id="pills-al" role="tabpanel" aria-labelledby="pills-al-tab">Allergies ...</div>
                    <div class="tab-pane fade" id="pills-im" role="tabpanel" aria-labelledby="pills-im-tab">Immunations Records...</div>
                    <div class="tab-pane fade" id="pills-sr" role="tabpanel" aria-labelledby="pills-sr-tab">Surgeries ...</div>
                    <div class="tab-pane fade" id="pills-lr" role="tabpanel" aria-labelledby="pills-lr-tab">Lab Results...</div>
                    <div class="tab-pane fade" id="pills-rad" role="tabpanel" aria-labelledby="pills-rad-tab">Radiology ...</div>
                </div>

                <div class="left-side-info border-left float-right py-5 px-5">
                    <p>sidemenu</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

<br><br><br>
    

    <!-- footer -->

    <footer class="border-top">
        <!-- footer Container -->
        <div class="container mb-3">
            <!-- footer Items -->
            <div class="row items">

                <!-- footer 1st Item -->
                <div class="col-lg-3 col-md-5 col-xs-6">
                    <h4>Contact</h4>
                    <div class="d-flex container">
                        <i class="fal fa-map-marker-alt"></i>
                        <span>8901 Marmora Road Chi Minh City, Vietnam</span>
                    </div>
                    <div class="d-flex container">
                        <i class="fal fa-phone"></i>
                        <span>0800-123456 (24/7 Support Line)</span>
                    </div>
                    <div class="d-flex container">
                        <i class="fal fa-fax"></i>
                        <span>(123) 123-4567</span>
                    </div>
                    <div class="d-flex container">
                        <i class="fal fa-envelope"></i>
                        <span>info@demo.com</span>
                    </div>
                </div>

                <!-- footer 2nd Item -->
                <div class="col-lg-3 col-md-5 col-xs-6">
                    <h4>Support</h4>
                    <a href="#">Support</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Request Appointment</a>
                    <a href="#">Site Map</a>
                    <a href="#">Care Help Line</a>
                </div>

                <!-- footer 3rd Item -->
                <div class="col-lg-3 col-md-5 col-xs-6">
                    <h4>Links</h4>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                    <a href="#">About Us</a>
                </div>

                <!-- footer 4th Item -->
                <div class="col-lg-3 col-md-5 col-xs-6">
                    <h4>Feed Back</h4>
                    <form>
                        <input type="email" placeholder="Your Email" class="form-control" />
                        <textarea placeholder="Your Feed Back Here" class="form-control mt-4"></textarea>
                        <button class="btn btn-outline-success float-right mt-4">Send</button>
                    </form>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>

        <!-- Copy Rights -->
        <div class="bg-dark text-center">
                <div class="row">
                    <div class="col-lg-6 social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>

                    </div>
                    <div class="col-lg-6 align-items-center"><span class="copyright">© Copyright 2019 All Rights Reserved</span></div>
                </div>
            </div>
    </footer>
    <!-- end of footer -->



    <script src="js/jquery-3.3.1.min.js"></script>
    <scrip src="js/popper.min.js"></scrip>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/profilepatient.js"></script>
</body>

</html>
