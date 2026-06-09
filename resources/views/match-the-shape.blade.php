@extends('app.main')
@section('body-id', 'match-the-shape')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="match-the-shape-hero   mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif
    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="spot-the-wrong-one-hero-img-1">
                    <img src="{{ asset('images/case-studies/spot-the-wrong-one/girl.webp') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="spot-the-wrong-one-hero-img-2">
                    <img src="{{ asset('images/case-studies/spot-the-wrong-one/play-1.webp') }}" class="img-fluid pt-md-5" alt="">
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="spot-the-wrong-one-hero-img-3">
                    <img src="{{ asset('images/case-studies/spot-the-wrong-one/boy-1.webp') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Introduction <span>Match the Shape</span></h2>

                    <p>Match the Shape is a bright, educational puzzle game developed by <span>Baby Apps</span><br> for toddlers and early learners aged 3 to 8. It is designed to strengthen shape <br> recognition, hand-eye coordination, and logic skills through simple drag-and<br> -drop gameplay. With its cheerful animations and child-friendly design, <br> the game turns early learning into a fun and engaging screen-time activity. </p>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/introduction-img.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--end introduction section  -->



<!--start project idea section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Project Idea </h2>

                    <p>The goal behind Match the Shape was to create a game that introduces young <br> children to basic geometric shapes and spatial awareness in a playful way. <br>The development team at <span>Baby Apps, </span>in collaboration with AppexGames and <br> AppsNation, envisioned an app that would feel more like a toy box than a <br> lesson — allowing children to learn while they play with colorful puzzles and <br> matching tasks. </p>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/project-idea-img.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--end Project Overview section  -->

<!--start project idea section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Project Overview </h2>
                    <p>Match the Shape is an early education mobile game where kids drag <br> and drop shapes into the correct outlines. The gameplay builds early STEM concepts while <br> improving motor control and logical thinking. Each level introduces new shapes <br> and challenges with joyful visual feedback and encouraging audio prompts, <br> making the learning journey fun, repeatable, and effective. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/project-overview.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Project Overview section  -->

<!--start Project Challenges section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Project Challenges </h2>
                    <p>Designing a game for children of varied learning levels meant creating puzzles <br> that scaled in complexity without overwhelming the player. Ensuring smooth <br> performance across devices, keeping the UI distraction-free, and including <br> educational value in every tap were all important technical and creative <br> challenges. Striking the right balance between fun and functionality was <br>
                        key to success. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/project-challenge.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Project Challenges section  -->


<!--start Goals Set for Baby Apps section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Goals Set for Baby Apps</h2>
                    <p>Baby Apps aimed to create a game that teaches young children shape <br> recognition through interactive play. The goal was to combine education with <br> engaging gameplay using drag-and-drop mechanics. Focus was also placed on<br> improving fine motor skills and spatial awareness. A safe, distraction-free<br> environment was essential, with no ads or in-app purchases. The game was <br> designed to be suitable for both independent and guided play.</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/goal-set-img-1.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/goal-set-img-2.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Goals Set for Baby Apps section  -->

<!-- start Target Audience  section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Target Audience</h2>
                    <p>Match the Shape targets children aged 3 to 8, including toddlers, preschoolers, <br> and early learners. Kids aged 3–4 enjoy basic visual play and shape exposure. <br>  Ages 4–6 use it to build coordination and recognition. Ages 6–8 benefit from <br>  puzzle solving and logic development. It also supports parents and educators<br>  seeking purposeful, educational screen time.</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/target-audience-img-1.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/target-audience-img-2.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Target Audience section  -->


<!--start Results & Impact section  -->
<section class="match-the-shape-introduction-section   my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Results & Impact</h2>
                    <p>Match the Shape has become a trusted part of the BabyApps Learning <br> Series, praised by parents and early childhood educators for its quality <br> and effectiveness. Children actively engage with the game, showing <br> improvement in their shape recognition, coordination, and visual memory. <br> It has seen excellent user retention and ratings due to its simplicity <br> and educational benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/match-the-shap/result-and-impact.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Results & Impact section  -->
@endsection