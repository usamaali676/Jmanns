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
            <h4><a href="mailto:jmannslocksmith@gmail.com">jmannslocksmith@gmail.com</a></h4>
            <h4>Jmanns Locksmith<br /> Arizona(AZ), USA</h4>
            <div class="phone">
                <img src="assets/images/phone2.png" alt="phone">
                <div><span>Mon- Sun (Open 24 Hours)</span><br><a href="tel:9285811957">+1 (928) 581-1957</a></div>
            </div>
        </div>
        <div class="side_footer_social">
            <ul class="bottom_social">
                <li class="yelp">
                    <a href="https://www.yelp.com/biz/jmanns-locksmith-buckeye-2" target="_blank">
                        <i class="fa-brands fa-yelp"></i>
                    </a>
                </li>
                <li class="tiktok">
                    <a href="https://www.tiktok.com/@jmannslocksmith" target="_blank">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </li>
                <li class="gmb">
                    <a href="https://www.google.com/maps/place/Jmanns+Locksmith/@33.485838,-112.31465,9z/data=!4m16!1m9!3m8!1s0x433b937055be8707:0xa7ecd9b361f4e382!2sJmanns+Locksmith!8m2!3d33.485838!4d-112.31465!9m1!1b1!16s%2Fg%2F11ltft3czy!3m5!1s0x433b937055be8707:0xa7ecd9b361f4e382!8m2!3d33.485838!4d-112.31465!16s%2Fg%2F11ltft3czy?entry=ttu&g_ep=EgoyMDI1MDYyMy4yIKXMDSoASAFQAw%3D%3D"
                        target="_blank">
                        <i class="ion-location"></i>
                    </a>
                </li>
                <li class="nextdoor">
                    <a href="https://nextdoor.com/pages/jmanns-locksmith-co-buckeye-az/" target="_blank">
                        <i class="ion-home"></i>
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/jmannslocksmithllc/?hl=ar" target="_blank">
                        <i class="ion-social-instagram-outline"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="aside_info">
        <div class="aside_close"><img src="assets/images/close.png" alt="icon"></div>
        <div class="logo-side">
            <a href="{{route('home')}}">
                <img src="assets/images/logo2.png" alt="Hashtag">
            </a>
        </div>
        <div class="side_info">
            <h3>
                About Us
                <span class="title_line"></span>
            </h3>
            <p>With over 5 years of trusted service, Jmanns Locksmith provides fast, reliable, and 24/7 locksmith
                solutions for homes, businesses, and vehicles across Arizona. We’re committed to your safety, one lock
                at a time.</p>
        </div>
        <div class="side_footer_social">
            <ul class="bottom_social">
                <li class="yelp">
                    <a href="https://www.yelp.com/biz/jmanns-locksmith-buckeye-2" target="_blank">
                        <i class="fa-brands fa-yelp"></i>
                    </a>
                </li>
                <li class="tiktok">
                    <a href="https://www.tiktok.com/@jmannslocksmith" target="_blank">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </li>
                <li class="gmb">
                    <a href="https://www.google.com/maps/place/Jmanns+Locksmith/@33.485838,-112.31465,9z/data=!4m16!1m9!3m8!1s0x433b937055be8707:0xa7ecd9b361f4e382!2sJmanns+Locksmith!8m2!3d33.485838!4d-112.31465!9m1!1b1!16s%2Fg%2F11ltft3czy!3m5!1s0x433b937055be8707:0xa7ecd9b361f4e382!8m2!3d33.485838!4d-112.31465!16s%2Fg%2F11ltft3czy?entry=ttu&g_ep=EgoyMDI1MDYyMy4yIKXMDSoASAFQAw%3D%3D"
                        target="_blank">
                        <i class="ion-location"></i>
                    </a>
                </li>
                <li class="nextdoor">
                    <a href="https://nextdoor.com/pages/jmanns-locksmith-co-buckeye-az/" target="_blank">
                        <i class="ion-home"></i>
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/jmannslocksmithllc/?hl=ar" target="_blank">
                        <i class="ion-social-instagram-outline"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="side_contact_info">
            <h4><a href="mailto:jmannslocksmith@gmail.com">jmannslocksmith@gmail.com</a></h4>
            <h4>Jmanns Locksmith<br /> Arizona(AZ), USA</h4>
            <div class="phone">
                <img src="assets/images/phone2.png" alt="phone">
                <div><span>Open 24 Hours</span><br><a href="tel:9285811957">(928) 581-1957</a></div>
            </div>
        </div>
    </div>
    @include('layout.partials.scripts')

</body>

</html>
