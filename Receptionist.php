<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/fontawesomepro.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/Patients%20Tables.css" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <title>Patients Data</title>
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
                    <li class="nav-item active"><a href="Receptionist.php" class="nav-link">Receptionist *</a></li>
                    <li class="nav-item"><a href="Profile%20Patient.php" class="nav-link">Profile *</a></li>
                    <li class="nav-item"><a href="registeration.php" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        <!-- end of Navbar -->
    </nav>

    <div class="mb-5">Navbar Place</div>
    <!-- Start After Nav bar-->


<!--Patients Section -->
<section id="sectiontable" class="m-auto">
  
   
<!--Patients -->
  
   <div>
       <div class="w-25 m-auto ">
       <span class="h1 mr-4">Patients</span>
       <i class="fal fa-2x fa-plus-square" onclick="addPatient()"></i>
       <i class="fal fa-2x fa-minus-square" onclick="removePatient()"></i>
       <i class="fal fa-2x fa-edit" onclick="editPatient()"></i>
       </div>
   </div>

<!--Table Content -->
<div id="table">  
   <table  class="w-100 mt-3 text-center text-nowrap ">
       <thead class="text-nowrap">
           <th>ID</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Phone Number</th>
           <th>Age</th>
           <th>Insurance</th>
           <th>Blood Type</th>
           <th>Referral</th>
           <th>Complain</th>
           <th>Paid Amount</th>
           <th>Debit Amount</th>
           <th>Medical History</th>
           <th>allergies</th>
       </thead>
       <tbody id="tableBody">
       </tbody>
       
       
   </table>
</div>

</section>
  
  
  
<!-- Add Section -->
 
 
  <section id="addPatient" >
      <div class="overlay" onclick="hide()"></div>
          <div class="infoa px-4">
             
              <label class="d-block">Name</label>
              <div class="w-50 float-left pr-1">
              <input type="text" placeholder="First Name" id="fName" class="form-control"/>
              </div>
              <div class="w-50 float-right pl-1">
              <input type="text" placeholder="Last Name" id="lName" class="form-control"/>
              </div>
              
              <label>E-Mail</label>
              <input type="email" placeholder="Your E-Mail" id="mail" class="form-control"/>
          
              <label>Phone Number</label>
              <input type="tel" placeholder="Phone Number" id="pNumber" class="form-control"/>
          
              <label>Birthday</label>
              <input type="date" placeholder="Birthday" id="birthday" class="form-control"/>
              
              <label>Insurance</label>
              <input type="number" placeholder="Insurance" id="insurance" class="form-control"/>
          
              <label>Referral</label>
              <input type="text" placeholder="Referral" id="referral" class="form-control"/>
          
              <label>Complain</label>
              <input type="text" placeholder="Complain" id="complain" class="form-control"/>
              
              <label>Blood Type</label>
              <input type="text" placeholder="Complain" id="complain" class="form-control"/>
          
              <label>Paid Amount</label>
              <input type="number" placeholder="Paid Amount" id="pAmount" class="form-control"/>
          
              <label>Debit Amount</label>
              <input type="number" placeholder="Debit Amount" id="dAmount" class="form-control"/>
          
              <label>Allergies</label>
              <input type="text" placeholder="Allergies" id="allergies" class="form-control"/>
          
              <label>Medical History</label>
              <textarea placeholder="Medical History" id="mHistory" class="form-control" maxlength="200" rows="5" ></textarea>
              <div class="btn btn-primary my-3 float-right" onclick="addOnePatient()">Confirm</div>
          </div>
  </section>
  
  
<!-- Remove Section -->
 
 
  <section id="removePatient"  >
      <div class="overlay" onclick="hide()" id="hide1"></div>
          <div class="infor px-4 py-2">
             
              <label class="d-block">Enter The ID</label>
              <input type="number" placeholder="ID" id="idRemove" class="form-control"/>
              
              <div class="btn btn-primary my-3 float-right" onclick="removeOnePatient()">Remove Patient</div>
          </div>
     
  </section>
  
  
<!-- edit Section -->
 
  <section id="editPatient">
      <div class="overlay" onclick="hide()"></div>
          <div class="infoe px-4 ">
             
              <label class="d-block">Name</label>
              <div class="w-50 float-left pr-1">
              <input type="text" placeholder="First Name" id="fName" class="form-control"/>
              </div>
              <div class="w-50 float-right pl-1">
              <input type="text" placeholder="Last Name" id="lName" class="form-control"/>
              </div>
              
              <label>E-Mail</label>
              <input type="email" placeholder="Your E-Mail" id="mail" class="form-control"/>
          
              <label>Phone Number</label>
              <input type="tel" placeholder="Phone Number" id="pNumber" class="form-control"/>
          
              <label>Birthday</label>
              <input type="date" placeholder="Birthday" id="birthday" class="form-control"/>
              
              <label>Insurance</label>
              <input type="number" placeholder="Insurance" id="insurance" class="form-control"/>
          
              <label>Referral</label>
              <input type="text" placeholder="Referral" id="referral" class="form-control"/>
          
              <label>Complain</label>
              <input type="text" placeholder="Complain" id="complain" class="form-control"/>
          
              <label>Paid Amount</label>
              <input type="number" placeholder="Paid Amount" id="pAmount" class="form-control"/>
          
              <label>Debit Amount</label>
              <input type="number" placeholder="Debit Amount" id="dAmount" class="form-control"/>
          
              <label>Allergies</label>
              <input type="text" placeholder="Allergies" id="allergies" class="form-control"/>
          
              <label>Medical History</label>
              <textarea placeholder="Medical History" id="mHistory" class="form-control" maxlength="200" rows="5" ></textarea>
              <div class="btn btn-primary my-3 float-right" onclick="confirm()">Confirm</div>
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Patients%20Tables.js"></script>
</body>

</html>