<header class="header">
    <div class="top_bar">
        <div class="container">
            <div class="top_bar_inner">
                <div class="header_social">
                    <ul class="top_social">
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
                <div class="header_info">
                    <div class="schedule">
                        <img src="assets/images/clock.png" alt="schedule">
                        <div>Monday - Sunday <span> Open 24 Hours</span></div>
                    </div>
                    <div class="phone">
                        <img src="assets/images/phone.png" alt="phone">
                        <div><span>Call Us Anytime</span><br><a href="tel:+19285811957">
                                <div style="color: white;">+1 (928) 581-1957</div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle_bar">
        <div class="container">
            <div class="middle_bar_inner">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                </div>

                <div class="header_right_part">
                    <div class="mainnav">
                        <ul class="main_menu">
                            <li class="menu-item menu-item-has-children active"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('about')}}">About</a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('services')}}">Services</a>
                                {{-- <ul class="sub-menu">
                                    <li class="menu-item"><a href="service-details.html">Service Details</a></li>
                                </ul> --}}
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_search">
                        {{-- <form class="search_form" action="search.php">
                            <input type="text" name="search" class="keyword form-control" placeholder="Search..." />
                            <button type="submit" class="form-control-submit"><i class="ion-ios-search"></i></button>
                        </form> --}}
                    </div>

                    <!-- mobile menu toggle button -->
                    <div class="aside_open"><i class="ion-ios-keypad"></i></div>
                    <button class="ma5menu__toggle" type="button">
                        <i class="ion-android-menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
