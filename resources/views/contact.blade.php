@extends('layout.app')
@section('content')

<style>
    .page_header .page_header_content {
    position: relative;
    background-image: url('{{ asset('assets/images/services/banner.webp') }}');;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0px;
    padding: 135px 0px 135px 0px;
    text-align: center;
}
.bg_image_4 {
    background-image: url('{{ asset('assets/images/bg4.jpg') }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<div class="page_header">
            <div class="page_header_content">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                    <h2 class="heading">Contact Us</h2>
                </div>
            </div>
        </div>

		<div class="main_wrapper">
			<div class="section">
				<div class="container">
					<div class="gmapbox" data-aos="zoom-in">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d851864.8668521304!2d-112.31465!3d33.485837999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x433b937055be8707%3A0xa7ecd9b361f4e382!2sJmanns%20Locksmith!5e0!3m2!1sen!2s!4v1750962628663!5m2!1sen!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
						{{-- <div id="googleMap" class="map"></div> --}}
					</div>
				</div>
			</div>
			<div class="section contact bg_image_4">
				<div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="keepintouch_1">
                                <div class="communication" data-aos="fade-up" data-aos-duration="700">
                                    <div class="communication_icon">
                                        <img class="primary_img" src="assets/images/contact/1.png" alt="">
                                        <img class="secondary_img" src="assets/images/contact/1-1.png" alt="">
                                    </div>
                                    <div class="info_body">
                                        <h5>Phone No</h5>
                                        <a href="tel:9285811957"><h6>(928) 581-1957</h6></a>
                                        {{-- <h6>+33 123 456 789</h6> --}}
                                    </div>
                                </div>
                                <div class="communication" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="communication_icon">
                                        <img class="primary_img" src="assets/images/contact/2.png" alt="">
                                        <img class="secondary_img" src="assets/images/contact/2-1.png" alt="">
                                    </div>
                                    <div class="info_body">
                                        <h5>Email Address</h5>
                                        <a href="mailto:jmannslocksmith@gmail.com"><h6>jmannslocksmith@gmail.com</h6></a>
                                        {{-- <h6>chaveiro@care.com</h6> --}}
                                    </div>
                                </div>
                                <div class="communication" data-aos="fade-up" data-aos-duration="1300">
                                    <div class="communication_icon">
                                        <img class="primary_img" src="assets/images/contact/3.png" alt="">
                                        <img class="secondary_img" src="assets/images/contact/3-1.png" alt="">
                                    </div>
                                    <div class="info_body">
                                        <h5>Office Address</h5>
                                        <h6>Jmanns Locksmith
                                            <br/> Arizona(AZ), USA</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 offset-lg-1">
                            <div class="contact_us_1">
								<div class="section_header" data-aos="fade-left" data-aos-duration="700">
									<h6 class="section_sub_title">Contact Us</h6>
									<h1 class="section_title">Want to Ask anything?<br/>
										Send Us a Mail Anytime</h1>
								</div>
								<form class="contact_form" action="register.php" method="post" data-aos="fade-left" data-aos-duration="1000">
									<div class="form-container">
										<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="name" class="form-control" placeholder="Your Name*" required="">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="phone" class="form-control" placeholder="Phone No">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12 col-lg-12">
												<div class="form-group">
													<textarea name="message" class="form-control" placeholder="Message Here*" required=""></textarea>
												</div>
											</div>
											<div class="col-md-12 col-lg-12">
												<div class="form-group">
													<input class="button" type="submit" value="Send Message" name="submit">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
@endsection
