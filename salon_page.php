<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link
        href="https://www.dafontfree.net/embed/YmVudG9uc2Fucy1ib29rLXJlZ3VsYXImZGF0YS80Ni9iLzYyNjYxL0JlbnRvblNhbnMgQm9vay5vdGY"
        rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/salon-page.css" />
</head>

<body>

    <?php include_once('inc/nav.php') ?>

    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About</button>
        <button class="tablinks" onclick="openCity(event, 'Team')">Team</button>
        <button class="tablinks" onclick="openCity(event, 'Services')">Services</button>
        <button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
        <button class="tablinks" onclick="openCity(event, 'Blog')">Blog</button>
        <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
    </div>

    <!-- Tab content -->
    <div id="About" class="tabcontent">
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>25 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus. Aenean consectetur convallis porttitor. Aliquam
                                interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </div>

    <div id="Team" class="tabcontent">
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Barber</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Barber</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Barber Team</p>
                    <h2>Meet Our Hair Cut Expert Barber</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Master Barber</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <p>Hair Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Gloria Edwards</h2>
                                <p>Beard Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <p>Color Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    </div>

    <div id="Services" class="tabcontent">
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Price</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Price</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Pricing Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Best Pricing</p>
                    <h2>We Provide Best Price in the City</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-1.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Hair Cut</h2>
                                <h3>$9.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-2.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Hair Wash</h2>
                                <h3>$10.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-3.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Hair Color</h2>
                                <h3>$11.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-4.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Hair Shave</h2>
                                <h3>$12.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-5.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Hair Straight</h2>
                                <h3>$13.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-6.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Facial</h2>
                                <h3>$14.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-7.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Shampoo</h2>
                                <h3>$15.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-8.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Beard Trim</h2>
                                <h3>$16.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-9.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Beard Shave</h2>
                                <h3>$17.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-10.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Wedding Cut</h2>
                                <h3>$18.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-11.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Clean Up</h2>
                                <h3>$19.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="img/price-12.jpg" alt="Image" />
                            </div>
                            <div class="price-text">
                                <h2>Massage</h2>
                                <h3>$20.99</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->
    </div>

    <div id="Gallery" class="tabcontent">
        <!-- Portfolio Start -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header text-center">
                    <p>Barber Image Gallery</p>
                    <h2>Some Images From Our Barber Gallery</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".first">Hair Cut</li>
                            <li data-filter=".second">Beard Style</li>
                            <li data-filter=".third">Color & Wash</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-1.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-2.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-3.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-4.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-5.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                <img src="img/portfolio-6.jpg" alt="Portfolio Image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
    </div>

    <div id="Blog" class="tabcontent">
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Barber Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Barber Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest From Blog</p>
                    <h2>Learn More from Latest Barber Blog</h2>
                </div>
                <div class="row blog-page">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Hair Cut</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Beard Style</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Color & Wash</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-4.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Hair Cut</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-5.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Beard Style</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-6.jpg" alt="Blog" />
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Color & Wash</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur
                                    facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
    </div>

    <div id="Reviews" class="tabcontent">
        <h3>Reviews</h3>
        <p>Reviews is the capital of Japan.</p>
    </div>

</body>
<?php include_once('inc/footer.php') ?>
<script src="js/nav.js"></script>
<script>

    document.getElementById("defaultOpen").click();

    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";

    }
</script>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

</html>