@extends('app.main')
@section('body-id', 'alphabet-matchup-game')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="alphabet-matchup-game-hero mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-12">
                <div class="alphabet-hero-img-1">
                    <img src="{{asset('images/case-studies/alphabet-matchup-game/score-image.webp')}}" alt="">
                </div>
            </div>

            <div class="col-12">
                <div class="alphabet-hero-img-2">
                    <img src="{{asset('images/case-studies/alphabet-matchup-game/hero-img.webp')}}" alt="">
                </div>
            </div>


            <div class="col-12">
                <div class="alphabet-hero-img-3">
                    <img src="{{asset('images/case-studies/alphabet-matchup-game/hero-box-img.webp')}}" alt=""> 
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="alphabet-introduction-section">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/ant.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Target <span>Alphabet Match</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/lion.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="alphabet-introduction-background">
                    <p>Alphabet Match Up is a cheerful and educational ABC game built to <br> teach young children the basics of letter recognition and phonics <br>. Using colorful puzzles, voice guidance, and matching activities, it <br> creates a joyful space for learning. Kids match uppercase and <br> lowercase letters while hearing their sounds clearly. This fun-first <br> approach supports early literacy and letter-sound connections. <br> It’s a perfect blend of play and foundational skill-building.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/monkey.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/glass.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/Introduction-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start introduction section  -->



<!--start Project Overview section  -->
<section class="project-overview-section ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/cow.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Project <span>Overview</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/cup.webp')}}" alt="Duck Toy">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/gitar.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="alphabet-introduction-background">
                    <p>The project aimed to design an interactive app that introduces the <br> alphabet through engaging visuals and sounds. It includes letter-<br>matching puzzles, phonics games, and memory tasks that boost<br> learning retention. The design is child-safe, distraction-free, and<br> works entirely offline. From toddlers to kindergartners, the game<br> adapts to each learner's pace. The ultimate goal was to turn ABC<br> learning into a playful daily activity.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/umbrella.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/project-overview-section.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start Project Overview section  -->


<!-- start game goal section -->
<section class="alphabet-introduction-section">
    <div class="container-fluid mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/snake.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="  col-8">

                        <div class="imageFloteRight wow  d-flex text-center" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/octopus.webp')}}" alt="Duck Toy">
                            <h2 class="title">game <span>goal</span></h2>

                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="row d-flex justify-content-space-between align-items-center">
            <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/game-goal-img-1.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>The main objective was to support early literacy<br> by reinforcing phonemic awareness through <br>interactive gameplay. The app helps children connect<br> spoken sounds to written symbols in a way that's fun and memorable.<br> By encouraging exploration and repetition,<br> it builds confidence in recognizing and using letters.<br> The game also introduces reading basics without overwhelming<br> young minds. It makes alphabet learning feel <br>like a natural discovery process.</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="offset-2 col-4  ">

                        <div class=" d-flex" data-wow-delay="0.6s">
                            <h2 class="title">Target <span>Audience</span></h2>

                        </div>
                    </div>
                    <div class="offset-4 col-2">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/zebra.webp')}}" alt="Duck Toy">
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="row d-flex justify-content-space-between align-items-center">

            <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>“Alphabet Match Up” is crafted for kids aged 3 to 6,<br> including toddlers, preschoolers, and kindergarteners.<br> It's ideal for home use by parents or for classroom support <br> by educators. Younger users benefit from guided<br> narration and image-based letter association.<br> Older learners use the game to reinforce reading <br>readiness. The interface ensures every child,<br> regardless of reading level, can navigate with ease.</p>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/game-goal-img-2.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/plane.webp')}}" alt="Duck Toy">
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</section>
<!-- end game goal section -->


<!-- start Gameplay Mechanics section -->
<section class="project-overview-section ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/eagle.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Gameplay  <span>Mechanics</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/sun.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="alphabet-introduction-background">
                    <p>The game features letter-to-object and letter-to-sound matching <br> for visual and auditory learners. Friendly voiceovers help kids hear <br> correct pronunciation as they play. Bright visuals, no ads, and <br> intuitive controls make it safe for unsupervised use. Offline <br> functionality allows learning anywhere—during travel, school, <br> or quiet time at home. It also includes both uppercase and lowercase <br> practice to complete the alphabet experience.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/tree-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/lemon.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/gameplay-mechanics-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!-- end Gameplay Mechanics section -->

