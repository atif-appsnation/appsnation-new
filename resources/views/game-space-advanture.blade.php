@extends('app.main')
@section('body-id', 'game-space-advanture')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="     mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-md-6">
                <div class="alphabet-hero-img-1">
                    <img src="{{asset('images/case-studies/game-space-advanture/hero-img-1.webp')}} " class='img-fluid' alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="alphabet-hero-img-2">
                    <img src="{{asset('images/case-studies/game-space-advanture/hero-img-2.webp')}}" class='img-fluid' alt="">
                </div>
            </div>


        </div>
    </div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="title">Introduction <span> Astro Buddies</span></h2>

                    </div>

                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>Astro Buddies is a gentle, imaginative space-themed mobile <br> game designed by Baby Apps for toddlers and preschoolers <br> aged 2 to 6. With its colorful universe, age-appropriate <br> challenges, and calm visual design, the game introduces <br> young children to early learning concepts through <br> interactive space missions. It’s not just a digital toy — it’s <br> a purposeful learning journey crafted in collaboration <br> with childhood development experts.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/astronote.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/introduction-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start introduction section  -->


<!--start project idea section  -->
<section class="game-space-advanture-introduction-section introduction-section my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/fire-ball-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Project <span>idea</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/roket-5.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>The core idea behind Astro Buddies was to create a safe, stimulating, <br> and educational environment where children can explore space <br> while developing foundational cognitive and motor skills. Baby Apps <br> aimed to design a game that blends entertainment with early <br> learning goals — all set within a magical outer-space adventure. The <br> result is a playful game filled with rainbow rings, space puzzles, <br> and friendly galactic surprises.</p>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/project-idea-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start project idea section  -->

<!--start project overview section  -->
<section class="game-space-advanture-introduction-section introduction-section my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/fire-ball-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Project <span>Overview</span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/roket-4.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>Astro Buddies is an interactive game for preschoolers that turns <br> outer space into a playground for learning. Children fly through <br> animated galaxies, solve basic puzzles, and explore cosmic <br> environments — all while building memory, coordination, and <br> recognition skills. With its easy controls and soothing music, <br> the game promotes calm, independent, or guided learning <br> experiences.</p>
                </div>

            </div>


        </div>

    </div>
</section>

<section class="my-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/project-overview-screen-1.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/project-overview-screen-2.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start project overview section  -->



<!--start Project Challenges section  -->
<section class="game-space-advanture-introduction-section introduction-section my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/fire-ball-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Project  <span>Challenges </span></h2>

                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/roket-4.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>Developing a game for very young children required extra sensitivity <br> around overstimulation and complexity. The biggest challenge was <br> designing mechanics and visuals that were gentle yet engaging. <br> Balancing simple tap-drag gameplay with meaningful learning value <br> — while keeping the UI child-safe and navigable without reading <br>— was central to the project’s success. Designing levels that are both <br> exploratory and educational also required careful input from early <br> learning consultants.</p>
                </div>

            </div>


        </div>

    </div>
</section>

<section class="my-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/project-challange-screen-1.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/project-challange-screen-2.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start Project Challenges section  -->

<!--start Results & Impact section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
           <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/roket-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="title">Results & Impact  </h2>

                    </div>
                     
                </div>

            </div>

            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <p>Astro Buddies has received positive feedback from both parents <br> and educators for its calm gameplay, child-centered design, <br> and meaningful learning structure. It has been adopted <br> in home-school environments and praised for helping children <br> improve their shape recognition, coordination, and focus. <br> The game has contributed to Baby Apps’ growing reputation <br> as a leading developer of early learning mobile apps.</p>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/astronote.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/game-space-advanture/result-and-impact-image.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start Results & Impact section  -->

@endsection