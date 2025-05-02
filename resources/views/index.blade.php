@extends('layouts.layout')
@section('content')
  <!-- header banner -->
  <div class="banner v__2">
    <div class="banner__wrapper">
        <div class="swiper  swiper-data" data-swiper='{
                    "slidesPerView":1,
                    "effect": "fade",
                    "loop": true,
                    "speed": 1000,
                    "autoplay":{
                        "delay":"7000"
            }}'>
            <div class="swiper-wrapper">
                <!-- single slides -->
                <div class="swiper-slide">
                    <div class="banner__wrapper--bg" style="background:linear-gradient(#3d000c66, rgb(0 0 0 / 0%)), url(assets/images/banner/main.png); background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner__slides--container banner__height">
                                        <div class="banner__slides--content">
                                            <!-- <div class="banner__slides--content--sub">
                                                <img src="assets/images/icon/e-cap.svg" alt="cap"> knowledge meets
                                                innovation
                                            </div> -->
                                            <h1 class="banner__slides--content--title">
                                                Empowering Technical Minds Since 1961
                                            </h1>
                                            <a href="{{ route('about') }}" class="rts-theme-btn btn-arrow">View Our Program
                                                <span><i class="fa-regular fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slides end -->
                <!-- single slides -->
                <div class="swiper-slide">
                    <div class="banner__wrapper--bg" style="background:linear-gradient(#3d000c66, rgb(0 0 0 / 0%)), url(assets/images/banner/main-2.png); background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner__slides--container banner__height">
                                        <div class="banner__slides--content">
                                            <!-- <div class="banner__slides--content--sub">
                                                <img src="assets/images/icon/e-cap.svg" alt="cap"> knowledge meets
                                                innovation
                                            </div> -->
                                            <h1 class="banner__slides--content--title">
                                                Empowering Technical Minds Since 1961
                                            </h1>
                                            <a href="{{ route('about') }}" class="rts-theme-btn btn-arrow">View Our Program
                                                <span><i class="fa-regular fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slides end -->
            </div>
        </div>
        <div class="banner__slides--navigation">
            <div class="banner__slides--navigation--single">
                <h5 class="nav__title">Undergraduate</h5>
                <a href="{{ route('contact') }}" class="nav__description">Browse the undergraduate
                    degrees</a>
            </div>
            <div class="banner__slides--navigation--single">
                <h5 class="nav__title">Graduate</h5>
                <a href="{{ route('contact') }}" class="nav__description">Browse the graduate degrees</a>
            </div>
        </div>
    </div>
</div>
<!-- header banner end -->

<!-- about us -->
<section class="about v__2 pt--120 pb--80">
    <div class="container">
        <div class="row justify-content-md-center g-5">
            <!-- <div class="col-lg-6 col-md-9">
                <div class="about__left--content">
                    <div class="about__left--content--left">
                        <img src="assets/images/about/about__h2-1.png" alt="">
                    </div>
                    <div class="about__left--content--center">
                        <div class="rts__circle v__1">
                            <svg class="spinner" viewBox="0 0 100 100">
                                <defs>
                                    <path id="circle" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#circle">Unipix University * Estd. 1971 * Explore Future *
                                    </textPath>
                                </text>
                            </svg>
                            <div class="rts__circle--icon">
                                <i class="fa-light fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="about__left--content--right">
                        <img src="assets/images/about/about__h2-2.png" alt="">
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 col-md-12 text-center">
                <div class="about__right--content">
                    <div class="about__right--content--sub justify-content-center">
                        <img src="assets/images/icon/e-cap-pix.svg" alt="cap">
                        Building Foundations for a Brighter Technical Tomorrow
                    </div>
                    <h2 class="about__right--content--title">About Us</h2>

                    <p class="about__right--content--description">Shri K. J. Polytechnic, Bharuch is a premier government institute dedicated to shaping the future of engineering and technology. With a legacy of excellence, industry-oriented diploma programs, and a vibrant campus life, we nurture innovation, discipline, and technical expertise in every student.</p>

                    <p class="about__right--content--description">Established in 1961, Shri K. J. Polytechnic, Bharuch stands as a beacon of technical education in Gujarat. As a government-run institution affiliated with Gujarat Technological University and approved by AICTE, our mission is to deliver quality, affordable, and industry-relevant diploma education to aspiring engineers.</p>

                    <p class="about__right--content--description">Spread across 26 acres, the institute offers state-of-the-art infrastructure, well-equipped laboratories, experienced faculty, and a learning environment that fosters innovation and problem-solving. We offer a range of diploma programs including Civil, Mechanical, Electrical, Computer, Chemical, Environmental Engineering, and more. With a strong focus on academic excellence, practical exposure, and career development, we aim to empower students with the skills and knowledge required to thrive in the ever-evolving world of technology.</p>

                    <div class="about__right--content--vision justify-content-center">
                        <div class="mision">
                            <div class="mision__icon">
                                <img src="assets/images/icon/mission.svg" alt="">
                            </div>
                            <div class="mision__title">
                                Our Mission
                                Statement
                            </div>
                        </div>
                        <div class="vision">
                            <div class="vision__icon">
                                <img src="assets/images/icon/vission.svg" alt="">
                            </div>
                            <div class="vision__title">
                                Our Vision
                                Achievement
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="rts-theme-btn btn-arrow">View Our Program
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us end -->
<!-- fun fact -->

