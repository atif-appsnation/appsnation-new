@extends('app.main')
@section('content')

<!--Breadcrumb Area-->

<section class="dantal-app-hero-section breadcrumb-areav2 ">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-lg-12 my-lg-auto  ">
                <div class="bread-titlev2 mt-4">
                    <div class="logo">
                        <img loading="lazy" src="{{asset('images/case-studies/dantal-app/logo.webp')}}" class="img-fluid " alt="" srcset="">
                    </div>
                    <h1>Revolutionizing Dental Practice <br> Management</h1>
                    <p class="pt-3">A seamless, mobile-first platform designed to streamline appointments, patient records, and clinical workflows for modern dental practices. </p>
                </div>
            </div>



        </div>
        <div class="row">
            <div class="col-12">
                <div class="dantal-hero-img">
                    <img loading="lazy" src="{{asset('images/case-studies/dantal-app/hero-img.webp')}}" class="img-fluid " alt=" Load-board">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Breadcrumb Area-->



<!--Start Client Overview Section -->
<section class="my-5 dantail client-overview-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <div class="client-content">
                    <h3>Client Overview</h3>
                    <p>DentalCare Solutions is a forward-thinking dental healthcare provider focused on bridging the gap between traditional clinical excellence and modern digital convenience. With a presence in key markets like the UAE and USA, they specialize in providing premium oral health services through a network of highly specialized clinics.</p>
                    <ul>
                        <li>Industry</li>
                        <li>Healthcare / Health-Tech</li>
                    </ul>
                    <ul>
                        <li>Target Market:</li>
                        <li>Global (UAE & USA Focus)</li>
                    </ul>
                    <ul>
                        <li>Business Model:</li>
                        <li>Patient-Centric Healthcare Service</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-12 col-xxl-6">
                <div class="client-img">
                    <img src="{{asset('images/case-studies/dantal-app/client-overview-img.webp')}}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Client Overview Section -->




<!-- start royal relax spa problem solution -->
<section class="dantail-problem-section Alejandro-problem-solution royal-relax-spaceing wow fadeInUp">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="my-3">Problem Solution</h2>
            <p class=" ">The Dental App transforms fragmented clinical workflows into a unified system by replacing manual booking with automated real-time scheduling. <br> By centralizing medical records into a secure digital vault, the platform ensures instant access to health history while bridging the communication <br> gap through smart reminders. Finally, integrated virtual consultations and transparent billing provide a seamless, trust-driven experience that <br> optimizes both patient care and clinical efficiency.</p>
        </div>
        <div class="section-wrapper">


            <div class="start-connector">
                <div class="start-plus-circle">+</div>
            </div>

            <div class="row row-five-cols g-0">

                <!-- Card 01 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">01</div>

                        </div>
                        <p class="card-text-custom">Automated real-time booking replaces manual calls to eliminate long waiting times and scheduling errors.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">02</div>

                        </div>
                        <p class="card-text-custom">Secure digital storage replaces paper files, providing instant access to X-rays and medical history.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">03</div>

                        </div>
                        <p class="card-text-custom">In-app video calls allow for quick preliminary advice, reducing unnecessary clinic visits for minor concerns.
                        </p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 04 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">04</div>

                        </div>
                        <p class="card-text-custom">Automated alerts for appointments and medication ensure patients stay on track with their dental care. </p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 05 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">05</div>

                        </div>
                        <p class="card-text-custom">Integrated digital payments provide clear cost breakdowns and a seamless checkout experience for patients.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- start royal relax spa problem solution-->


