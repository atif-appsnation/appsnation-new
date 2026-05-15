@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 stitch-and-wash">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-md-12 col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                    <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/logo.webp')}}" class=" logo" alt="stitch-and-wash logo">
                    <h1>Freshly <span>Cleaned.</span> <br> Perfectly <span>Stitched.</span> <br> Effortlessly Yours. <br>
                    </h1>
                    <p class="pt-3">
                        Plan your dream wedding with ease track guests, manage <br> tasks, and celebrate every big moment.
                    </p>
                    <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/appstore.webp')}}" class="playstore-logo" alt="appstore logo">

                </div>
            </div>

            <div class="col-md-12  col-lg-6 mt-5 mt-lg-0  stitch-and-wash-hero-img">
                <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/hero-img.webp')}}"
                    class="img-fluid hero-img"
                    alt="stitch-and-wash-app">
            </div>

        </div>
    </div>

</section>
<!-- End Breadcrumb Area-->



<!--Start Client Overview Section -->
<section class="my-5 client-overview-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <div class="client-content">
                    <h3>Client Overview</h3>
                    <p>Woodland is a concept-driven mobile app allowing users to dive into books through reading or listening — while connecting with fellow readers. The goal was to create a minimal, distraction-free design that feels personal, modern, and deeply immersive.</p>
                    <ul>
                        <li>Industry</li>
                        <li>On‑Demand Services / Lifestyle</li>
                    </ul>
                    <ul>
                        <li>App Type</li>
                        <li>Laundry & Tailoring Service Application</li>
                    </ul>
                    <ul>
                        <li>Services</li>
                        <li>UX Research, UI Design, Branding, Mobile App UI (iOS + Android)</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-12 col-xxl-6">
                <div class="client-img">
                    <img src="{{asset('images/case-studies/stitch-and-wash/client-overview.webp')}}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Client Overview Section -->


<!-- start project decribtion-->
<section class="my-5 project-dec-section">
    <div class="container py-5">
        <div class="row">

            <div class="col-md-12 col-xxl-6">
                <div class="project-dec-img">
                    <img src="{{asset('images/case-studies/stitch-and-wash/project-decribtion.webp')}}" alt="" loading="lazy">
                </div>
            </div>
            <div class="col-md-12 col-xxl-6">
                <div class="project-dec-content">
                    <h3>Project Description</h3>
                    <p>Stitch & Wash is a modern on-demand mobile app that integrates professional laundry and tailoring services within a single, user-friendly platform. It allows users to schedule pickups, customize their orders, and track delivery in real-time—all while ensuring high-quality service and transparent pricing. Designed for ease and efficiency, Stitch & Wash makes garment care simple and reliable, helping users save time without compromising on quality or convenience.</p>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- End project decribtion-->

<!--Start Project Goals Section -->
<section class="my-5 stitch-and-wash-project-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <div class="project-cards">
                    <div class="project-card">
                        <div class="project-num">
                           01
                        </div>
                        <div class="project-goal-content">
                            <h5>Simplify Service Booking</h5>
                            <p>Design an intuitive interface for quick laundry and tailoring pickup scheduling.</p>
                        </div>

                    </div>
                    <div class="project-card">
                        <div class="project-num">
                           02
                        </div>
                        <div class="project-goal-content">
                            <h5>Deliver Transparency and Trust</h5>
                            <p>Provide real‑time tracking and clear status updates for every order. </p>
                        </div>

                    </div>
                </div>
                <div class="project-cards">
                    <div class="project-card">
                        <div class="project-num">
                           03
                        </div>
                        <div class="project-goal-content">
                            <h5>Enhance User Convenience</h5>
                            <p>Add secure payments, transparent pricing, and easy reorders.</p>
                        </div>

                    </div>
                    <div class="project-card">
                        <div class="project-num">
                           04
                        </div>
                        <div class="project-goal-content">
                            <h5>Combine Two Services in One App</h5>
                            <p>Unify laundry and tailoring to save time while ensuring quality.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xxl-6">
                <div class="project-goal-img">
                    <img src="{{asset('images/case-studies/stitch-and-wash/project-goals.webp')}}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Goals Section -->
 
 


