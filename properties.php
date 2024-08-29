<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dada Real Estate</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


         <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+237 690-45-93-04</a>
                            <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>ashuesthy@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                    <a href="index.html" class="navbar-brand p-0">
                        <img src="img/restatelg.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <a href="properties.php" class="nav-item nav-link">Properties</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="team.php" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    <a href="faqs.php" class="dropdown-item">FAQs</a>
                                    <a href="login.php" class="dropdown-item">Login/Register</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="bg-breadcrumb-single"></div>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Properties</h4>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
         
        
        <!-- Properties Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Properties</h4>
                    <h1 class="display-4"> Transforming space, changing lives<br> Littoral Region</h1>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.8.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Makepe, Douala</a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining</p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.6.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Bastos, Yaounde</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining  </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.9.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Molyko, Buea</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining   </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="properties-item bg-light rounded">
                            <div class="Properties">
                                <img src="img/house3.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Bonanjo, Douala </a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Properties</h4>
                    <h1 class="display-4"> Center Region</h1>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.8.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Makepe, Douala</a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining</p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.6.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Bastos, Yaounde</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining  </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.9.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Molyko, Buea</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining   </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="properties-item bg-light rounded">
                            <div class="Properties">
                                <img src="img/house3.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Bonanjo, Douala </a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Properties</h4>
                    <h1 class="display-4">Southwest region</h1>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.8.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Makepe, Douala</a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining</p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.6.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Bastos, Yaounde</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining  </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="properties-item bg-light rounded">
                            <div class="properties-img">
                                <img src="img/house.9.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start">Molyko, Buea</a>
                                    <p class="mb-4">4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining   </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="properties-item bg-light rounded">
                            <div class="Properties">
                                <img src="img/house3.jpeg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="properties-content text-center p-4">
                                <div class="properties">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"> Bonanjo, Douala </a>
                                    <p class="mb-4"> 4 bedrooms, 3 toilets, 1 kitchen , 1 parlour, 1 dining </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- properties End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <img src="img/restatelg.png" alt="Logo">
                                <p class="mb-3">  Where Memories are made and stories begin <br> Picture yourself living in a house from us</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Bastos, Yaounde</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> ashuesthy@gmail.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> dadaestate@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>+237 690-45-93-04</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +237 682-847-784</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Bonamoussadi, Douala</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> ashuesthy@gmail.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> dadaestate@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>+237 690-45-93-04</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +237 682-847-784</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-"></i> Mayor street, Buea</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> ashuesthy@gmail.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> dadaestate@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>+237 690-45-93-04</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +237 682-847-784</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-primary"><i class="fas fa-copyright text-light me-2"></i>Dada</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="border-bottom text-primary" href="https://htmlcodex.com">Dada Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>