<div class="rts-funfact v__2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="rts-funfact-wrapper">
                    <div class="single-cta-item">
                        <h2 class="single-cta-item__title">90%</h2>
                        <p>post-graduation success rate</p>
                    </div>
                    <div class="single-cta-item">
                        <h2 class="single-cta-item__title">Top 10</h2>
                        <p>Colleges that Create Futures</p>
                    </div>
                    <div class="single-cta-item">
                        <h2 class="single-cta-item__title">No. 1</h2>
                        <p>in the nation for materials R&D</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fun fact end -->
<!-- academic program -->
<section class="program rts-section-padding">
    <div class="container">
        <div class="row rt-center">
            <div class="col-sm-12">
                <div class="rts__section--wrapper v__5">
                    <h2 class="rts__section--title">Diploma Programs Offered</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center g-0">
            <div class="col-lg-4 col-md-10">
                <div class="program__single--item">
                    <div class="program__single--item--bg">
                        <img src="assets/images/program/program__bg.jpg" alt="">
                    </div>
                    <!-- <h5 class="program__single--item--title">undergraduate</h5> -->

                    <ul class="program__single--item--list">
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Civil Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Chemical Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-10">
                <div class="program__single--item v__2">
                    <div class="program__single--item--bg">
                        <img src="assets/images/program/program__bg.jpg" alt="">
                    </div>
                    <!-- <h5 class="program__single--item--title">graduate</h5> -->

                    <ul class="program__single--item--list">
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Mechanical Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Computer Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Computer Aided Costume Design & Dress Making (CDDM)
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-10">
                <div class="program__single--item">
                    <div class="program__single--item--bg">
                        <img src="assets/images/program/program__bg.jpg" alt="">
                    </div>
                    <!-- <h5 class="program__single--item--title">Lifelong Learning</h5> -->

                    <ul class="program__single--item--list">
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Electrical Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li class="program__single--item--list--item">
                            <a href="#" class="link__list">Environmental Engineering
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- academic program end -->
<!-- campus life -->
<section class="campus rts__primary__bg-2 rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts__section--wrapper v__6">
                <p class="rts__section--wrapper--description">
                    At Shri K. J. Polytechnic, education goes beyond classrooms. Our 26-acre campus offers a lively, inclusive, and inspiring environment where students grow academically, socially, and personally.
                </p>
                <h2 class="rts__section--wrapper--title">
                    Campus <span> Life</span>
                </h2>
            </div>
        </div>
        <!-- content -->
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="campus__single--item">
                    <a href="#">
                        <div class="campus__single--item--thumb">
                            <img src="assets/images/campus/library.png" alt="">
                        </div>
                    </a>
                    <h5 class="campus__single--item--title mb-3"><a href="#">Extensive Library <span><i class="fa-light fa-arrow-right"></i></span></a></h5>
                    <p class="text-light">with 5,000+ technical books and book bank facility</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="campus__single--item">
                    <a href="#">
                        <div class="campus__single--item--thumb">
                            <img src="assets/images/campus/lab.png" alt="">
                        </div>
                    </a>
                    <h5 class="campus__single--item--title mb-3"><a href="#">Modern Computer Labs <span><i class="fa-light fa-arrow-right"></i></span></a></h5>
                    <p class="text-light">with high-speed internet and digital learning tools</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="campus__single--item">
                    <a href="#">
                        <div class="campus__single--item--thumb">
                            <img src="assets/images/campus/faculty.png" alt="">
                        </div>
                    </a>
                    <h5 class="campus__single--item--title mb-3"><a href="#">Supportive Faculty <span><i class="fa-light fa-arrow-right"></i></span></a></h5>
                    <p class="text-light">and student counseling services</p>
                </div>
            </div>
        </div>
    </div>
    <!-- shape area -->
    <div class="rts__shape">
        <img src="assets/images/icon/note_khata.svg" class="rts__shape--1" alt="">
        <img src="assets/images/icon/book.svg" class="rts__shape--2" alt="">
        <img src="assets/images/icon/compas_scale.svg" class="rts__shape--3" alt="">
    </div>
