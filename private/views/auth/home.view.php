<?php

$this->view('../includes/header');

?>
<title><?= ucfirst($view) ?> | EduChamps</title>
</head>

<body>
<?php

$this->view('../includes/navbar');

?>

<div class="hero-content-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                    <header class="entry-header">
                        <h4>Get started with online Tech courses!</h4>
                        <h1>
                            Best Online <br> Learning System
                        </h1>
                    </header>

                    <div class="entry-content">
                        <p>
                            The tech field is rife with peculiar terms and buzzwords which, to the untrained ear, can be
                            extremely baffling. Web development is no exception, and if you want to make it as a
                            programmer, you need to be familiar with the industry lingo.
                            To simplify the process and demystify the jargon, EduChamps is here with an intensive
                            training in various key aspects of web development
                        </p>
                    </div>

                    <footer class="entry-footer read-more">
                        <a href="#">Read More</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="icon-boxes">
    <div class="container-fluid">
        <div class="flex flex-wrap align-items-stretch">
            <div class="icon-box">
                <div class="icon">
                    <span class="ti-user"></span>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title">Learn From Professionals</h2>
                </header>
                <div class="entry-content">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, culpa? Voluptatibus nemo
                        laudantium aliquam eligendi!
                    </p>
                </div>
                <footer class="entry-footer read-more">
                    <a href="#">
                        Read More
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-folder"></span>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title">Online Tech Library</h2>
                </header>
                <div class="entry-content">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, culpa? Voluptatibus nemo
                        laudantium aliquam eligendi!
                    </p>
                </div>
                <footer class="entry-footer read-more">
                    <a href="#">
                        Read More
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-book"></span>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title">Learn From Professionals</h2>
                </header>
                <div class="entry-content">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, culpa? Voluptatibus nemo
                        laudantium aliquam eligendi!
                    </p>
                </div>
                <footer class="entry-footer read-more">
                    <a href="#">
                        Read More
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-world"></span>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title">Top Tech Online Academy</h2>
                </header>
                <div class="entry-content">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, culpa? Voluptatibus nemo
                        laudantium aliquam eligendi!
                    </p>
                </div>
                <footer class="entry-footer read-more">
                    <a href="#">
                        Read More
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </footer>
            </div>
        </div>
    </div>
</div>

<section class="featured-courses horizontal-column courses-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="heading flex justify-content-between align-items-center">
                    <h2 class="entry-title">Featured Courses</h2>
                    <a href="#" class="btn mt-4 mt-sm-0">View All</a>
                </header>
            </div>
            <div class="col-12 col-lg-6">
                <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                    <figure class="course-thumbnail">
                        <a href="#">
                            <img src="<?= ROOT ?>/assets/images/1.png" alt="">
                        </a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <div class="course-ratings flex align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <sapn class="course-ratings-count">(4 votes)</sapn>
                            </div>
                            <h2 class="entry-title">
                                <a href="#">The Complete Web Development Course</a>
                            </h2>
                            <div class="entry-meta flex flex-wrap align-items-center">
                                <div class="course-author">
                                    <a href="#">Mr. Daniel Idah</a>
                                </div>
                                <div class="course-date">
                                    Published on June 08, 2024
                                </div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="free-cost">Free</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="course-content flex flex-wrap justify-cotent-between align-content-lg-stretch">
                    <figure class="course-thumbnail">
                        <a href="#">
                            <img src="<?= ROOT ?>/assets/images/2.jpg" alt="">
                        </a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <div class="course-ratings flex align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                            <h2 class="entry-title">
                                <a href="">Learn Web Design & PhotoShop</a>
                            </h2>
                            <div class="entry-meta flex flex-wrap align-items-center">
                                <div class="course-author">
                                    <a href="#">Mr. Nelson Ejumedia</a>
                                </div>
                                <div class="course-date">
                                    Published on June 08, 2024
                                </div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="paid-cost">$50.00</span>
                                <span class="price-drop">$59.00</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-6 align-content-lg-stretch">
                <header class="heading">
                    <h2 class="entry-title">About EduChamps</h2>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                </header>
                <div class="entry-content educhamps-stats">
                    <div class="stats-wrap flex flex-wrap justify-content-lg-between">
                        <div class="stats-count">
                            50<span>M+</span>
                            <p>STUDENTS LEARNING</p>
                        </div>
                        <div class="stats-count">
                            30<span>K+</span>
                            <p>ACTIVE COURSES</p>
                        </div>
                        <div class="stats-count">
                            340<span>M+</span>
                            <p>INSTRUCTORS ONLINE</p>
                        </div>
                        <div class="stats-count">
                            20<span>+</span>
                            <p>Graduates</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 flex align-content-center mt5 mt-lg-0">
                <div class="educhamps-video position-relative">
                    <div class="video-play-btn position-absolute">
                        <img src="<?= ROOT ?>/assets/images/video-icon.png" alt="">
                    </div>
                    <img src="<?= ROOT ?>/assets/images/video-screenshot.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section">

    <div
        class="swiper-container testimonial-slider swiper-container-fade swiper-container-horizontal swiper-container-wp8-horizontal">
        <div class="swiper-wrapper" style="transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2"
                style="width: 375px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">
                            <figure class="user-avatar">
                                <img src="<?= ROOT ?>/assets/images/user-3.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                            <div class="entry-content">
                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                    injected humour.</p>
                            </div>
                            <div class="entry-footer">
                                <h3 class="testimonial-user">Daniel Idah - <span>Instructor</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                style="width: 375px; transition-duration: 0ms; opacity: 1; transform: translate3d(-375px, 0px, 0px);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                            <figure class="user-avatar">
                                <img src="<?= ROOT ?>/assets/images/user-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                            <div class="entry-content">
                                <p>Together as teachers, students and universities we can help make this education
                                    available for everyone.</p>
                            </div>
                            <div class="entry-footer">
                                <h3 class="testimonial-user">Nelson Ejumdia - <span>Instructor</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                style="width: 375px; transition-duration: 0ms; opacity: 0; transform: translate3d(-750px, 0px, 0px);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                            <figure class="user-avatar">
                                <img src="<?= ROOT ?>/assets/images/user-2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                            <div class="entry-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.</p>
                            </div>
                            <div class="entry-footer">
                                <h3 class="testimonial-user">Onisuru Tejiri - <span>Instructor</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                style="width: 375px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1125px, 0px, 0px);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">
                            <figure class="user-avatar">
                                <img src="<?= ROOT ?>/assets/images/user-3.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                            <div class="entry-content">
                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                    injected humour.</p>
                            </div>
                            <div class="entry-footer">
                                <h3 class="testimonial-user">James Stephens - <span>Student</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"
                style="width: 375px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1500px, 0px, 0px);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                            <figure class="user-avatar">
                                <img src="<?= ROOT ?>/assets/images/user-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                            <div class="entry-content">
                                <p>Together as teachers, students and universities we can help make this education
                                    available for everyone.</p>
                            </div>
                            <div class="entry-footer">
                                <h3 class="testimonial-user">Russell Stephens - <span>Student</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div
                        class="swiper-pagination position-relative flex justify-content-center align-items-center swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                            class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-courses vertical-column courses-wrap">
    <div class="container">
        <div class="row mx-m-25">
            <div class="col-12 px-25">
                <header class="heading flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Featured Courses</h2>
                    <nav class="courses-menu mt-3 mt-lg-0">
                        <ul class="flex flex-wrap justify-content-md-end align-items-center">
                            <li class="active"><a href="#">All</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Graphics Design</a></li>
                            <li><a href="#">Mobile App Development</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/1.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">The Complete Android Developer Course</a></h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin </a></div>
                                <div class="course-date">July 21, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                $45 <span class="price-drop">$68</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/2.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">The Ultimate Drawing Course Beginner to Advanced</a>
                            </h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin</a></div>
                                <div class="course-date">Mar 14, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="free-cost">Free</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/3.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">The Complete Digital Marketing Course</a></h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin</a></div>
                                <div class="course-date">Dec 18, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                $55 <span class="price-drop">$78</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/4.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">The Unreal Engine Developer Course</a></h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin</a></div>
                                <div class="course-date">Oct 17, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="free-cost">Free</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/5.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">Progressive Web Apps (PWA) - The Complete Guide</a></h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin</a></div>
                                <div class="course-date">Sep 14, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                $38 <span class="price-drop">$48</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-25">
                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/6.jpg" alt=""></a>
                    </figure>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">Cryptocurrency Investment Course 2018</a></h2>
                            <div class="entry-meta flex align-items-center">
                                <div class="course-author"><a href="#">Admin</a></div>
                                <div class="course-date">Nov 06, 2018</div>
                            </div>
                        </header>
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="free-cost">Free</span>
                            </div>
                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="course-ratings-count">(4 votes)</span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-12 px-25 flex justify-content-center">
                <a class="btn" href="index?page=courses">view all courses</a>
            </div>
        </div>
    </div>
