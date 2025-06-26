<!DOCTYPE html>
<html lang="zxx">

@include('layout.partials.head')

<body>
    <!--PreLoader-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="siteloading-preloader"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- Header 1 -->
    @include('layout.partials.header')

    <div class="main_wrapper">
        @yield('content')
    </div>


    <!-- Footer 1 -->
    @include('layout.partials.footer')
    <div class="slide_navi">
        <div class="side_contact_info">
            <h4>chaveiro@gmail.com</h4>
            <h4>Gr. Benjamin Street 609<br/> Florida, USA</h4>
            <div class="phone">
                <img src="assets/images/phone2.png" alt="phone">
                <div><span>Mon- Fri (9am - 9pm)</span><br>+33.123.456.789</div>
            </div>
        </div>
        <div class="side_footer_social">
            <ul class="bottom_social">
                <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
            </ul>
        </div>
    </div>


    <div class="aside_info">
        <div class="aside_close"><img src="assets/images/close.png" alt="icon"></div>
        <div class="logo-side">
            <a href="index.html">
					<img src="assets/images/logo2.png" alt="Hashtag">
				</a>
        </div>
        <div class="side_info">
            <h3>
                About Us
                <span class="title_line"></span>
            </h3>
            <p>We offer comprehensive services to the industrial, commercial, residential and automotive sectors. Sed ut pers piciatis unde omnis iste.</p>
        </div>
        <div class="side_footer_social">
            <ul class="bottom_social">
                <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
            </ul>
        </div>
        <div class="side_contact_info">
            <h4>chaveiro@gmail.com</h4>
            <h4>Gr. Benjamin Street 609<br/> Florida, USA</h4>
            <div class="phone">
                <img src="assets/images/phone2.png" alt="phone">
                <div><span>Mon- Fri (9am - 9pm)</span><br>+33.123.456.789</div>
            </div>
        </div>
    </div>
    @include('layout.partials.scripts')

</body>

</html>