</section>
<!-- campus life end -->


<!-- scholarship appication -->
<section class="rts-scholarship rts-scholarship-bg rts-section-height">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="rts-scholarship-info">
                    <h2 class="rts-section-title">Scholarships and Financial Aid</h2>
                    <p class="mb--50">At Shri K. J. Polytechnic, Bharuch, we believe that financial limitations should never be a barrier to quality education. As a government polytechnic, we offer affordable tuition fees and facilitate a range of scholarships and financial aid schemes for eligible students.</p>
                    <p class="mb--50">Students can apply for scholarships through the official state portal or National Scholarship Portal (NSP). The college also assists students during the application process to ensure timely submission and approvals.</p>
                    <a href="#" class="rts-theme-btn btn-arrow">Know More<span><i class="fa-thin fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- scholarship appication end -->

<!-- student feedback -->
<section class="feedback rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="rts__section--wrapper v__9">
                    <h2 class="rts__section--title">My Students Feedback</h2>
                    <p class="rts__section--description">You'll find something to spark your curiosity and enhance</p>
                </div>
            </div>
        </div>
        <!-- feedback slider -->
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__testimonial--active swiper swiper-data" data-swiper='{
                    "slidesPerView":3,
                    "loop": true,
                    "speed": 1000,
                    "pagination":{
                        "el":".rts__pagination",
                        "clickable": true
                    },
                    "autoplay":{
                        "delay":"7000"
                    },
                    "breakpoints":{
                        "320":{
                            "slidesPerView": 1
                        },
                        "575":{
                            "slidesPerView": 1.5
                        },
                        "768":{
                            "slidesPerView": 2
                        },
                        "991":{
                            "slidesPerView": 2.2
                        },
                        "1201":{
                            "slidesPerView": 3
                        }
                    }
                }'>
                    <div class="swiper-wrapper">
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="rts__single--testimonial">
                                <div class="rts__rating--star">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-light fa-star"></i>
                                </div>
                                <p class="rts__single--testimonial--text">
                                    Shri K. J. Polytechnic gave me the perfect launchpad into the engineering world. The practical labs, dedicated faculty, and campus culture helped me grow both technically and personally.
                                </p>
                                <div class="rts__single--testimonial--author">
                                    <!-- <div class="rts__single--testimonial--author--meta">
                                        <div class="rts__author--img">
                                            <img src="assets/images/testimonial/author-1.png" alt="author">
                                        </div>
                                        <div class="rts__author--info">
                                            <h5 class="mb-0">Emma Elizabeth</h5>
                                            <span class="designation">Assistant Teacher</span>
                                        </div>
                                    </div> -->
                                    <div class="rts__single--testimonial--quote">
                                        <img src="assets/images/testimonial/quote.svg" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slide end -->
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="rts__single--testimonial">
                                <div class="rts__rating--star">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-light fa-star"></i>
                                </div>
                                <p class="rts__single--testimonial--text">
                                    Coming from a rural background, I never thought I'd get such a quality education at such low fees. I’m proud to be a part of KJP.
                                </p>
                                <div class="rts__single--testimonial--author">
                                    <!-- <div class="rts__single--testimonial--author--meta">
                                        <div class="rts__author--img">
                                            <img src="assets/images/testimonial/author-2.png" alt="author">
                                        </div>
                                        <div class="rts__author--info">
                                            <h5 class="mb-0">Samantha Willow</h5>
                                            <span class="designation"> Teacher</span>
                                        </div>
                                    </div> -->
                                    <div class="rts__single--testimonial--quote">
                                        <img src="assets/images/testimonial/quote.svg" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slide end -->
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="rts__single--testimonial">
                                <div class="rts__rating--star">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-light fa-star"></i>
                                </div>
                                <p class="rts__single--testimonial--text">
                                    The campus environment, academic support, and extracurriculars make Shri K. J. Polytechnic a complete package for any student wanting to build a solid future.
                                </p>
                                <div class="rts__single--testimonial--author">
                                    <!-- <div class="rts__single--testimonial--author--meta">
                                        <div class="rts__author--img">
                                            <img src="assets/images/testimonial/author-3.png" alt="author">
                                        </div>
                                        <div class="rts__author--info">
                                            <h5 class="mb-0">Zent Ekizie</h5>
                                            <span class="designation">Assistant Teacher</span>
                                        </div>
                                    </div> -->
                                    <div class="rts__single--testimonial--quote">
                                        <img src="assets/images/testimonial/quote.svg" alt="quote">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slide end -->
                    </div>
                    <div class="rts__pagination v__1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- student feedback end -->

