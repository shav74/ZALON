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

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/homestyle.css" />
    <link rel="stylesheet" href="css/swiper-style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <style>
        @media screen and (max-width: 768px) {
            .slide-content {
                margin: 0 10px;
            }

            .swiper-navBtn {
                display: none;
            }
        }


        .swiper-navBtn {
            color: #000000;
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: #000000;
        }

        .swiper-navBtn::before,
        .swiper-navBtn::after {
            font-size: 35px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: #cd8c99;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #cd8c99;
        }

        .wrapper {
            margin-top: 3vw;
            margin-bottom: 0vh;
        }

        #line-devide {
            margin-left: 4vw;
            margin-right: 4vw;
        }
    </style>

    <title>ZALON</title>
</head>

<body>
    <?php include_once('inc/nav.php') ?>
    <div class="info">
        <span class="title-main">Best Deals </span>
        <span class="title-sub">from your favourite salons</span><br>
        <span id="search-des">
            Try searching for cities, salons, or even a sevice!
        </span>
    </div>

    <div>
        <div class="book-info">
            <span class="book-text">Book your next </span>
            <span class="book-change-name" id="book-change" style="color: #e39c9c;">Haircut</span><br>
        </div>
        <div class="wrapper">
            <div class="search-input">
                <a href="" target="_blank" hidden></a>
                <input type="text" placeholder="Business Name or Location" />
            </div>
            <div class="search-input">
                <a href="" target="_blank" hidden></a>
                <input type="text" placeholder="Type of Service" />
            </div>
            <div class="search-input">
                <a href="" target="_blank" hidden></a>
                <input type="text" placeholder="Select Time" />
            </div>
            <div class="search-icon">
                <a href="" target="_blank" hidden></a>
                <button name="search-button">Search</button>
            </div>
        </div>
        <br>
        <hr id="line-devide">
        <br>
    </div>

    <div class="title-view-more">
        <span>Popular in</span>
        <span id="area">Kandana</span>
        <span class="view-more">view more</span>
    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile1.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile2.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile3.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile4.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile5.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile6.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile7.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile8.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile9.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <br><br>
        <div class="swiper-pagination"></div>
    </div>


    <div class="title-view-more">
        <span>Daily Deals</span>
        <span class="view-more">view more</span>
    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile3.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile4.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile5.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile6.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile7.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile8.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile9.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <br><br>
        <div class="swiper-pagination"></div>
    </div>


    <div class="title-view-more">
        <span>Trending Looks</span>
        <span class="view-more">view more</span>
    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile2.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile3.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile4.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile5.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile6.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile7.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile8.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/profile9.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <br><br>
        <div class="swiper-pagination"></div>
    </div>

    <?php include_once('inc/footer.php') ?>

    <script src="js/nav.js"></script>
    <script src="js/home.js" onload="main()"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/swiper-script.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

</body>

</html>