<!-- Start Our Design Objectives Section -->
<section class="dantal-objective-section Alejandro-objectives-section  royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-5 text-center">Design Objectives</h2>
                </div>
            </div>
        </div>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">Intuitive Patient Dashboard</h4>
                        <p class="text-muted mb-0">Create a user-friendly interface that provides patients with a clear overview of upcoming visits, treatment progress, and doctor availability in one central view.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">Real-time Health Alerts</h4>
                        <p class="text-muted mb-0">Implement a responsive notification system to instantly remind patients about medication timings, upcoming check-ups, and new diagnostic report updates.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">Trust-Focused Accessibility</h4>
                        <p class="text-muted mb-0">Ensure the UI is fully optimized for all age groups, using calming visual palettes and large tap zones to reduce dental anxiety and improve the overall user experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Seamless Booking Experience</h4>
                        <p class="text-muted mb-0">Design a simplified task flow that allows users to select their preferred time slot and dentist in just a few taps, eliminating long wait times and complex forms./p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Secure Medical Vault</h4>
                        <p class="text-muted mb-0">Enable easy access and organization of X-rays, digital prescriptions, and medical history through secure, cloud-based storage for both patients and practitioners.</p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Modern & Scalable UI</h4>
                        <p class="text-muted mb-0">Build a flexible design system that feels clean and professional today, with the structural capability to accommodate future dental modules and advanced features.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Design Objectives Section -->



<!-- by hassan USER PERSONA -->
<section class="my-5 dental-persona-section  stitch-and-wash-persona-section">
    <div class="container persona-section">
        <div class="persona-card-main wow fadeInUp">
            <div class="row persona-top-heading">
                <div class="col-md-12 text-center">
                    <h3>USER PERSONA</h3>

                </div>

            </div>

        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/Avatar.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Fatima Al Mansoori</h4>
                            <p>School Teacher</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b> : 34
                            </p>
                            <p>
                                <b>Marital status</b> : Married
                            </p>
                            <p>
                                <b>Occupation</b> : Primary Teacher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Needs quick, dependable laundry pickup and delivery for her family’s busy schedule.</li>
                            <li>Looks for trustworthy service providers with quality assurance.</li>
                            <li>Appreciates reminders and flexible delivery options to suit her teaching hours.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Challenges</h3>
                        <ul>
                            <li>Finds it hard to align delivery times with her working schedule.</li>
                            <li>Hesitant to try new apps due to inconsistent service quality.</li>
                            <li>Requires clear order tracking and secure payment options for confidence.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/Avatar2.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Omar Al Fahim</h4>
                            <p>Corporate Professional </p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b> : 26
                            </p>
                            <p>
                                <b>Marital status</b> : Single
                            </p>
                            <p>
                                <b>Occupation</b> : Marketing Exec.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Hassle-Free Travel: Wants a trustworthy app to explore Qatar during his stay.</li>
                            <li>Clear Pricing: Expects full fare transparency with local currency display.</li>
                            <li>Premium Experience: Prefers luxury cars with English-speaking drivers.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Challenges</h3>
                        <ul>
                            <li>As a visitor, he finds it hard to trust local apps and worries about hidden charges and unclear pickup instructions.</li>
                            <li>Language barriers and lack of proper in-app English support reduce his confidence in booking rides.</li>
                            <li>Navigation through the city becomes difficult due to unfamiliar routes and few tourist-specific ride options.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end hassan USER PERSONA -->




<!-- Start Wireframes Section -->
<section class="dantal-wireframe wireframe-section  my-5  wow fadeIn">
    <div class="love-app-wireframe-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="common-heading text-center">
                        <h2 class="mb-3">Wireframes</h2>
                        <p class="mb-5">We created low‑fidelity wireframes to visualize the complete user flow of Stitch & Wash, focusing on effortless service selection, order booking, and tracking. These early prototypes helped define a simple, goal‑driven structure and ensured an easy, engaging experience for users from the very start.</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 love-app-wireframe-gallery">
                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/dantal-app/wireframe-1.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/dantal-app/wireframe-2.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/dantal-app/wireframe-3.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/dantal-app/wireframe-4.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>





            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->


<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">High-Fidelity Visuals</h2>
            <p>A robust and scalable design system ensures a consistent brand experience across all platforms, from the mobile patient app to the practitioner's tablet dashboard.</p>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/dantal-app/high-fidelity-visuals-img.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->