<!-- start Key Features and Solution Delivered section -->
<section class="alphabet-introduction-section">
    <div class="container-fluid mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    

                    <div class=" col-md-6 ">

                        <div class=" d-flex" data-wow-delay="0.6s">
                            <h2 class="title">Key  <span>Features</span></h2>

                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/fish.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row d-flex justify-content-space-between align-items-center">
             <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>The main objective was to support early literacy<br> by reinforcing phonemic awareness through <br>interactive gameplay. The app helps children connect<br> spoken sounds to written symbols in a way that's fun and memorable.<br> By encouraging exploration and repetition,<br> it builds confidence in recognizing and using letters.<br> The game also introduces reading basics without overwhelming<br> young minds. It makes alphabet learning feel <br>like a natural discovery process.</p>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/key-features-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class=" col-6  ">
                         <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/perrot.webp')}}" alt="Duck Toy">
                        </div>
                        
                    </div>
                    <div class=" col-4">

                    <div class=" d-flex" data-wow-delay="0.6s">
                            <h2 class="title">Solution  <span>Delivered</span></h2>

                        </div>
                       
                    </div>


                </div>

            </div>

        </div>
        <div class="row d-flex justify-content-space-between align-items-center">
             <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/solution-delivered-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>“Alphabet Match Up” is crafted for kids aged 3 to 6,<br> including toddlers, preschoolers, and kindergarteners.<br> It's ideal for home use by parents or for classroom support <br> by educators. Younger users benefit from guided<br> narration and image-based letter association.<br> Older learners use the game to reinforce reading <br>readiness. The interface ensures every child,<br> regardless of reading level, can navigate with ease.</p>
                </div>

            </div>
           
        </div>
       

          <div class="row">
            <div class="col-md-12">
                <div class="row">
                    

                    <div class="offset-2 col-4 ">

                        <div class=" d-flex" data-wow-delay="0.6s">
                            <h2 class="title">Learning   <span>Objectives</span></h2>

                        </div>
                    </div>
                    <div class="offset-2 col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/tree-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="row d-flex justify-content-space-between align-items-center">
             <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>The main objective was to support early literacy<br> by reinforcing phonemic awareness through <br>interactive gameplay. The app helps children connect<br> spoken sounds to written symbols in a way that's fun and memorable.<br> By encouraging exploration and repetition,<br> it builds confidence in recognizing and using letters.<br> The game also introduces reading basics without overwhelming<br> young minds. It makes alphabet learning feel <br>like a natural discovery process.</p>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/learning-objectives-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class=" col-6  ">
                         <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/girl.webp')}}" alt="Duck Toy">
                        </div>
                        
                    </div>
                    <div class=" col-6">

                    <div class=" d-flex" data-wow-delay="0.6s">
                            <h2 class="title">Design   <span>Approach</span></h2>

                        </div>
                       
                    </div>


                </div>

            </div>

        </div>
        <div class="row d-flex justify-content-space-between align-items-center">
             <div class="col-md-12 col-lg-6">

                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/design-approach-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-12 col-lg-6 text-center ">
                <div class="alphabet-introduction-background">
                    <p>“Alphabet Match Up” is crafted for kids aged 3 to 6,<br> including toddlers, preschoolers, and kindergarteners.<br> It's ideal for home use by parents or for classroom support <br> by educators. Younger users benefit from guided<br> narration and image-based letter association.<br> Older learners use the game to reinforce reading <br>readiness. The interface ensures every child,<br> regardless of reading level, can navigate with ease.</p>
                </div>

            </div>
           
        </div>
    </div>
</section>
<!-- end Key Features and Solution Delivered section -->
<section class="project-overview-section ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/horse.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Result  <span>& Impact </span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/turtle.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="alphabet-introduction-background">
                    <p>Alphabet Match Up has become a go-to game for parents and teachers <br> looking to support alphabet learning. Children enjoy matching letters, <br> hearing sounds, and progressing through playful levels. Many parents <br> report faster letter recognition and phonics improvement in just weeks. <br> The app stands out for combining phonics, memory, and interactivity in <br> a kid-first design. It proves that early education can be fun, effective,<br> and screen-safe.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/ant.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/beetle.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/result-and-impact-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
         <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow " data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/horse-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow  d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/alphabet-matchup-game/dog.webp')}}" alt="Duck Toy">

                        </div>
                    </div>
                </div>
    </div>
</section>
 <!-- start result and impact section -->

@endsection