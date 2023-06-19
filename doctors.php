<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS FILES -->        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">

    </head>
<body>

<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="MedikitHealthCare.php">
                Medikit
                <strong class="d-block">Health Care</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">

                <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>

                    <li class="nav-item" onClick="location.href='Map.php'"></Button>
                        <a class="nav-link" href="#booking">Hospital-Map</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="MedikitHealthCare.php">
                        Medikit
                        <strong class="d-block">Health Care</strong>
                    </a>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Login'){
                        ?>
                        <li class="nav-item"onClick="location.href='appoint.php'"> <a class="nav-link" href="#Book">Book Appointment</a>
                         </li>
                        
                         <li class="nav-item"onClick="location.href='shopping-cart/index.php'"> <a class="nav-link" href="#Book">Medicare</a>
                         </li>
                         
                         <li class="nav-item"onClick="location.href='logout.php'"> <a class="nav-link" href="#logout">Logout</a>
                         </li>

                        <?php
                                }
                            }
                        ?> 
                </ul>
            </div>

        </div>
    </nav>
	
    <div class="container">
	<div class="row">
    <!-- first -->
    <div class="col" style="width: 18rem;">
        <img src="team/1.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr. Harshil Patel</h5>
          <p class="card-text">Consultant</p>
        </div>
      </div>    
      <!-- second -->
      <div class="col" style="width: 18rem;">
	  <img src="team/2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr. Sahil Achhava</h5>
          <p class="card-text">MBBS <br> Neurology</p>
        </div>
      </div>    
      <!-- third -->
      <div class="col" style="width: 18rem;">
	  <img src="team/3.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr. Dhruv Shah</h5>
          <p class="card-text">MBBS, MS, DNB <br>
				General Surgery</p>
        </div>
      </div>   
	  </div>   
	  <!-- forth  -->
	  
	  <div class="row">
      
      <div class="col" style="width: 18rem;">
	  <img src="team/4.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr.Namita Bhoj</h5>
          <p class="card-text">MD <br>
					Dermatology</p>
        </div>
      </div>    
      <!-- fifth -->
      <div class="col" style="width: 18rem;">
                <img src="team/5.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr.Yagnesh Patel</h5>
          <p class="card-text">MBBS,MS <br>
					Eye Specialist</p>
        </div>
      </div>    
      <!-- six -->
      <div class="col" style="width: 18rem;">
	  <img src="team/6.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center" >
          <h5 class="card-title">Dr. Vijeta Kumari</h5>
          <p class="card-text">MBBS <br>
		  Health Checkup
		  </p>
        </div>
      </div> 
	     

    </div>
	</div>
	</body>
</html>



