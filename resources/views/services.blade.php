@extends('layout.app')
@section('content')

<style>
    .page_header .page_header_content {
    position: relative;
    background-image: url('{{ asset('assets/images/services/anner2.webp') }}');;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0px;
    padding: 135px 0px 135px 0px;
    text-align: center;
}
</style>
<div class="page_header">
    <div class="page_header_content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Services</li>
            </ul>
            <h2 style="color: white" class="heading">Locksmith Services</h2>
        </div>
    </div>
</div>

<div class="main_wrapper">
    <div class="section services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{asset('assets/images/services/1.webp')}}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{ asset('assets/images/services/icon1.png') }}"
                                            alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Emergency & Mobile Locksmith Services</a></h3>
                                <p>Fast, 24/7 locksmith assistance at your location—perfect for homes, businesses, or
                                    vehicles.</p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{asset('assets/images/services/3.webp')}}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{asset('assets/images/services/icon3.png')}}" alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Lock Installation & Replacement</a></h3>
                                <p>Secure your property with expert lock installation or replacement for any door or
                                    entry.</p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{ asset('assets/images/services/4.webp') }}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{ asset('assets/images/services/icon4.png') }}"
                                            alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Lock Rekeying & Key Services</a></h3>
                                <p>Lost keys or need better control? We offer quick rekeying, key duplication, and
                                    master key.</p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{ asset('assets/images/services/6.webp') }}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{ asset('assets/images/services/icon6.png') }}"
                                            alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Residential & Commercial Lock Repair</a></h3>
                                <p>From home doors to office entry systems, we provide dependable lock repairs for all
                                    settings.</p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{ asset('assets/images/services/2.webp') }}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{ asset('assets/images/services/icon2.png') }}"
                                            alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Lockout Services</a></h3>
                                <p>Locked out of your house, office, or car? We’ll get you back inside quickly, safely,
                                    and without any stress.</p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="iconbox">
                        <div class="iconbox_wrapper">
                            <div class="iconbox_image">
                                <img src="{{ asset('assets/images/services/5.webp') }}" alt="img">
                                <div class="iconbox_icon">
                                    <a href="tel:9285811957"><img src="{{ asset('assets/images/services/icon5.png') }}"
                                            alt="icon"></a>
                                </div>
                            </div>
                            <div class="iconbox_content">
                                <h3><a href="tel:9285811957">Lock Repair Services</a></h3>
                                <p>Locked out of your house, office, or car? We’ll get you back inside quickly, safely,
                                    and without any hassle or delay.
                                </p>
                                <div class="read_more">
                                    <a href="tel:9285811957"><span>Get Service</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            {{-- <div class="pagination-div" data-aos="fade-up">
                <ul class="pagination">
                    <li><a href="tel:9285811957"><i class="ion-chevron-left"></i></a></li>
                    <li><a class="page-number current" href="tel:9285811957">1</a></li>
                    <li><a class="page-number" href="tel:9285811957">2</a></li>
                    <li><a class="page-number" href="tel:9285811957">3</a></li>
                    <li><a href="tel:9285811957"><i class="ion-chevron-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
@endsection
