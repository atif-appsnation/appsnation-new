@extends('app.main')
@section('content')
    <!-- Start Breadcrumb -->
    <section class="breadcrumb-areav2 testimonials-banner">
        @if ($errors->has('g-recaptcha-response'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeIn">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h1 class="text-white">Testimonials</h1>
                            <p class="text-white pt-3">We settle for a 100% client satisfaction only! Our clients love
                                working with us because we treat their projects like our own</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

      <!-- Start Testimonials -->
      <section class="reviews-block py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading ptag">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 mt30">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        @foreach ($testimonials as $item)
                            <div class="card pr-shadow h-100 d-flex">
                                <div class="card-body">
                                    <div class="row v-center">
                                        <div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                                        </div>
                                    </div>
                                    <div class="review-text">
                                        <p class="collapsible-text">{{ $item['title'] }}</p>
                                        <button class="btn btn-link toggle-btn">View More</button>
                                        <!--	<p>{{ $item['title'] }}</p>-->
                                    </div>
                                    <div class="-client-details-">
                                        <div class="reviewer-text">
                                            <h4>{{ $item['name'] }}</h4>
                                            <p>{{ $item['location'] }}
                                            </p>
                                            <div class="star-rate">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                aria-hidden="true"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    {{-- edit by talha --}}
    <!-- Start TrustPilot Testimonials -->
    <section class="reviews-block py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/reviews/trustpilot.webp" class="img-fluid" alt="Trustpilot">
                </div>
				<div class="col-md-8 mt-auto mb-3">
                    <div class="common-heading w-tdxt">
                        <h2>TrustPilot Reviews</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pilot-slider owl-carousel owl-theme">
                        @foreach ($trustPilotTestimonial as $testimonial)
                            <div class="testimonial-items">
                                <div class="item">
                                    <div class="card h-100 d-flex">
                                        <div class="card-body">
                                            <h6 class="text-muted text-start">{{ $testimonial->name }}</h6>
                                            {{-- <svg viewBox="0 0 16 16" fill="currentColor" class="icon_icon__ECGRl" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm-.888-4.44 5.603-5.87-.723-.69-4.897 5.13-2.388-2.388L4 8.449l3.112 3.112Z"></path></svg>
											<span>Verified</span> --}}
                                            <img src="images/svg/stars-5.svg" alt="Star" style="height:20px;">

                                            {{-- <img src="uploads/awards/0ba32fb4e7536c7803da3bfecaa3f681.webp" class="award-img"> --}}
                                            <h5 class="pt-3 text-start collapsible-heading">{{ $testimonial->title }}</h5>
                                            <p class="text-start collapsible-text pt-2">{{ $testimonial->comments }}</p>
                                            <button class="btn btn-link toggle-btn">View More</button>
                                            <div class="row">
                                                <div class="d-inline-block w-75">
                                                    <p class="text-start fw-bold pt-2">{{ str_replace("Date of experience:", "",$testimonial->dateOfExperience) }}</p>
                                                </div>
                                                <div class=" d-inline-block w-25">
                                                    <p class="text-end fw-bold pt-2">{{ $testimonial->location }}</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="65d354312f36b895aa0cbd56" data-style-height="52px" data-style-width="100%">
                        <a href="https://www.trustpilot.com/review/appsnation.co" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End TrustPilot Testimonials -->

    <!-- Start TechBehemoths Testimonials -->
    <section class="reviews-block py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="images/svg/techbehemoths.svg" class="img-fluid" alt="Trustpilot" style="height: 60px;">
                </div>
				<div class="col-md-8 mt-auto mb-3">
                    <div class="common-heading w-tdxt">
                        <h2>TechBehemoths Reviews</h2>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="pilot-slider owl-carousel owl-theme">
                        @foreach ($techBehemothsTestimonials as $testimonial)
                            <div class="testimonial-items">
                                <div class="item">
                                    <div class="card h-100 d-flex">
                                        <div class="card-body">
                                            <h6 class="text-muted">{{ $testimonial->name }}</h6>
                                            {{-- <svg viewBox="0 0 16 16" fill="currentColor" class="icon_icon__ECGRl" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm-.888-4.44 5.603-5.87-.723-.69-4.897 5.13-2.388-2.388L4 8.449l3.112 3.112Z"></path></svg>
                                            <span>Verified</span> --}}
                                            
                                            <div class="pt-3">
                                                <figcaption class="blockquote-footer" style="color: blue;font-size:small;">
                                                    {{-- <cite title="Source Title">Source Title</cite> --}}
                                                    {{ $testimonial->position }}
                                                </figcaption>
                                            </div>

                                            <img src="images/svg/stars-5-techbehemoths.svg" alt="" style="height:20px;">

                                            {{-- <img src="uploads/awards/0ba32fb4e7536c7803da3bfecaa3f681.webp" class="award-img"> --}}
                                            <h5 class="text-start collapsible-heading pt-3">{{ $testimonial->title }}</h5>
                                            <p class="text-start collapsible-text pt-2">{{ $testimonial->comments }}</p>
                                            <button class="btn btn-link toggle-btn">View More</button>
                                            <div class="row">
                                                <div class="d-inline-block">
                                                    <p class="text-end fw-bold pt-2">
                                                        {{ str_replace('Date of experience:', '', $testimonial->date) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End TechBehemoths Testimonials -->

    <!-- Start Trustlist Testimonials -->
    <section class="reviews-block py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="images/svg/trustlist.svg" class="img-fluid" alt="Trustpilot" style="height: 80px;">
                </div>
				<div class="col-md-8 mt-auto mb-3">
                    <div class="common-heading w-tdxt">
                        <h2>Trustlist Reviews</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pilot-slider owl-carousel owl-theme">
                        @foreach ($trustlistTestimonials as $testimonial)
                            <div class="testimonial-items">
                                <div class="item">
                                    <div class="card h-100 d-flex">
                                        <div class="card-body">
                                            <h6 class="text-muted mb-2">{{ $testimonial->name }}</h6>
                                            <img src="images/svg/stars_on.svg" alt="" style="height:20px;">
                                            <h5 class="text-start collapsible-heading pt-3">{{ $testimonial->title }}</h5>
                                            <p class="text-start collapsible-text pt-2">{{ $testimonial->comment }}</p>
                                            <div class="row">
                                                <div class="d-inline-block">
                                                    <p class="text-end fw-bold pt-2">
                                                        {{ str_replace('', '', $testimonial->date) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trustlist Testimonials -->
    {{-- end edit by talha --}}

    <!-- Start Technologies -->
    <section class="technologies certificates py-5">
        <div class="container">
            <div class="row fadeIn">
                <div class="col-12">
                    <div class="common-heading text-center">
                        <div data-text="Partners" class="dark-bg-text bg-text text-center">
                            <h2 class="text-white">We Partner With The <span>World's Technology</span> Leaders</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-3 mt-3 text-center certificate">
                    <div>
                        <img src="images/home/google-certifie-agency.webp" alt="Google Developers">
                        <h6 class="pt-3">Google Developer<br>Certified Agency</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-3 text-center certificate">
                    <div>
                        <img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
                        <h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-3 text-center certificate">
                    <div>
                        <img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
                        <h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-3 text-center certificate">
                    <div>
                        <img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
                        <h6 class="pt-3">Amazon Web<br>Service Partner</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Technologies -->

    <!--Start Badges-->
    <section class="badges-section py-5">
        <div class="container">
            <div class="row fadeIn">
                <div class="col-12">
                    <div class="common-heading w-tdxt text-center">
                        <div data-text="Awards" class="dark-bg-text bg-text text-center">
                            <h2 class="text-white">Ranked as #1 <span>Mobile App</span> Development Company</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 wow fadeIn">
                <div class="col-12">
                    <div class="awards-slider owl-carousel owl-theme">

                        @foreach ($awards as $k => $item)
                            @if ($k % 2 == 0)
                                @if ($item['heading'] == 'Top Website design Agencies')
                                    <a href="{{ $item['comment'] }}" target="_blank">
                                        <div class="award-item">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="uploads/{{ $item['image'] }}" class="award-img">
                                                        <h5 class="text-center pt-3">{{ $item['heading'] }}</h5>
                                                        <p class="text-center pt-2">{{ $item['content'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <div class="award-item">
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="uploads/{{ $item['image'] }}" class="award-img">
                                                    <h5 class="text-center pt-3">{{ $item['heading'] }}</h5>
                                                    <p class="text-center pt-2">{{ $item['content'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                @if ($item['heading'] == 'Top Website design Agencies')
                                    <a href="{{ $item['comment'] }}" target="_blank">
                                        <div class="award-item">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="uploads/{{ $item['image'] }}" class="award-img">
                                                        <h5 class="text-center pt-3">{{ $item['heading'] }}</h5>
                                                        <p class="text-center pt-2">{{ $item['content'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <div class="award-item">
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="uploads/{{ $item['image'] }}" class="award-img">
                                                    <h5 class="text-center pt-3">{{ $item['heading'] }}</h5>
                                                    <p class="text-center pt-2">{{ $item['content'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Badges-->

    <!--Start Let's Work Together-->
    <div class="row py-5 justify-content-center hire-developer">
        <div class="col-lg-7">
            <div class="free-cta-title v-center wow fadeIn">
                <div class="row justify-content-center">
                    <div class="col-lg-7 my-auto">
                        <p class="text-center text-lg-start">We Promise. <span>We Deliver.</span> </p>
                    </div>
                    <div class="col-lg-5 text-center text-lg-start mt-5 mt-lg-0">
                        <a href="{{ url('/contact-us') }}" class="btn-main button-arounder lnk">Let's Work Together
                            <i class="fas fa-chevron-right fa-icon"></i>
                            <span class="circle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Let's Work Together-->

@endsection
