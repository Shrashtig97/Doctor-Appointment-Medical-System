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
            <a class="navbar-brand mx-auto d-lg-none" href="MedikitHealthCare.html">
                Medikit
                <strong class="d-block">Health Care</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active" onClick="location.href='MedikitHealthCare.html'"</Button>
                        <a class="nav-link" href="#hero">Home</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.html'"></Button>
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.html'"></Button>
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="MedikitHealthCare.html">
                        Medikit
                        <strong class="d-block">Health Care</strong>
                    </a>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.html'"></Button>
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>

                    <li class="nav-item" onClick="location.href='Map.php'"></Button>
                        <a class="nav-link" href="#booking">Hospital-Map</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.html'"></Button>
                        <a class="nav-link" href="#booking">Registration</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.html'"></Button>
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

<section class="section-padding" id="booking">
    <div class="container">
        <div class="row">
        
            <div class="col-lg-8 col-12 mx-auto">
                <div class="booking-form">
                    
                    <h2 class="text-center mb-lg-3 mb-2">SOS Form</h2>
                
                    <form role="form" action="dbSOS.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                            </div>
                            
                            <div class="col-lg-6 col-12">
                                <input type="text" name="time"  class="form-control" placeholder="Enter-Time :- Medicine Name" >
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter-Phone-No." >
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                <button type="submit" class="form-control" id="submit-button" ><a href="MedikitHealthCare.html">submit</a></button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

  <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>