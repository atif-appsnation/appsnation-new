@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="math-genius-hero-section mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-md-12">
                <div class="math-genius-logo">
                    <img src="{{asset('images/case-studies/math-genius/logo.webp')}} " class='img-fluid' alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="alphabet-hero-img-1">
                    <img src="{{asset('images/case-studies/math-genius/hero-img-1.webp')}} " class='img-fluid' alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="alphabet-hero-img-2">
                    <img src="{{asset('images/case-studies/math-genius/hero-img-2.webp')}}" class='img-fluid' alt="">
                </div>
            </div>


        </div>
    </div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="math-genius-introduction-section introduction-section  ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/34.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="title">Introduction <br><span> Math Genius! </span></h2>
                            </div>
                            <div class=" col-4 ">
                                <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/girl-2.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>Math Genius – Math Challenge Game is an educational yet exciting mobile <br> game developed by <span>Baby Apps</span> that combines the thrill of fast decision-<br>making with fundamental math practice. Designed for students, young<br> learners, and adults alike, the game puts players through a series of time-<br>bound mathematical challenges across addition, subtraction, multiplication<br>, and division. With a minimal yet engaging interface and a twist-based <br>gameplay mechanic, Math Genius trains the brain while providing fun and<br> competition.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-3.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/70.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!--end introduction section  -->


<!-- start game mode section -->
<section class="game-mode-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/girl.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4 pt-5">
                        <h2 class="title ">Select <span>Game Mode</span></h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <img src="{{asset('images/case-studies/math-genius/game-mode-screen.webp')}}" class='img-fluid' alt="">
            </div>
        </div>
    </div>
</section>
<!-- end game mode section -->



<!--start Project Idea section  -->
<section class="math-genius-introduction-section introduction-section  ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-6.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="title">Project <br><span>Project Idea </span></h2>
                            </div>
                            <div class=" col-4 ">
                                <div class="imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/girl-4.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background pt-3">
                    <p>The core concept of Math Genius was to create a game that transforms basic math <br> practice into an interactive and competitive experience . <span> Baby Apps</span> aimed to <br> bridge the gap between learning and entertainment by allowing players to sharpen <br> their math skills while enjoying a challenging environment. The twist of randomly <br>presented problem sets, paired with four multiple-choice answer boxes, keeps the <br> gameplay dynamic and unpredictable — making each session feel fresh and</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/89.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class=" imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-7.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!--end Project Idea  section  -->



<!-- start game mode section -->
<section class="game-mode-section theme">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4 pt-5">
                        <h2 class="title ">Select <span>Theme </span></h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <img src="{{asset('images/case-studies/math-genius/select-theme-screen.webp')}}" class='img-fluid' alt="">
            </div>
        </div>
    </div>
</section>
<!-- end game mode section -->



<!--start Game Goal section  -->
<section class="math-genius-introduction-section introduction-section  ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/cloude.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="title">Game <span> Goal</span></h2>
                            </div>
                            <div class=" col-4 ">
                                <div class="imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/toys-2.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background pt-3">
                    <p>The primary goals were to develop a lightweight, intuitive math game that could appeal <br> to a wide age range — from school children in grades 1–5 to adults looking to refresh <br> their mental math. The team focused on speed-based gameplay to boost brain <br> sharpness and accuracy under pressure. Another key objective was to ensure a simple <br> UI that allows even young kids to play independently while still being challenging <br> enough for older players. Baby Apps also aimed to encourage repeat play through <br> score-based achievement — motivating players to improve and reach the 50-point <br> “Genius” mark.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/toys-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class=" imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/70.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!--start Game Goal section  -->



<!-- start Game Play Screen section -->
<section class="game-mode-section play-game">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4 pt-5">
                        <h2 class="title ">Select <span>Theme </span></h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <img src="{{asset('images/case-studies/math-genius/game-play-2-screen.webp')}}" class='img-fluid' alt="">
            </div>
        </div>
    </div>
</section>
<!-- end Game Play Screen section -->