<!-- Tools and Technologies -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Tools and Technologies Used</h2>
            <p class="text-muted">
                Modern technologies powering the application
            </p>
        </div>

        <div class="row justify-content-center g-4">

            <div class="col-6 col-sm-4 col-md-3 col-lg">
                <div class="tech-card h-100 text-center p-4">
                    <h6 class="text-uppercase">Frontend</h6>

                    <img src="{{asset('images/case-studies/boujee-beachin/react-native.webp')}}"
                        class="img-fluid mb-3"
                        alt="React Native">

                    <p class="mb-0 fw-medium">React Native</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg">
                <div class="tech-card h-100 text-center p-4">
                    <h6 class="text-uppercase">Backend</h6>

                    <img src="{{asset('images/case-studies/boujee-beachin/node-js.webp')}}"
                        class="img-fluid mb-3"
                        alt="Node.js">

                    <p class="mb-0 fw-medium">Node.js</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg">
                <div class="tech-card h-100 text-center p-4">
                    <h6 class="text-uppercase">Database</h6>

                    <img src="{{asset('images/case-studies/boujee-beachin/mongo-db.webp')}}"
                        class="img-fluid mb-3"
                        alt="MongoDB">

                    <p class="mb-0 fw-medium">MongoDB</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg">
                <div class="tech-card h-100 text-center p-4">
                    <h6 class="text-uppercase">Cloud</h6>

                    <img src="{{asset('images/case-studies/boujee-beachin/aws.webp')}}"
                        class="img-fluid mb-3"
                        alt="AWS">

                    <p class="mb-0 fw-medium">AWS</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg">
                <div class="tech-card h-100 text-center p-4">
                    <h6 class="text-uppercase">Payments</h6>

                    <img src="{{asset('images/case-studies/boujee-beachin/payment.png')}}"
                        class="img-fluid mb-3"
                        alt="Payments">

                    <p class="mb-0 fw-medium">Stripe • G Pay</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- UI UX -->
<section class="uiux-section py-5 wow fadeInUp">

    <div class="container">

        <div class="row align-items-center gy-5">

            <div class="col-lg-6 order-2 order-lg-1">

                <span class="badge bg-success mb-3">
                    Design Process
                </span>

                <h2 class="fw-bold mb-4">
                    UI/UX Design Phase
                </h2>

                <div class="mb-4">

                    <h5 class="fw-semibold">
                        Prototyping
                    </h5>

                    <p class="text-muted">
                        We transformed user flows into high-fidelity
                        prototypes focusing on specialist discovery,
                        appointment booking and medical record access.
                    </p>

                </div>

                <div>

                    <h5 class="fw-semibold">
                        Testing & Feedback
                    </h5>

                    <p class="text-muted">
                        Usability testing improved booking,
                        notifications and medical dashboard
                        experience for all user groups.
                    </p>

                </div>

            </div>

            <div class="col-lg-6 order-1 order-lg-2">

                <div class="uiux-image-card">

                    <img
                        src="{{ asset('images/case-studies/dantal-app/uiux-phase-img.webp') }}"
                        class="img-fluid  "
                        alt="UI UX">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Start Client Testimonial Section -->
<section class=" dantal-app-testing  royal-relax-spaceing wow fadeIn boujee-beachin-testimonial">
    <div class="container">
        <div class="common-heading">
            <h2 class="py-5 text-center">Testing & User Feedback</h2>
        </div>
 

        <div class="row justify-content-center g-3">
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <div class="testimonials-img-section mb-3">
                        <img loading="lazy" src="{{asset('images/case-studies/dantal-app/avatar-2.webp')}}" alt="Liked" class="rounded-circle img-fluid">
                    </div>
                    <p class="testimonial-text text-center">
                        "As a busy professional, I used to struggle with calling clinics for appointments. This app’s instant booking feature and automated reminders  "</p>
                    <b class="d-block mt-3">Sarah, Marketing Manager</b>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <div class="testimonials-img-section mb-3">
                        <img loading="lazy" src="{{asset('images/case-studies/dantal-app/avatar-1.webp')}}" alt="Liked" class="rounded-circle img-fluid">
                    </div>
                    <p class="testimonial-text text-center">
                       "Managing my kids' dental check-ups was always a paperwork nightmare. Now, having all their medical records and X-rays in one digital vault is a game-changer for our family." </p>
                    <b class="d-block mt-3">Omar, Sr. Project Manager</b>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Client Testimonial Section-->


<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn dantal-app-mockup">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/dantal-app/mork-up.jpg')}}" alt="wood-land morkup" class="img-fluid  rounded-2xl">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection