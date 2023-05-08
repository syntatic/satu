@extends('layouts.index')
@section('container')
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>

    <!--====== Header Start ======-->
    <header class="site-header sticky-header transparent-header topbar-transparent">


        <div class="mobile-menu-panel">
            <div class="panel-logo">
                <a href="index.html"><img src="assets/img/logo-white.png" alt="Funden"></a>
            </div>
            <ul class="panel-menu">
                <li class="current">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index-2.html">Home Two</a></li>
                    </ul>
                </li>
                <li>
                    <a href="project-1.html">Project</a>
                    <ul class="submenu">
                        <li><a href="project-1.html">Project One</a></li>
                        <li><a href="project-2.html">Project Two</a></li>
                        <li><a href="project-3.html">Project Three</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="events.html">Events</a>
                </li>
                <li>
                    <a href="news-standard.html">News</a>
                    <ul class="submenu">
                        <li><a href="news-standard.html">News Standard</a></li>
                        <li><a href="news-details.html">News Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="company-overview.html">Company Overview</a></li>
                        <li><a href="team-member.html">Team Member</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="panel-extra">
                <a href="#" class="main-btn btn-white">
                    Donate Now <i class="far fa-arrow-right"></i>
                </a>
            </div>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </header>
    <!--====== Header End ======-->

    <!--====== Hero Area Start ======-->
    <section class="hero-area-one">
        <div class="hero-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <span class="tagline wow fadeInUp" data-wow-delay="0.3s">Crowdfounding Agency</span>
                        <h1 class="title wow fadeInUp" data-wow-delay="0.4s">Raise Hand to Promote Best Products</h1>
                        <a href="project-1.html" class="main-btn wow fadeInUp" data-wow-delay="0.5s">
                            Explore Projects <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="hero-line-one">
                    <img src="assets/img/hero/hero-line.png" alt="Line">
                </div>
                <div class="hero-line-two">
                    <img src="assets/img/hero/hero-line-2.png" alt="Line">
                </div>
                <div class="dot-one"></div>
                <div class="dot-two"></div>
            </div>
        </div>
        <div class="hero-images">
            <div class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
                <img src="assets/img/hero/hero-one-small.jpg" alt="Image">
            </div>
            <div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
                <img src="assets/img/hero/hero-one-big.jpg" alt="Image">
            </div>
            <div class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
                <img src="assets/img/hero/hero-one-small-2.jpg" alt="Image">
            </div>
        </div>
    </section>
    <!--====== Hero Area End ======-->

    <!--====== Categories Section Start ======-->
    <section class="popular-categories section-gap">
        <div class="container">
            <div class="categories-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> what we do
                                <span class="heading-shadow-text">Category</span>
                            </span>
                            <h2 class="title">Popular Categories</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="project-1.html" class="main-btn mb-30">View All Category <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center fancy-icon-boxes">
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-reading-book"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Education</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-stethoscope"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Medical & Health</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-tshirt-1"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Clothes</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-video-camera"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Video & Films</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-project-management"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Technology</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-salad"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Organic Foods</a></h4>
                            <p>School, Collage & University</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Categories Section End ======-->

    <!--====== About Section Start ======-->
    <section class="about-section-one">
        <div class="container">
            <div class="row align-items-center justify-content-lg-start justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="about-img">
                        <img src="assets/img/about/about-one.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-10 offset-xl-1">
                    <div class="about-text mt-md-70 mb-md-50">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> who we are
                                <span class="heading-shadow-text">Abouit Us</span>
                            </span>
                            <h2 class="title">Why Choose Us</h2>
                        </div>
                        <p>
                            Sedut perspiciatis unde omnis iste natus voluptatem accusantium dolore dantiumy totam rem apeam,
                            eaque ipsa quaventore veritatis quasi architecto beatae.
                        </p>
                        <div class="author-note wow fadeInUp">
                            <ul>
                                <li><i class="far fa-check"></i> Non-Profite Crowdfunding Agency</li>
                                <li><i class="far fa-check"></i> We're Successful Institute </li>
                            </ul>
                            <div class="author-info">
                                <div class="author-img">
                                    <img src="assets/img/author-thumbs/01.jpg" alt="Image">
                                </div>
                                <h5 class="name">Michel H. Heart</h5>
                                <span class="title">CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <!--====== Project Section Start ======-->
    <section class="project-section project-section-extra-gap secondary-bg">
        <div class="container-fluid fluid-extra-padding">
            <div class="common-heading text-center color-version-white mb-60">
                <span class="tagline">
                    <i class="fas fa-plus"></i> Popular Projects
                    <span class="heading-shadow-text">Our Projects</span>
                </span>
                <h2 class="title">Explore Our Projects</h2>
            </div>
            <div class="row project-slider-one project-items project-style-one no-shadow">
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-01.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Video & Movies</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Best Romantic & Action English Movie Release in 2022.</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">79%</span>
                                </div>
                                <div class="stats-bar" data-value="79">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-02.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Educations</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Needs Close Up Students Class Room In University</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">87%</span>
                                </div>
                                <div class="stats-bar" data-value="87">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-03.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Technology</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Original Shinecon VR Pro Virtual Reality 3D Glasses
                                    VRBOX</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">85%</span>
                                </div>
                                <div class="stats-bar" data-value="85">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-04.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Clothes</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Fundraising For The People And Causes You Care About</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">83%</span>
                                </div>
                                <div class="stats-bar" data-value="83">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-05.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Covid -19</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">COVID-19 Vaccine Have Already Begun Introduced Countries</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">93%</span>
                                </div>
                                <div class="stats-bar" data-value="93">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-06.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Business</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Mobile First Is Just Not Goodies Enough Meet Journey</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">70%</span>
                                </div>
                                <div class="stats-bar" data-value="70">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-07.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Technology</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Fundraising For The People And Causes You Care About</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">81%</span>
                                </div>
                                <div class="stats-bar" data-value="81">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-08.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Mobile Kits</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">COVID-19 Vaccine Have Already Begun Introduced Countries</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">73%</span>
                                </div>
                                <div class="stats-bar" data-value="73">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item">
                        <div class="thumb" style="background-image: url(assets/img/project/project-grid-09.jpg);"></div>
                        <div class="content">
                            <div class="cats">
                                <a href="#">Business</a>
                            </div>
                            <div class="author">
                                <img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
                                <a href="#">James W. Barrows</a>
                            </div>
                            <h5 class="title">
                                <a href="project-details.html">Mobile First Is Just Not Goodies Enough Meet Journey</a>
                            </h5>
                            <div class="project-stats">
                                <div class="stats-value">
                                    <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                    <span class="stats-percentage">75%</span>
                                </div>
                                <div class="stats-bar" data-value="75">
                                    <div class="bar-line"></div>
                                </div>
                            </div>
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Project Section End ======-->

    <!--====== Counter Area Start ======-->
    <section class="counter-section-one mt-negative">
        <div class="container primary-bg">
            <div class="row counter-boxes justify-content-xl-between justify-content-center">
                <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                    <div class="counter-box mb-40 icon-left">
                        <div class="icon white-color">
                            <i class="flaticon-crowdfunding"></i>
                        </div>
                        <div class="content white-color">
                            <div class="count-wrap">
                                <span class="count">3598</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">We’ve Project Complate</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                    <div class="counter-box mb-40 icon-left">
                        <div class="icon white-color">
                            <i class="flaticon-crowdfunding"></i>
                        </div>
                        <div class="content white-color">
                            <div class="count-wrap">
                                <span class="count">9634</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">Global Partners</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                    <div class="counter-box mb-40 icon-left">
                        <div class="icon white-color">
                            <i class="flaticon-crowdfunding"></i>
                        </div>
                        <div class="content white-color">
                            <div class="count-wrap">
                                <span class="count">8565</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">Awards Winning</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                    <div class="counter-box mb-40 icon-left">
                        <div class="icon white-color">
                            <i class="flaticon-crowdfunding"></i>
                        </div>
                        <div class="content white-color">
                            <div class="count-wrap">
                                <span class="count">4756</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">Active Volunteer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Area End ======-->

    <!--====== Testimonials Start ======-->
    <section class="testimonials-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
                    <div class="testimonials-content mb-lg-50">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> clients Feedback
                                <span class="heading-shadow-text">Testimonials</span>
                            </span>
                            <h2 class="title">Why Choose Us</h2>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan
                            totam rem aperiam eaque ipsa quae abillo inventore verit quasi architecto beatae vitae dicta
                            sunt
                        </p>
                        <a href="testimonial.html" class="main-btn mt-35">View All Reviews <i
                                class="far fa-arrow-right"></i></a>

                        <div class="testimonial-author-boxes wow fadeInUp" data-wow-delay="0.2s">
                            <h6>Most Popular Clients</h6>
                            <ul class="author-images">
                                <li data-tooltip="true" data-placement="top" data-original-title="Donald L. Juarez">
                                    <a href="#"><img src="assets/img/author-thumbs/01.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="Evan A. Ethridge">
                                    <a href="#"><img src="assets/img/author-thumbs/02.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="Donald L. Lewis">
                                    <a href="#"><img src="assets/img/author-thumbs/03.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="Marcus L. Duncan">
                                    <a href="#"><img src="assets/img/author-thumbs/04.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="Evan A. Ethridge">
                                    <a href="#"><img src="assets/img/author-thumbs/05.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="M. Jon Doe">
                                    <a href="#"><img src="assets/img/author-thumbs/06.jpg" alt="user one"></a>
                                </li>
                                <li data-tooltip="true" data-placement="top" data-original-title="More">
                                    <a href="#" class="more-icon"><i class="far fa-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonial-boxes square-shape">
                        <div class="row  justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-10">
                                <div class="testimonial-box-one wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                        </div>
                                        <div>
                                            <h5 class="name">Howard A. Guest</h5>
                                            <p class="position">Web Developer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-desc">
                                        Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae conseqatur
                                        veillum dolorem
                                    </p>
                                    <div class="rating-wrap">
                                        <span>Rating</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
                                        </div>
                                        <div>
                                            <h5 class="name">Howard A. Guest</h5>
                                            <p class="position">Web Developer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-desc">
                                        Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae conseqatur
                                        veillum dolorem
                                    </p>
                                    <div class="rating-wrap">
                                        <span>Rating</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-10">
                                <div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
                                        </div>
                                        <div>
                                            <h5 class="name">Howard A. Guest</h5>
                                            <p class="position">Web Developer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-desc">
                                        Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae conseqatur
                                        veillum dolorem
                                    </p>
                                    <div class="rating-wrap">
                                        <span>Rating</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="assets/img/author-thumbs/04.jpg" alt="Thumb">
                                        </div>
                                        <div>
                                            <h5 class="name">Howard A. Guest</h5>
                                            <p class="position">Web Developer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-desc">
                                        Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae conseqatur
                                        veillum dolorem
                                    </p>
                                    <div class="rating-wrap">
                                        <span>Rating</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Testimonials End ======-->

    <!--====== Emergency Project & CTA Start ======-->
    <section class="emergency-project-with-cta">
        <div class="container">
            <!-- Call to Action -->
            <div class="cta-box cta-double-content" style="background-image: url(assets/img/cta/01.jpg);">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-9">
                        <div class="content">
                            <h2 class="cta-title">Get Funding And Support</h2>
                            <p>Sed perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudan
                                totamrem aperiam eaque quae abille</p>
                            <a href="events.html" class="main-btn">Start a Funden <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-1 cta-double-content-gap"></div>
                    <div class="col-xl-4 col-lg-5 col-md-9">
                        <div class="content">
                            <h2 class="cta-title">Access Data And Insights</h2>
                            <p>Sed perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudan
                                totamrem aperiam eaque quae abille</p>
                            <a href="events.html" class="main-btn">Start a Funden <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="emergency-project-slider">
            <div class="container">
                <div class="common-heading text-center mb-60">
                    <span class="tagline">
                        <i class="fas fa-plus"></i> Donate Projects
                        <span class="heading-shadow-text">Donate</span>
                    </span>
                    <h2 class="title">Emergency Needed</h2>
                </div>
                <div class="row project-slider-two project-items project-style-four">
                    <div class="col">
                        <div class="project-item">
                            <div class="thumb" style="background-image: url(assets/img/project/project-slider-01.jpg);">
                            </div>
                            <div class="content">
                                <div class="cats">
                                    <a href="#">Covid -19</a>
                                </div>

                                <div class="author">
                                    <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                    <a href="#">James W. Barrows</a>
                                </div>

                                <h5 class="title">
                                    <a href="project-details.html">Fundraising For The People And Causes You Car About</a>
                                </h5>
                                <div class="project-stats">
                                    <div class="stats-value">
                                        <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                        <span class="stats-percentage">83%</span>
                                    </div>
                                    <div class="stats-bar" data-value="90">
                                        <div class="bar-line"></div>
                                    </div>
                                </div>
                                <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="project-item">
                            <div class="thumb" style="background-image: url(assets/img/project/project-slider-02.jpg);">
                            </div>
                            <div class="content">
                                <div class="cats">
                                    <a href="#">Covid -19</a>
                                </div>

                                <div class="author">
                                    <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                    <a href="#">James W. Barrows</a>
                                </div>

                                <h5 class="title">
                                    <a href="project-details.html">Fundraising For The People And Causes You Car About</a>
                                </h5>
                                <div class="project-stats">
                                    <div class="stats-value">
                                        <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                        <span class="stats-percentage">83%</span>
                                    </div>
                                    <div class="stats-bar" data-value="90">
                                        <div class="bar-line"></div>
                                    </div>
                                </div>
                                <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="project-item">
                            <div class="thumb" style="background-image: url(assets/img/project/project-slider-01.jpg);">
                            </div>
                            <div class="content">
                                <div class="cats">
                                    <a href="#">Covid -19</a>
                                </div>

                                <div class="author">
                                    <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                    <a href="#">James W. Barrows</a>
                                </div>

                                <h5 class="title">
                                    <a href="project-details.html">Fundraising For The People And Causes You Car About</a>
                                </h5>
                                <div class="project-stats">
                                    <div class="stats-value">
                                        <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                        <span class="stats-percentage">83%</span>
                                    </div>
                                    <div class="stats-bar" data-value="90">
                                        <div class="bar-line"></div>
                                    </div>
                                </div>
                                <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="project-item">
                            <div class="thumb" style="background-image: url(assets/img/project/project-slider-02.jpg);">
                            </div>
                            <div class="content">
                                <div class="cats">
                                    <a href="#">Covid -19</a>
                                </div>

                                <div class="author">
                                    <img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
                                    <a href="#">James W. Barrows</a>
                                </div>

                                <h5 class="title">
                                    <a href="project-details.html">Fundraising For The People And Causes You Car About</a>
                                </h5>
                                <div class="project-stats">
                                    <div class="stats-value">
                                        <span class="value-title">Raised of <span class="value">$59,689</span></span>
                                        <span class="stats-percentage">83%</span>
                                    </div>
                                    <div class="stats-bar" data-value="90">
                                        <div class="bar-line"></div>
                                    </div>
                                </div>
                                <span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Emergency Project & CTA End ======-->

    <!--====== Partners Section Start ======-->
    <section class="partners-section section-gap section-border-bottom">
        <div class="container">
            <div class="common-heading mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i> Our Partners
                    <span class="heading-shadow-text">Partners</span>
                </span>
                <h2 class="title">Trusted Partners</h2>
            </div>
            <div class="row partners-logos-one">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/01.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/02.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/03.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/04.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/05.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/06.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/07.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/img/partners/08.png" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Partners Section End ======-->

    <!--====== Latest News Start ======-->
    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="common-heading text-center mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i> Latest News & Blog
                    <span class="heading-shadow-text">News Blog</span>
                </span>
                <h2 class="title">Get Every Single Update</h2>
            </div>
            <div class="row justify-content-center latest-blog-posts style-one">
                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="latest-post-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/01.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 February 2021</a>
                            <h6 class="title">
                                <a href="news-details.html">Standing Out From Crowds mproving Mobile Experience</a>
                            </h6>
                            <a href="news-details.html" class="post-link">Read More <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="latest-post-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/02.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 February 2021</a>
                            <h6 class="title">
                                <a href="news-details.html">Five Rules Of App Localization China Money Dating And App
                                    Store</a>
                            </h6>
                            <a href="news-details.html" class="post-link">Read More <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="latest-post-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/03.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 February 2021</a>
                            <h6 class="title">
                                <a href="news-details.html">How To Use Underlined Text Improve User Experience</a>
                            </h6>
                            <a href="news-details.html" class="post-link">Read More <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