<!--start Target Audience section  -->
<section class="math-genius-introduction-section introduction-section  ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-9.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="title">Target <span> Audience</span></h2>
                            </div>
                            <div class=" col-4 ">
                                <div class="imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/cloude.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background pt-3">
                    <p>The primary goals were to develop a lightweight, intuitive math game that could appeal <br> to a wide age range — from school children in grades 1–5 to adults looking to refresh <br> their mental math. The team focused on speed-based gameplay to boost brain <br> sharpness and accuracy under pressure. Another key objective was to ensure a simple <br> UI that allows even young kids to play independently while still being challenging <br> enough for older players. Baby Apps also aimed to encourage repeat play through <br> score-based achievement — motivating players to improve and reach the 50-point <br> “Genius” mark.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/89.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-4 col-2 ">
                        <div class=" imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-10.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!--start Target Audience section  -->




<!-- start Choose Math Clash  section -->
<section class="game-mode-section math-clash">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4 pt-5">
                        <h2 class="title ">Choose <span> Math Clash </span></h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <img src="{{asset('images/case-studies/math-genius/math-clash-screen.webp')}}" class='img-fluid' alt="">
            </div>
        </div>
    </div>
</section>
<!-- end Choose Math Clash section -->



<!--start Project Challenges section  -->
<section class="math-genius-introduction-section introduction-section  ">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4">
                                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/70.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="title">Project <span> Challenges</span></h2>
                            </div>
                            <div class=" col-4 ">
                                <div class="imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                                    <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-4.webp')}}" alt="Duck Toy">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background pt-3">
                    <p>One major challenge was keeping the game simple for younger users while still engaging <br>enough for older players. Balancing difficulty levels so that gameplay remains fun and <br>non-frustrating was crucial. Another challenge was designing a fast-paced timer system <br>that adds pressure without overwhelming players. Since the game targets a broad <br>audience, the UI/UX had to be clean, distraction-free, and easy to navigate across all<br> age groups and devices.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-5.webp')}}" alt="Duck Toy">
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
</section>
<!--start Project Challenges section  -->



<!-- start Game  Play-2  section -->
<section class="game-mode-section math-clash">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/math-genius/boy-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4 pt-5 ">
                        <h2 class="title ">Game <span> Play </span></h2>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <img src="{{asset('images/case-studies/math-genius/game-play-screen.webp')}}" class='img-fluid' alt="">
            </div>
        </div>
    </div>
</section>
<!-- end Game  Play-2  section -->


<!-- start result-and-impact section -->
<section class="game-mode-section result-and-impact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title pt-5">
                            Results <span>& Impact</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <div class="introduction-background pt-3">
                    <p>
                        Since launch, Math Genius has been downloaded by thousands of users globally,
                        especially in educational circles and family-focused app spaces. It has received
                        positive feedback for being both fun and mentally stimulating. Users appreciated
                        the fast-paced gameplay, the accuracy of problems, and the replay value through
                        score-chasing. The game has encouraged many users to regularly practice math,
                        resulting in improved speed and confidence in calculations among young learners.
                    </p>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <img
                    src="{{ asset('images/case-studies/math-genius/game-mode-screen.webp') }}"
                    class="img-fluid"
                    alt="Math Genius Game Mode Screen">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4 text-center result-img-1 mb-4 mb-md-0">
                <img
                    loading="lazy"
                    src="{{ asset('images/case-studies/math-genius/boy-9.webp') }}"
                    class="img-fluid"
                    alt="Boy">
            </div>

            <div class=" col-md-4 text-center result-img-2 mb-4 mb-md-0">
                <img
                    loading="lazy"
                    src="{{ asset('images/case-studies/math-genius/trofhy.webp') }}"
                    class="img-fluid"
                    alt="Trophy">
            </div>

            <div class=" col-md-4 text-center result-img-3">
                <img
                    loading="lazy"
                    src="{{ asset('images/case-studies/math-genius/girl-2.webp') }}"
                    class="img-fluid"
                    alt="Girl">
            </div>
        </div>
    </div>
</section>

<!-- end result-and-impact  section -->

@endsection