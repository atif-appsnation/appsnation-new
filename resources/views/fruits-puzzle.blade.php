@extends('app.main')
@section('body-id', 'fruit-puzzle-game')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="fruit-puzzle-game-hero mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="fruit-puzzle-hero-img-1">
                    <img src="{{asset('images/case-studies/fruit-puzzle-game/hero-image-3.webp')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="fruit-puzzle-hero-img-2">
                    <img src="{{asset('images/case-studies/fruit-puzzle-game/hero-image-1.webp')}}" alt="">
                </div>
            </div>


            <div class="col-md-3 col-lg-3">
                <div class="fruit-puzzle-hero-img-3">
                    <img src="{{asset('images/case-studies/fruit-puzzle-game/hero-image-2.webp')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="fruit-puzzle-game-intrduction-section">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-3.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-4 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-4.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 introduction-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/introduction-screen.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-6 text-center ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/boy-2.webp')}}" alt="Duck Toy">
                            </div>
                        </div>

                        <div class=" col-6 ">
                            <div class="title text-start">
                                <h2>Introduction <br>
                                    <span> Fruits Puzzle </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alphabet-introduction-background">
                    <p>Fruits Puzzle is a vibrant, engaging <br>fruit-matching game developed by <br>BabyApps for both kids and adults. <br> Designed with interactive gameplay <br>and colorful visuals, it promotes <br>learning through fun. Players swipe, <br>drag, and match fruits to complete <br>puzzles that build logic and memory. <br>The game works fully offline and has <br> no ads or pop-ups. It’s a safe digital <br> space for learning and entertainment.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/cherry.webp')}}" alt="Duck Toy">
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</section>
<!--start introduction section  -->

<!--start introduction section  -->
<section class="fruit-puzzle-game-intrduction-section">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-8.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/purple-fruit.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center ">
                <div class="col-md-12">
                    <div class="row">
                        <div class=" col-6 ">
                            <div class="title text-start">
                                <h2>Project <br>
                                    <span>Overview </span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/girl-2.webp')}}" alt="Duck Toy">
                            </div>
                        </div>


                    </div>
                </div>
                <div class="alphabet-introduction-background">
                    <p>The goal was to build a brain-<br>boosting puzzle game that is easy to <br>play yet intellectually stimulating.<br> Fruits Puzzle combines drag-and<br>-drop activities, memory games, and <br>sorting challenges into one <br>experience. With cheerful visuals and<br> smooth controls, it’s optimized for<br> young minds. We focused on<br> creating a clean, engaging interface<br> for solo play. It helps improve focus<br> and reasoning across various age groups.</p>
                </div>

            </div>

            <div class="col-md-6 introduction-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/project-overview-screen.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/bannana.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/stubery.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--start introduction section  -->



<!--start introduction section  -->
<section class="fruit-puzzle-game-intrduction-section">
    <div class="container mt-6">
        <div class="row">


            <div class="col-md-6 introduction-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/game-goal-screen.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-6 text-center ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/boy.webp')}}" alt="Duck Toy">
                            </div>
                        </div>

                        <div class=" col-6 ">
                            <div class="title text-start">
                                <h2>Game
                                    <br>
                                    <span>Goal </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alphabet-introduction-background">
                    <p>Our objective was to create a multi-<br>level puzzle game that enhances<br> visual recognition, memory, and<br> logic. We wanted a game that<br> entertains and educates without<br> overcomplicating the interface. It<br> needed to be accessible to young<br> users and relaxing for older ones. The<br> aim was to provide real cognitive <br>value in short, engaging play<br> sessions. Creating a child-safe, ad<br>-free digital product was central to <br>the mission.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/watermalon.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--start introduction section  -->