<!-- Start Wireframes Section -->
<section class="wireframe-section  my-5  wow fadeIn">
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
                    <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/wireframe-1.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/wireframe-2.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/wireframe-3.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>

                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/wireframe-4.webp')}}" alt="couple app Wireframe" class="wire-img">
                </div>





            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

 
<!-- by hassan UI/UX Design Phase section -->
<section class="stitch-and-wash-uiux-section-wrapper my-5 wow fadeInUp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6 uiux-text-col">
                <h3 class="uiux-main-title">UI/UX Design Phase</h3>

                <div class="uiux-content-block">
                    <h3 class="uiux-subtitle">Prototyping</h3>
                    <p class="uiux-paragraph">
                        Based on the wireframes, high‑fidelity prototypes were developed to bring the Stitch & Wash experience to life. The design focused on clean layouts, intuitive navigation, and a professional yet approachable color palette. Each screen was refined to ensure effortless booking, clear tracking, and consistent visual flow. <br>

                    </p>
                </div>

                <div class="uiux-content-block">
                    <h3 class="uiux-subtitle">Testing and Feedback
                    </h3>
                    <p class="uiux-paragraph">User testing helped validate usability and identify minor pain points in the booking and order‑status processes. Feedback led to improvements in button visibility, pricing clarity, and delivery notifications—enhancing the app’s overall ease of use and reliability.</p>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 uiux-image-col">
                <div class="uiux-image-card">
                    <img loading="lazy" src="{{ asset('images/case-studies/stitch-and-wash/uiux-design-phase.webp') }}" alt="UI/UX Design Mockup"
                        class="uiux-image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hassan UI/UX Design Phase section -->



<!-- Start App Screens -->
<section class="grave-love-apps my-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-8.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-9.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-10.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-11.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-12.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-13.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-14.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-15.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/appscreen-16.webp')}}" alt="App Screens" class="img-fluid"></div>

        </div>
    </div>
</section>
<!-- End App Screens -->


<!-- by hassan USER PERSONA -->
<section class="my-5  stitch-and-wash-persona-section">
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
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/Avatar3.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Aisha Al Marri </h4>
                            <p>Homemaker</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b> : 29
                            </p>
                            <p>
                                <b>Marital status</b> : Single
                            </p>
                            <p>
                                <b>Occupation</b> : Homemaker
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Handles household laundry and tailoring for the entire family.</li>
                            <li>Prefers affordable, subscription‑based packages for regular use.</li>
                            <li>Looks for a family‑friendly service provider offering home pickup.</li>
                            <li>Appreciates loyalty discounts and seasonal offers.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Struggles with managing multiple service apps for daily chores.</li>
                            <li>Experiences delays with local tailoring shops.</li>
                            <li>Wants an all‑in‑one, reliable app that saves time and simplifies household management.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hassan USER PERSONA -->



<!-- Start vender App  -->
<section class="grave-love-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">Vendor App</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/vendor-1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/vendor-2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/vendor-3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/vendor-4.webp')}}" alt="App Screens" class="img-fluid"></div>
        </div>
    </div>
</section>
<!-- End vendor App -->


<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">Dashboard Overview</h2>
            <p>The Stitch & Wash dashboard provides vendors and admins with a complete overview of orders, earnings, and service performance. Designed with clarity and efficiency in mind, the dashboard uses clean data visualization and intuitive navigation to help users track real‑time metrics, manage daily operations, and review customer feedback — all from one place.</p>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->


<!-- by hassan Tech Behind the App section  -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tools and Technologies Used</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Frontend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/react-native.webp')}}" alt="React Native">
                    <p>React Native</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Backend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/node-js.webp')}}" alt="Node.js">
                    <p>Node.js</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Database</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/mongo-db.webp')}}" alt="MongoDB">
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Cloud</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/aws.webp')}}" alt="AWS">
                    <p>AWS</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Payments</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/payment.png')}}" alt="payment">
                    <p>Stripe • G Pay</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End hassan Tech Behind the App section  -->


<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/last-morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection