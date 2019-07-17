<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4 Design Number 1</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>

</head>
<body>
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="info col-sm text-center text-sm-left">
                    <i class='fa fa-phone'></i><span>01037635613</span>
                    <i class='fa fa-envelope-o'>seongs70@naver.com</i>
                </div>
                <div class="info col-sm text-center text-sm-right">
                    <span>Let's work Together</span>
                    <span class='get-quote'>Get Quote</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Upper Bar -->
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
          <a class="navbar-brand" href="#">
              <span>Elite</span><span>Corp</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">About  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>

            </ul>
          </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Slider -->
    <div class="slider">
        <div id="main-slider" class="carousel slider" data-ride="carousel">
            <div class="carousel-inner">
                <h1>We're an Independent <br>Design and <span>Development </span><br>Agency.</h1>
                <div class="overlay"></div>
                <div class="carousel-item carousel-one active">
                </div>
                <div class="carousel-item carousel-two">
                </div>
                <div class="carousel-item carousel-three">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <!-- End Slider -->
    <!--Start Featrue-->
    <div class="features text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-3x rounded-circle"></i>
                    <h3>Great Ideas</h3>
                    <p>Lorem ipsum dolor sit amet, sectetur adipisicing elit,  eiusmod tempor incididunalquis nostrud exercitation</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-3x rounded-circle"></i>
                    <h3>Great Ideas</h3>
                    <p>Lorem ipsum dolor sit amet, sectetur adipisicing elit,  eiusmod tempor incididunalquis nostrud exercitation</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-3x rounded-circle"></i>
                    <h3>Great Ideas</h3>
                    <p>Lorem ipsum dolor sit amet, sectetur adipisicing elit,  eiusmod tempor incididunalquis nostrud exercitation</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-3x rounded-circle"></i>
                    <h3>Great Ideas</h3>
                    <p>Lorem ipsum dolor sit amet, sectetur adipisicing elit,  eiusmod tempor incididunalquis nostrud exercitation</p>
                </div>

            </div>
        </div>
    </div>
    <!--END Featrue -->
    <!-- Start overview    -->
    <div class="overview text-center">
        <div class="container">
            <h2 class="h1">Company Overview</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.</p>
            <h4>Lets Start Today</h4>
            <button>View More</button>
        </div>
    </div>
    <!-- End overview    -->
    <!-- Start Featured Work -->
    <div class="featured-work text-center">
        <div class="container">
            <h2>Featured Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.</p>
            <ul class="list-unstyled row">
                <li data-class="all" class="active col-md">All</li>
                <li data-class=".websites" class="col-md">Websites</li>
                <li data-class=".logos" class="col-md">Logos</li>
                <li data-class=".graphic" class="col-md">Graphic</li>
                <li data-class=".marketing" class="col-md">Marketing</li>
                <li data-class=".videos" class="col-md">Vedeo</li>
            </ul>
        </div>
        <div class="shuffle-imgs">
            <div class="row shuffle-images">
                <div class="col-md">
                    <img class="websites" src="img/01.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="logos" src="img/02.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="logos" src="img/03.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="websites" src="img/04.jpg" alt=""/>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <img class="graphic" src="img/05.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="videos" src="img/06.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="websites" src="img/07.jpg" alt=""/>
                </div>
                <div class="col-md">
                    <img class="marketing" src="img/08.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-posts">
        <div class="container">
            <h2 class="text-center">Latest Post</h2>
            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.</p>
            <div class="row">
                <!-- Start Grid Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="img/post01.jpg" />
                        <div class="card-body">
                            <h4 class="card-title">Lorem Ipsum is simply dummy text ofthe printing and</h4>
                            <h6 class="card-subtitle mb-2 text-muted">March 24 2019</h6>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.
                        </p>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="img/post02.jpg" />
                        <div class="card-body">
                            <h4 class="card-title">Lorem Ipsum is simply dummy text ofthe printing and</h4>
                            <h6 class="card-subtitle mb-2 text-muted">March 24 2019</h6>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.
                        </p>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="img/post03.jpg" />
                        <div class="card-body">
                            <h4 class="card-title">Lorem Ipsum is simply dummy text ofthe printing and</h4>
                            <h6 class="card-subtitle mb-2 text-muted">March 24 2019</h6>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.
                        </p>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
            <!-- End Grid Column -->
            </div>
        </div>
    </div>
    <div class="testimonials">
        <div class="overlay"></div>
        <div class="container">
            <div class="bd-example">
              <div id="testimonials" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                  <li data-target="#testimonials" data-slide-to="1"></li>
                  <li data-target="#testimonials" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="carousel-caption d-none d-sm-block">
                        <img src="img/avatar01.png"alt="...">
                        <h3>Nani</h3>
                        <span>Company CEO</span>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption d-none d-sm-block">
                        <img src="img/avatar02.png" alt="...">
                        <h3>Klaus</h3>
                        <span>Free Lancer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption d-none d-sm-block">
                        <img src="img/avatar03.png"alt="...">
                        <h3>olleh</h3>
                        <span>Company CEO</span>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
    </div>
    <!-- End Featured Work -->
    <!-- Start Pricing Table -->
    <div class="pricing-table text-center">
        <div class="container">
            <h2>Pricing Table</h2>
            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.</p>
            <div class="row">
                <!-- Start Grid Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Small Business</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                        </div>
                        <p class="card-text">$99/<span>Year</span></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <a href="#" class="card-link">Buy Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card  corperate">

                        <div class="card-body">
                            <h4 class="card-title">Coperate</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                        </div>
                        <p class="card-text">$199/<span>Year</span></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <a href="#" class="card-link">Buy Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Enterprise</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                        </div>
                        <p class="card-text">$299/<span>Year</span></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <a href="#" class="card-link">Buy Now</a>
                    </div>
                </div>
                <!-- End Grid Column -->
            </div>
        </div>
    </div>
    <!-- End  Pricing Table -->
    <!-- Start Why choose Us -->
    <div class="choose-us">
        <div class="container-fluid">
            <div class="row">
                <div class="info col-lg-6">
                    <img src="img/man.jpg" alt="">
                </div>
                <div class="info col-lg-6">
                    <h2 class="h1">Why Choose Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim<br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why choose Us -->
    <div class="stats text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="stat-box">
                        <i class="fa fa-user fa-fw fa-5x"></i>
                        <span class="number">624</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="stat-box">
                        <i class="fa fa-briefcase fa-fw fa-5x"></i>
                        <span class="number">624</span>
                        <p>Amazing Tours</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="stat-box">
                        <i class="fa fa-heart fa-fw fa-5x"></i>
                        <span class="number">624</span>
                        <p>Oartners</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="stat-box">
                        <i class="fa fa-comments fa-fw fa-5x"></i>
                        <span class="number">624</span>
                        <p>Questions Answered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Us -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <p>You think we're cool? let's work together</p>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="site-info">
                        <h2><span>Elite</span><span>Corp</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="helpful-links">
                        <h2>Helpful Links</h2>
                        <div class="row">
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>About</li>
                                    <li>Portofolio</li>
                                    <li>Team</li>
                                    <li>Price</li>
                                    <li>Privacy</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>FAQ</li>
                                    <li>Blog</li>
                                    <li>How it Work</li>
                                    <li>Benefits</li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="contact">
                        <h2>Contact Us</h2>
                        <ul class="list-unstyled">
                            <li>54958 Levo Road Near Red Fort, U.S</li>
                            <li>Phone: 012-12345678</li>
                            <li>Email: <a href="mailto:seongs70@naver.com?subject=Contact">seongs70@naver.com</a></li>
                        </ul>
                        <span>Elite</span><span>Corp</span>
                        <p></p>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-->
    <!--  Start Copyright  -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center text-sm-left text-uppercase">
                    COPYRIGHT 2017 ELITECORP | ALL RIGHTS RESERVED
                </div>
                <div class="col-sm-6 text-center text-sm-right">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  End Copyright  -->
</body>
</html>