<!--start introduction section  -->
<section class="fruit-puzzle-game-intrduction-section">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-8.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-6.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center ">
                <div class="col-md-12">
                    <div class="row">
                        <div class=" col-6 ">
                            <div class="title text-start">
                                <h2>Target
                                    <br>
                                    <span>Audience </span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="imageFloteRight wow " data-wow-delay="0.6s">
                                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/girl-4.webp')}}" alt="Duck Toy">
                            </div>
                        </div>


                    </div>
                </div>
                <div class="alphabet-introduction-background">
                    <p>The primary audience includes <br> children aged 4–10, along with <br>casual puzzle gamers and parents. <br>Toddlers and preschoolers learn fruit<br> names and shapes through play.<br> Older children benefit from brain<br> training and strategic thinking.<br> Parents and teachers use it as an<br> educational tool in a fun setting.<br> Adults can enjoy it too as a calm, <br>casual challenge during breaks.</p>
                </div>

            </div>

            <div class="col-md-6 introduction-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/target-audiance-screen.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/pink-fruite.webp')}}" alt="Duck Toy">
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</section>
<!--start introduction section  -->



<!--start introduction section  -->
<section class="fruit-puzzle-game-intrduction-section">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-9.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-6.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 introduction-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/key-feature-screen.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-6 text-center ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="imageFloteRight wow " data-wow-delay="0.6s">
                                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/girl.webp')}}" alt="Duck Toy">
                            </div>
                        </div>

                        <div class=" col-6 ">
                            <div class="title text-start">
                                <h2>Key
                                    <br>
                                    <span>Features </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alphabet-introduction-background">
                    <p>Fruits Puzzle includes multiple puzzle <br> modes like match-3, drag-and-drop,<br> and memory games. Every level is<br> crafted to promote cognitive skills<br> while keeping gameplay intuitive<br> and fun. Visuals are bright and<br> inviting, designed specifically to<br> retain attention. It has no<br> ads, no internet requirement, and no pop<br>-ups. Each mode brings increasing<br> difficulty for progressive skill development.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/orange.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--start introduction section  -->


<!--start Player Feedback section  -->


<section class="mt-5 player-feedback-title ">
    <div class="container">
        <div class="row">
            
             <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/orange.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Player  <span>Feedback</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/cherry.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="  player-feedback-section">
    <div class="container">
        <div class="row">
            
            <div class="col-12 player-feedback-image">
                <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/player-feedback-screen.webp')}}" alt="Duck Toy">
            </div>
        </div>
    </div>
</section>
<!--end Player Feedback section  -->

<!-- start result and impact section -->
 <section class="fruit-puzzle-game-result-and-impact-section">
    <div class="container">
        <div class="row">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/butterfily-9.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/pink-fruite.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="result-and-impact-wrapper text-center">
                     <h2 class="title">Results & Impact</h2>
                     <p>Fruits Puzzle has shown strong engagement from both young players and <br> parents. Kids spend meaningful time solving puzzles, which improves their<br> attention span and problem-solving ability. Parents appreciate the ad-<br>free, offline design that ensures safe screen time. Educators have noted its<br> value as a support tool for visual learning. It successfully bridges the gap<br> between gaming and early education.</p>
                </div>
            </div>
             <div class="col-md-12">
                <div class="row">
                    

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/apple.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    
 </section>
<!-- end result and impact section -->


<section class="fruit-puzzle-game-lastmorkup">
    <div class="container-fluid ">
        <div class="row">
             <div class="col-md-4 fruit-puzzle-game-lastmorkup-image-1">
                 <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/last-morkup-img-1.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
            <div class="col-md-4 fruit-puzzle-game-lastmorkup-image-2">
                 <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/last-morkup-img-3.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
             <div class="col-md-4 fruit-puzzle-game-lastmorkup-image-3">
                 <img loading="lazy" src="{{asset('images/case-studies/fruit-puzzle-game/last-morkup-img-2.webp')}}" class="img-fluid" alt="Duck Toy">
            </div>
             
        </div>
    </div>
</section>

@endsection