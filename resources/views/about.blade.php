@extends('layouts.layout')
@section('content')

    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background:linear-gradient(289deg, #890c2578, #28282863), url(assets/images/banner/main.png); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about</li>
                        </ul>
                        <h2 class="section-title">Welcome to Shri K. J. Polytechnic, Bharuch</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">About Us</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            Shri K. J. Polytechnic, located in the heart of Bharuch, Gujarat, is a premier educational institution committed to providing high-quality technical education and shaping the future of aspiring engineers. Established with the aim of nurturing talent and fostering innovation, the college has grown into one of the most respected polytechnics in Gujarat.
                            <br><br>
                            At KJP, we believe that technical education is the foundation for a brighter tomorrow. With our state-of-the-art infrastructure, dedicated faculty, and comprehensive curriculum, we offer students an environment that is conducive to academic excellence and holistic development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="assets/images/campus/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">20,000</h3>
                                <img src="assets/images/icon/11.svg" alt="">
                            </div>
                            <div class="desc">
                                <p>Total Graduates</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">30-50</h3>
                                <img src="assets/images/icon/12.svg" alt="">
                            </div>
                            <div class="desc">
                                <p>Faculty & Staff</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">2000</h3>
                                <img src="assets/images/icon/13.svg" alt="">
                            </div>
                            <div class="desc">
                                <p>Alumni Network</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-12 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">The History of Shri K. J. Polytechnic</h4>
                        <p>
                            Shri K. J. Polytechnic, established in [insert year], has a rich history of providing high-quality technical education and empowering students to excel in their careers. Situated in the industrial hub of Bharuch, Gujarat, the institution has played a pivotal role in shaping the careers of thousands of engineers and technologists over the years.
                            <span class="d-block mb--30"></span>
                            From its modest beginnings, Shri K. J. Polytechnic quickly established itself as a center of excellence in engineering education. The college began with a small group of dedicated faculty and a handful of diploma programs. However, the demand for quality technical education grew rapidly, and the college expanded its infrastructure, curriculum, and student intake.
                        </p>
                        <h5>Milestones in Growth:</h5>
                        <ul>
                            <li><b>Expansion of Programs :</b>  Over the years, the college introduced several new diploma programs in various branches of engineering, including Mechanical, Civil, Electrical, and Computer Engineering, to meet the evolving needs of industry.</li>

                            <li><b>Infrastructure Development :</b> Shri K. J. Polytechnic has continuously upgraded its campus and facilities, including modern classrooms, specialized laboratories, libraries, and a student-friendly campus environment.</li>

                            <li><b>Industry Collaborations :</b> In keeping with the changing educational landscape, the college forged partnerships with leading industries, ensuring that students receive practical exposure and are prepared for the demands of the workplace.</li>
                        </ul>
                        <h4 class="rts-section-title mt--40 mb--40">The Present Day</h4>
                        <p>
                            Today, Shri K. J. Polytechnic stands as one of the premier institutions for technical education in Gujarat. With a team of experienced faculty, a state-of-the-art campus, and a diverse student body, the college continues to strive for excellence. The institution is proud of its legacy and looks forward to continuing its mission of providing accessible, affordable, and quality education to future generations of engineers.
                        </p>
                        <h4 class="rts-section-title mt--40 mb--40">Future Aspirations</h4>
                        <p>
                            As we look to the future, Shri K. J. Polytechnic remains committed to academic excellence, student development, and industry partnerships. With plans for new programs, advanced research initiatives, and global collaborations, the college is set to continue its journey of empowering students to become leaders in their respective fields.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->


    <div class="rts-funfact rts-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">90%</h2>
                            <p>Graduation success rate</p>
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


    <!-- mission -->
    <section class="rts-mission pb--85">
        <div class="container">
            <div class="row justify-content-center rt-center">
                <div class="rts-section mb--50">
                    <h2 class="rts-section-title">Mission and Values</h2>
                    <p class="mt--30">At Shri K. J. Polytechnic, our mission is to provide an environment that fosters creativity, encourages innovation, and empowers students to pursue their dreams in the fields of engineering and technology. We are committed to academic excellence, industry engagement, and the holistic development of our students. Our core values guide us as we shape the leaders of tomorrow and make a positive impact on society.</p>
                </div>
            </div>
            <!-- mission -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-timeline-section">
                        <div class="rts-timeline-content">
                            <div class="left-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Diversity</h5>
                                    <p> We embrace diversity in all its forms. At Shri K. J. Polytechnic, we believe that a diverse and inclusive environment enhances the learning experience. </p>
                                    <img src="assets/images/about/diversity.png" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Innovation</h5>
                                    <p> Innovation drives progress, and at Shri K. J. Polytechnic, we encourage our students and faculty to think beyond traditional boundaries.</p>
                                    <img src="assets/images/about/inovation.png" alt="">
                                </div>
                            </div>
                            <div class="separator">
                            </div>
                            <div class="right-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Excellence</h5>
                                    <p>Excellence is the cornerstone of everything we do at Shri K. J. Polytechnic. We strive for the highest standards of quality in teaching, learning, and research. </p>
                                    <img src="assets/images/about/excellence.png" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Academic Excellence</h5>
                                    <p> Academic excellence is at the heart of our mission. Shri K. J. Polytechnic is dedicated to providing a high-quality education that meets the evolving needs of the industry and society.</p>
                                    <img src="assets/images/about/academic.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission end-->

    <!-- student feedback -->
    <section class="feedback  pb--85 pt--85">
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
    <!-- brand slider end -->

@endsection
