@extends('layout.app')
@section('content')
<div class="theme_slider_1">
    <div class="slider_slick_1">
        <div class="item">
            <div class="slider" style="background-image:url({{asset('assets/images/slider/slider_bg1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slide_content">
                                <h3 class="sub_heading">Call Now: <span><a href="tel:9285811957">+1 (928)
                                            581-1957</a></span></h3>
                                <h2 class="heading">Reliable <span>Locksmith</span> Service Available 24/7</h2>
                                <p class="desc">Serving residential & commercial clients with expert
                                    lockout, rekeying, and emergency locksmith solutions. </p>
                                <div class="slider_button">
                                    <a href="{{route('about')}}" class="button alt">About Us</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="slide_content_img">
                                <img src="{{asset('assets/images/slider/man.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="item">
            <div class="slider" style="background-image:url(assets/images/slider/slider_bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slide_content">
                                <h3 class="sub_heading">Urgent Service: <span>+33 123 456 789</span></h3>
                                <h2 class="heading">Emergency <span>Locksmith</span> service available 24/7</h2>
                                <p class="desc">We offer comprehensive services to the industrial <br /> residential &
                                    automotive sectors. </p>
                                <div class="slider_button">
                                    <a href="#" class="button alt">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="slide_content_img">
                                <img src="assets/images/slider/man1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="services">
    <div class="row">
        <div class="col-lg-4 col-md-6 pd_0">
            <div class="iconbox3 first">
                <div class="iconbox_wrapper">
                    <div class="iconbox_image">
                        <div class="iconbox_icon">
                            <img class="first_icon" src="{{asset('assets/images/services/Emergency-Services.svg')}}" alt="icon">
                            <img class="second_icon" src="{{asset('assets/images/services/Emergency-Services-white.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="iconbox_content">
                        <h3><a href="{{route('about')}}">Emergency & Mobile Locksmith Services</a></h3>
                        <p>We provide fast, reliable, and 24/7 emergency locksmith solutions for homes, businesses, and
                            vehicles—right when you need them most.</p>
                        <div class="read_more">
                            <a href="{{route('about')}}"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pd_0">
            <div class="iconbox3 second">
                <div class="iconbox_wrapper">
                    <div class="iconbox_image">
                        <div class="iconbox_icon">
                            <img class="first_icon" src="{{asset('assets/images/services/lock-install.svg')}}" alt="icon">
                            <img class="second_icon" src="{{asset('assets/images/services/lock-install-white.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="iconbox_content">
                        <h3><a href="{{route('about')}}">Lock Installation & Replacement
                            </a></h3>
                        <p>Whether you need new locks installed or existing ones replaced, our experts ensure secure and
                            professional results for any door or entry point.</p>
                        <div class="read_more">
                            <a href="{{route('about')}}"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pd_0">
            <div class="iconbox3 third">
                <div class="iconbox_wrapper">
                    <div class="iconbox_image">
                        <div class="iconbox_icon">
                            <img class="first_icon" src="{{asset('assets/images/services/loack-rekey.svg')}}" alt="icon">
                            <img class="second_icon" src="{{asset('assets/images/services/loack-rekey-white.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="iconbox_content">
                        <h3><a href="{{route('about')}}">Lock Rekeying & Key Services
                            </a></h3>
                        <p>Lost your keys or moving in? We offer quick and affordable lock rekeying, key duplication,
                            and master key services for added security.</p>
                        <div class="read_more">
                            <a href="{{route('about')}}"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="experience bglayer_1 pd_tp_110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="group_image_holder type_1">
                    <div class="expe_box">
                        <div class="expe_box_inner">
                            <h1>5+</h1>
                            Years of Experience
                        </div>
                    </div>
                    <img class="main_img" src="{{asset('assets/images/1.webp')}}" alt="">
                    <img class="sub_img" src="{{asset('assets/images/2.webp')}}" alt="">
                    <img class="sub_img2" src="{{asset('assets/images/3.webp')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="experience_content">
                    <div class="section_header" data-aos="fade-up">
                        <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon1.png')}}" alt=""></div>
                        <h6 class="section_sub_title">Fast, Reliable & Always Ready to Help
                        </h6>
                        <h1 class="section_title">About Jmanns Locksmith</h1>
                        <p class="section_desc">With 5+ years of experience, we specialize in lockouts, rekeying, repairs, and installations for homes, businesses, and vehicles. Our mobile locksmiths are available 24/7 to provide prompt and professional service whenever you need it.</p>
                        <h5 class="appoint">Call for Appointment <span><a href="tel:+19285811957"><span>+1 (928) 581-1957</span></a></span></h5>
                    </div>
                    <div class="read_more" data-aos="fade-up">
                        <a class="button" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="funfacts bg_image_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_header" data-aos="fade-up">
                    <h6 class="section_sub_title">About Jmanns Locksmith</h6>
                    <h1 class="section_title">Our Work Reflects Our<br /> Commitment to Security</h1>
                    <p class="section_desc">At Jmanns Locksmith, we specialize in rekeying, lockouts, repairs, and new installations. Our fast response, expert service, and dedication to customer satisfaction set us apart. Here are a few facts that speak for themselves:</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="funbox1">
                            <div class="fun_img">
                                <img src="{{asset('assets/images/services/Years-Experience.svg')}}" style="width: 60px;" alt="icon">
                            </div>
                            <div class="fun_content">
                                <h1><span class="fun-number">5+</span></h1>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="funbox1">
                            <div class="fun_img">
                                <img src="{{asset('assets/images/services/Client-Satisfication.svg')}}" style="width: 60px;" alt="icon">
                            </div>
                            <div class="fun_content">
                                <h1><span class="fun-number">100</span>%</h1>
                                <p>Client Satisfication</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="funbox1">
                            <div class="fun_img">
                                <img src="{{asset('assets/images/services/Locks-Handled.svg')}}" style="width: 60px;" alt="icon">
                            </div>
                            <div class="fun_content">
                                <h1><span class="fun-number">1.5</span>k+</h1>
                                <p>Locks Handled </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="man_img">
                    <img src="{{asset('assets/images/2man.png')}}" alt="icon">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section services_1">
    <div class="container">
        <div class="section_header text-center" data-aos="fade-up">
            <div class="shadow_icon"><img src="assets/images/shadow_icon2.png" alt=""></div>
            <h6 class="section_sub_title">Effective Solutions for Common Lock Issues</h6>
            <h1 class="section_title">Our Most In-Demand Locksmith Services</h1>
            <p class="section_desc">We provide expert locksmith services including emergency lockouts, lock repairs, rekeying, and new installations. Trusted by residential and commercial clients, we’re available 24/7 to serve communities throughout Arizona.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="iconbox2 first">
                    <div class="iconbox_wrapper">
                        <div class="iconbox_image">
                            <img src="{{asset('assets/images/services/v_1.webp')}}" alt="img">
                        </div>
                        <div class="iconbox_content">
                            <h3><a href="{{route('services')}}">Emergency & Mobile Locksmith Services</a></h3>
                            <div class="read_more">
                                <a href="{{route('services')}}"><span>Get Service</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="iconbox2 second">
                    <div class="iconbox_wrapper">
                        <div class="iconbox_image">
                            <img src="{{asset('assets/images/services/v_2.webp')}}" alt="img">
                        </div>
                        <div class="iconbox_content">
                            <h3><a href="{{route('services')}}">Lock Rekeying & Key Services</a></h3>
                            <div class="read_more">
                                <a href="{{route('services')}}"><span>Get Service</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="iconbox2 third">
                    <div class="iconbox_wrapper">
                        <div class="iconbox_image">
                            <img src="{{asset('assets/images/services/v_3.webp')}}" alt="img">
                        </div>
                        <div class="iconbox_content">
                            <h3><a href="{{route('about')}}">Lock Installation & Replacement</a></h3>
                            <div class="read_more">
                                <a href="{{route('about')}}"><span>Get Service</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="explore_all">Have a unique locksmith concern?  <a href="{{route('services')}}">Explore All Services</a> or give us a call at  <span><a href="tel:+19285811957"><span>+1 (928) 581-1957</span></a></span> </h6>
    </div>
