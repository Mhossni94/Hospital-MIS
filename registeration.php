<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Test Trial 2">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/registartion_style.css">
    <link rel="stylesheet" href="css/fontawesomepro.css" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    
    
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
                    <li class="nav-item"><a href="index.php"class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="Receptionist.php" class="nav-link">Receptionist *</a></li>
                    <li class="nav-item"><a href="Profile%20Patient.php" class="nav-link">Profile *</a></li>
                    <li class="nav-item active"><a href="registeration.php" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        <!-- end of Navbar -->
    </nav>

    <div class="mb-5">Navbar Place</div>
    <!-- Start After Nav bar-->


    <div class="main">
      <div class="container">
      <section class="register-all row">
      <div class="reg-info col-md-7 ">
        <h1>MIS registeration form</h1>
        <p>Enjoy your online services and previleges,
          access to all our online services has never been easier.
        </p>


      </div>


    <section class="registeration col-md-5"> 

      <form action ="bridge.php" method="POST" onsubmit="return validate()">
        <label for="firstName"> First Name:
          <input type="text" id="firstName" name="first">           
        </label>
        <div class="alert alert-danger firstwarning" role="alert">Please enter a vaild name</div>

        <label for="lastName"> Last Name:
          <input type="text" id="lastName" name="last">           
        </label>
        <div class="alert alert-danger lastwarning" role="alert">Please enter a vaild name</div>

        <label for="prefLang"> Preferred Language:
          <select id="prefLang" name = "language" >     
          <option value="arabic">Arabic</option>  
          <option  value="english">English</option>          
          </select>         
        </label>
        <label for="birthDate" >
    
       <div class="row birth ">
          <div class="col-sm-4"><select id="day" name="day" ></select> </div>
          <div class="col-sm-4"><select id="month" name="month" ></select> </div>
          <div class="col-sm-4"><select id="year" name="year"></select> </div>
        </div>

        
        </label>
        <label for="insurance"> Insurance Grade:
          <select id="insurance" name="insurance">



          </select>
        </label>
        <label for="mobileNumber"> Mobile Number: 
          <input type="text" id="mobileNumber" name="mobile">           
        </label>
        <div class="alert alert-danger mobilewarning" role="alert">Please enter a vaild Egyptian Mobile number</div>

        <label for="nationalId"> National ID:
          <input type="text" id="nationalId" name="id">           
        </label>
        <div class="alert alert-danger idwarning" role="alert">Please enter a vaild Egyptian iD number</div>

        <label for="email"> Email:
          <input type="text" id="email" name="email">           
        </label>
        <div class="alert alert-danger emailwarning" role="alert">Kindly enter a vaild Email</div>

        <label for="bloodType"> Blood Type:
          <input type="text" id="bloodType" name="type">           
        </label>
        <div class="alert alert-danger bloodwarning" role="alert">Please enter a vaild Blood type (A+, A-, B+, B-, O+, O-, AB+, AB-).</div>


        <button type="submit" class="btn btn-success btn-block register" id="submit">Submit</button>



      </form>
    </div>

    </section>
  </section>
  




    </div>



  </div>  
    
    
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/registartion_script.js"></script>
  </body>



</html>


 
 
 
 
 
