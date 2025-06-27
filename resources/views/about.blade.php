@extends('layout.app')
@section('content')
<div class="page_header">
    <div class="page_header_content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
            <h2 class="heading">About Jmanns Looksmith</h2>
        </div>
    </div>
</div>

<div class="main_wrapper">
    <div class="top_feature section">
        <div class="container">
            <div class="full_image_holder">
                <img src="{{asset('assets/images/about_img.jpg')}}" alt="">
            </div>
            <div class="logo_image_holder">
                <img src="{{asset('assets/images/badge1.png')}}" alt="">
                <img src="{{asset('assets/images/badge2.png')}}" alt="">
                <img src="{{asset('assets/images/badge3.png')}}" alt="">
            </div>
            <div class="content_inner">
                <h1>Jmanns Locksmith, Committed to Securing Your Home, Business & Peace of Mind</h1>
                <img src="assets/images/signature.png" alt="">
            </div>
        </div>
    </div>

    <div class="experience">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="group_image_holder">
                        <div class="expe_box">
                            <div class="expe_box_inner">
                                <h1>5+</h1>
                                Years of Experience
                            </div>
                        </div>
                        <img class="main_img" src="{{asset('assets/images/image1.png')}}" alt="">
                        <img class="sub_img" src="{{asset('assets/images/image2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="experience_content">
                        <div class="section_header" data-aos="fade-up">
                            <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon1.png')}}" alt=""></div>
                            <h6 class="section_sub_title">About Jmanns Locksmith</h6>
                            <h1 class="section_title">Fast Response. Trusted Service.</h1>
                            <p class="section_desc">WAt Jmanns Locksmith, we specialize in rekeying and lock solutions
                                to keep your property secure. Whether you’ve moved in, lost a key, or upgraded your
                                locks, we’ll ensure everything works with the right key—quickly and reliably.
                                the locks.</p>
                        </div>
                        <div class="read_more read_all" data-aos="fade-up">
                            <a class="button" href="{{route('contact')}}">Contact Us</a>
                        </div>
                        {{-- <div class="video_button" data-aos="fade-up">
                            <a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><i
                                    class="ion-ios-play"></i></a>
                            <span>Watch Company Video</span>
                        </div> --}}
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
                                    <img src="{{asset('assets/images/funfact/icon1.png')}}" alt="icon">
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
                                    <img src="{{asset('assets/images/funfact/icon2.png')}}" alt="icon">
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
                                    <img src="{{asset('assets/images/funfact/icon3.png')}}" alt="icon">
                                </div>
                                <div class="fun_content">
                                    <h1><span class="fun-number">1.5</span>k</h1>
                                    <p>Locks Handled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="man_img">
                        <img src="{{asset('assets/images/man2.png')}}" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section why_choose_2">
        <div class="container">
            <div class="section_header text-center" data-aos="fade-up">
                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon2.png')}}" alt=""></div>
                <h6 class="section_sub_title">Why choose us</h6>
                <h1 class="section_title">There Are Many Reasons to Trust Jmanns Locksmith</h1>
                <p class="section_desc">When it comes to protecting your property, choosing the right locksmith matters. Here’s why we stand out:</p>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service_box">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon3.png')}}" alt=""></div>
                                <h3>Professionally Trained</h3>
                                <p>Our locksmiths are highly trained to handle residential, commercial, and automotive security needs with precision.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service_box">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon4.png')}}" alt=""></div>
                                <h3>Certified Locksmiths</h3>
                                <p>We are fully certified and insured, offering reliable service you can count on any time of day or night.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="service_box second">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon5.png')}}" alt=""></div>
                                <h3>Fastest Response</h3>
                                <p>Available 24/7, our mobile team responds fast so you're never left waiting in an emergency.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service_box second">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon6.png')}}" alt=""></div>
                                <h3>Customer Support</h3>
                                <p>We prioritize friendly communication to keep you informed and satisfied throughout every job.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="service_box third">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon7.png')}}" alt=""></div>
                                <h3>Technologically very handy</h3>
                                <p>We use the latest locksmith equipment to deliver fast, accurate, and damage-free service.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service_box third">
                                <div class="shadow_icon"><img src="{{asset('assets/images/shadow_icon8.png')}}" alt=""></div>
                                <h3>LookSmith Problem Handled</h3>
                                <p>Whether it’s a complex lock system we solve problems with confidence and care.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section team">
        <div class="container">
            <div class="section_header text-center" data-aos="fade-up">
                <div class="shadow_icon"><img src="assets/images/shadow_icon2.png" alt=""></div>
                <h6 class="section_sub_title">Locksmiths Team</h6>
                <h1 class="section_title">Chaveiro Locksmiths are the best</h1>
                <p class="section_desc">When a locksmith is discussing re-keying that are referring <br /> to altering
                    the code of the lock so that it </p>
            </div>
            <div class="team_slick">
                <div class="item">
                    <div class="teambox">
                        <img src="assets/images/team/1.png" alt="">
                        <div class="teambox_inner">
                            <div class="team_social">
                                <div class="share"><i class="ion-android-share-alt"></i></div>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="teambox_intro">
                                <h6>Locksmith</h6>
                                <h5>Brandon Graham</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="teambox">
                        <img src="assets/images/team/2.png" alt="">
                        <div class="teambox_inner">
                            <div class="team_social">
                                <div class="share"><i class="ion-android-share-alt"></i></div>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="teambox_intro">
                                <h6>Locksmith</h6>
                                <h5>Collen Balinger</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="teambox">
                        <img src="assets/images/team/3.png" alt="">
                        <div class="teambox_inner">
                            <div class="team_social">
                                <div class="share"><i class="ion-android-share-alt"></i></div>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="teambox_intro">
                                <h6>Volunteer</h6>
                                <h5>Ashly Rosale</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="teambox">
                        <img src="assets/images/team/4.png" alt="">
                        <div class="teambox_inner">
                            <div class="team_social">
                                <div class="share"><i class="ion-android-share-alt"></i></div>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="teambox_intro">
                                <h6>Volunteer</h6>
                                <h5>Alexender Gardener</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section testimonial bg_image_2">
        <div class="container">
            <div class="testimonial_slick_2">
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
                                <p>"10/10 would recommend Jmanns if you ever get locked out. Got locked out of my house at nearly 1:00 in the morning and these guys got me out of a bind, quick. Extremely professional and efficient. Glad to to business with them."</p>
                            </div>
                            <div class="testi-top">
                                <div class="testi-img">
                                    <img src="{{asset('assets/images/reviewer1.png')}}" alt="">
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
                                <p>"Called them up and explained I had my car keys locked in. He was quick, less than 5 minutes and he was out, great experience will definitely be recommending him for anyone! Very fair price as well. Thank you very much"</p>
                            </div>
                            <div class="testi-top">
                                <div class="testi-img">
                                    <img src="{{asset('assets/images/reviewer2.png')}}" alt="">
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
                                <p>"Jmanns locksmith was amazing! I was locked out of my car at  and he was fast to get to my location and get me into my car! Highly recommend if you need locksmith services in the valley!"</p>
                            </div>
                            <div class="testi-top">
                                <div class="testi-img">
                                    <img src="{{asset('assets/images/reviewer1.png')}}" alt="">
                                </div>
                                <div class="testi-info">
                                    <h4>Darryl Roman</h4>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