<!-- blog -->
<section class="blog pt--120">
    <div class="container">
        <div class="row">
            <div class="rts__section--wrapper v__8">
                <div class="rts__section--wrapper--left">
                    <h2 class="rts__section--title mb--15">Read Our Latest News</h2>
                    <p class="rts__section--description">Stay informed with the latest happenings at Shri K. J. Polytechnic, Bharuch. </p>
                </div>
                <div class="rts__section--link">
                    <a href="#" class="rts-nbg-btn btn-arrow">View All
                        <span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                    </span></a>
                </div>
            </div>
        </div>
        <!-- blog area -->
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <div class="blog__single--item">
                    <a href="#" class="blog__single--item--link">
                        <div class="blog__single--item--thumb">
                            <img src="assets/images/blog/blog.png" alt="">
                        </div>
                    </a>
                    <div class="blog__single--item--meta">
                        <a href="#" class="blog__cat">Campus</a>
                        <h5 class="blog__single--item--title">
                            <a href="#">Campus Placement Drive 2025</a>
                        </h5>
                        <p class="blog__single--item--excerpt">Leading recruiters are hiring our students!</p>

                        <div class="blog__single--item--info">
                            <!-- <div class="author">
                                <span><i class="fa-thin fa-user"></i></span>
                                <a href="#">Jon Adam</a>
                            </div> -->
                            <div class="date">
                                <span><i class="fa-sharp fa-thin fa-calendar"></i></span>
                                <p>April 25, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="blog__single--item">
                    <a href="#" class="blog__single--item--link">
                        <div class="blog__single--item--thumb">
                            <img src="assets/images/blog/blog.png" alt="">
                        </div>
                    </a>
                    <div class="blog__single--item--meta">
                        <a href="#" class="blog__cat">Marketing</a>
                        <h5 class="blog__single--item--title">
                            <a href="#">New Civil Lab Inaugurated </a>
                        </h5>
                        <p class="blog__single--item--excerpt">Hands-on training just got better!</p>

                        <div class="blog__single--item--info">
                            <!-- <div class="author">
                                <span><i class="fa-thin fa-user"></i></span>
                                <a href="#">Jon Adam</a>
                            </div> -->
                            <div class="date">
                                <span><i class="fa-sharp fa-thin fa-calendar"></i></span>
                                <p>April 29, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog end -->
<!-- brand slider -->
<div class="rts-brand v_1 pb--85 pt--85">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <div class="rts-brand-slider swiper swiper-data" data-swiper='{
                "slidesPerView":6,
                "loop": true,
                "autoplay":{
                    "delay":"3000"
                },
                "breakpoints":{
                    "320":{
                        "slidesPerView": 3,
                        "centeredSlides": true
                    },
                    "575":{
                        "slidesPerView": 4,
                        "centeredSlides": true
                    },
                    "768":{
                        "slidesPerView": 5,
                        "centeredSlides": true
                    },
                    "991":{
                        "slidesPerView": 6,
                        "centeredSlides": true
                    },
                    "1201":{
                        "slidesPerView": 6
                    }
                }
        }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/l-t.png" width="70px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/tata.png" height="78px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/gtu.png" width="70px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/nsdc.png" width="70px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/uni-toronto.png" height="78px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/gsdm.png" height="78px" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