</section>

<section class="latest-news-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="heading flex justify-content-between align-items-center">
                    <h2 class="entry-title">Latest News &amp; Events</h2>
                </header>
            </div>
            <div class="col-12 col-lg-6">
                <div class="featured-event-content">
                    <figure class="event-thumbnail position-relative m-0">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/event-1.jpg" alt=""></a>
                        <div class="posted-date position-absolute">
                            <div class="day">23</div>
                            <div class="month">mar</div>
                        </div>
                    </figure>
                    <header class="entry-header flex flex-wrap align-items-center">
                        <h2 class="entry-title"><a href="#">The Complete Financial Analyst Training &amp; Investing
                                Course</a></h2>
                        <div class="event-location"><i class="fa fa-map-marker"></i>40 Baria Sreet 133/2 NewYork City,
                            US</div>
                        <div class="event-duration"><i class="fa fa-calendar"></i>10 Dec - 12 dec</div>
                    </header>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                <div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                    <figure class="event-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/event-2.jpg" alt=""></a>
                    </figure>
                    <div class="event-content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <i class="fa fa-calendar"></i> 22 Mar 2018
                            </div>
                            <h2 class="entry-title"><a href="#">Personalized online learning experience</a></h2>
                            <div class="entry-meta flex flex-wrap align-items-center">
                                <div class="post-author"><a href="#">Admin </a></div>
                                <div class="post-comments">02 Comments </div>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                        </div>
                    </div>
                </div>
                <div class="event-content flex flex-wrap justify-content-between align-content-lg-stretch">
                    <figure class="event-thumbnail">
                        <a href="#"><img src="<?= ROOT ?>/assets/images/event-3.jpg" alt=""></a>
                    </figure>
                    <div class="event-content-wrap">
                        <header class="entry-header">
                            <div class="posted-date">
                                <i class="fa fa-calendar"></i> 22 Mar 2018
                            </div>
                            <h2 class="entry-title"><a href="#">Which investment project should my company choose?</a>
                            </h2>
                            <div class="entry-meta flex flex-wrap align-items-center">
                                <div class="post-author"><a href="#">Admin </a></div>
                                <div class="post-comments">02 Comments </div>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-gallery">
    <div class="gallery-wrap flex flex-wrap" style="position: relative; height: 95px;">
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 0px; top: 0px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/a.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 192px; top: 0px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/b.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid2x2" style="position: absolute; left: 0px; top: 10px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/c.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 0px; top: 22px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/d.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 192px; top: 22px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/e.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid2x1" style="position: absolute; left: 0px; top: 32px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/g.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid2x1" style="position: absolute; left: 192px; top: 32px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/h.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 0px; top: 43px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/i.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid2x2 " style="position: absolute; left: 0px; top: 53px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/j.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 0px; top: 65px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/k.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 192px; top: 65px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/l.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid2x1" style="position: absolute; left: 0px; top: 75px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/m.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid3x1" style="position: absolute; left: 192px; top: 75px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/n.jpg" alt=""></a>
        </div>
        <div class="gallery-grid gallery-grid1x1" style="position: absolute; left: 192px; top: 85px;">
            <a href="#"><img src="<?= ROOT ?>/assets/images/o.jpg" alt=""></a>
        </div>
    </div>
</section>

<div class="clients-logo">
    <div class="container">
        <div class="row">
            <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                <div class="logo-wrap">
                    <img src="<?= ROOT ?>/assets/images/logo-1.png" alt="">
                </div>
                <div class="logo-wrap">
                    <img src="<?= ROOT ?>/assets/images/logo-2.png" alt="">
                </div>
                <div class="logo-wrap">
                    <img src="<?= ROOT ?>/assets/images/logo-3.png" alt="">
                </div>
                <div class="logo-wrap">
                    <img src="<?= ROOT ?>/assets/images/logo-4.png" alt="">
                </div>
                <div class="logo-wrap">
                    <img src="<?= ROOT ?>/assets/images/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>




<?php

$this->view('../includes/footer');
$this->view('../includes/scripts');


?>