</div>

<div class="banner type_3" data-aos="fade-up">
    <div class="container">
        <div class="banner_content">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <h1>Have More Questions? Reach Out To Our Team Today.</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner_phone">
                        <img src="{{asset('assets/images/phone3.png')}}" alt="">
                        <span><a href="tel:+19285811957"><span>+1 (928) 581-1957</span></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="city-list">
                <h2 class="text-center mb-5">Area Coverage</h2>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Buckeye, AZ</li>
                            <li class="list-group-item">Glendale, AZ</li>
                            <li class="list-group-item">Surprise, AZ</li>
                            <li class="list-group-item">Peoria, AZ</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Scottsdale, AZ</li>
                            <li class="list-group-item">Cave Creek, AZ</li>
                            <li class="list-group-item">Anthem, AZ</li>
                            <li class="list-group-item">Wittmann, AZ</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Mesam, AZ</li>
                            <li class="list-group-item">Gilbert, AZ</li>
                            <li class="list-group-item">Chandler, AZ</li>
                            <li class="list-group-item">Goodyear, AZ</li>
                            <li class="list-group-item">Arlington, AZ</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="section testimonial">
    <div class="container">
        <div class="section_header text-center" data-aos="fade-up">
            <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon2.png')}}" alt=""></div>
            <h6 class="section_sub_title">Trusted by Homeowners & Businesses Across Arizona</h6>
            <h1 class="section_title">What Our Clients Say</h1>
            <p class="section_desc">We take pride in delivering fast, reliable, and professional locksmith services. <br> Here’s what some of our satisfied customers have to say:</p>
        </div>
        <div class="testimonial_slick_1">
            <div class="item">
                <div class="testibox1">
                    <div class="testibox_inner">
                        <div class="testi-content">
                            <ul>
                                <li class="text">Rating:</li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                            </ul>
                            <p>10/10 would recommend Jmanns if you ever get locked out. Got locked out of my house at nearly 1:00 in the morning and these guys got me out of a bind, quick. Extremely professional and efficient. Glad to to business with them.</p>
                        </div>
                        <div class="testi-top">
                            <div class="testi-img">
                                <img src="{{asset('assets/images/review1.webp')}}" alt="">
                            </div>
                            <div class="testi-info">
                                <h4>Andrew Bezdecny</h4>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testibox1">
                    <div class="testibox_inner">
                        <div class="testi-content">
                            <ul>
                                <li class="text">Rating:</li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                            </ul>
                            <p>Called them up and explained I had my car keys locked in. He was quick, less than 5 minutes and he was out, great experience will definitely be recommending him for anyone! Very fair price as well. Thank you very much</p>
                        </div>
                        <div class="testi-top">
                            <div class="testi-img">
                                <img src="{{asset('assets/images/review2.webp')}}" alt="">
                            </div>
                            <div class="testi-info">
                                <h4>Christopher</h4>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testibox1">
                    <div class="testibox_inner">
                        <div class="testi-content">
                            <ul>
                                <li class="text">Rating:</li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                            </ul>
                            <p>Jmanns locksmith was amazing! I was locked out of my car at  and he was fast to get to my location and get me into my car! Highly recommend if you need locksmith services in the valley!</p>
                        </div>
                        <div class="testi-top">
                            <div class="testi-img">
                                <img src="{{asset('assets/images/review3.webp')}}" alt="">
                            </div>
                            <div class="testi-info">
                                <h4>Darryl Roman</h4>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testibox1">
                    <div class="testibox_inner">
                        <div class="testi-content">
                            <ul>
                                <li class="text">Rating:</li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                            </ul>
                            <p>J Manns Locksmith service is professional and effective. When no one else would tackle my project J Manns went above and beyond to assist me. I recommend them to anyone needing lock repair or replacement.</p>
                        </div>
                        <div class="testi-top">
                            <div class="testi-img">
                                <img src="{{asset('assets/images/review4.webp')}}" alt="">
                            </div>
                            <div class="testi-info">
                                <h4>Vince Gallo</h4>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="clients type_2" data-aos="fade-up">
    <div class="clients_content">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo1.png" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo2.png" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo3.png" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo4.png" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo5.png" alt=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 client_logo">
                <a href="#"><img src="assets/images/company/logo6.png" alt=""></a>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="blog section">
    <div class="container">
        <div class="blog_grid">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="section_header text-left" data-aos="fade-up">
                        <h6 class="section_sub_title">Latest News</h6>
                        <h1 class="section_title">Blogs by Locksmiths</h1>
                        <p class="section_desc">When a locksmith is discussing re-keying that are referring to altering
                            the code of the lock so that it </p>
                    </div>
                    <div class="read_more read_all" data-aos="fade-up">
                        <a class="button" href="blog-1.html">Read All Blogs</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_post">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/blog/alt_1.jpg" alt="img"></a>
                            <div class="calendar">
                                <a href="#"><span class="date">30</span><br>May</a>
                            </div>
                        </div>
                        <div class="post_content">
                            <div class="post_header">
                                <h3 class="post_title">
                                    <a href="#">Modern & effective Lock Installation process</a>
                                </h3>
                            </div>
                            <div class="post_intro">
                                <p>We offer locksmith service to industrial, commercial, reside ntial & automotive...
                                </p>
                            </div>
                            <div class="post_footer">
                                <div class="read_more">
                                    <a href="blog-details.html"><span>Read Article</span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_post">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/blog/alt_2.jpg" alt="img"></a>
                            <div class="calendar">
                                <a href="#"><span class="date">30</span><br>May</a>
                            </div>
                        </div>
                        <div class="post_content">
                            <div class="post_header">
                                <h3 class="post_title">
                                    <a href="#">Common mistake in Door Lock Installation</a>
                                </h3>
                            </div>
                            <div class="post_intro">
                                <p>We offer locksmith service to industrial, commercial, reside ntial & automotive...
                                </p>
                            </div>
                            <div class="post_footer">
                                <div class="read_more">
                                    <a href="blog-details.html"><span>Read Article</span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
