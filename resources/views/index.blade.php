@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-3xl uppercase font-bold text-shadow-md pb-14">
                    Get connected to the world through film
                </h1>

                <h1 class="sm:text-white text-1.5xl text-shadow-md pb-14">
                    Get free comedy movies articles from over 50 countries. New blogs added every week.
                    Meet creative movie maniacs like yourself!<br>
                    No monthly fee. Simple
                </h1>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://images.immediate.co.uk/production/volatile/sites/3/2021/01/Hotel-T2-a9b33c2.jpg" width="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-10/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                HOTEL TRANSYLVANIA: TRANSFORMANIA (2022) REVIEW
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                A SERVICEABLE (YET UNCESSARY) MONSTER CODA TO THE FRANCHISE   In 2012, animated director / writer Genndy Tartakovsky (along with a story by Todd Durham) released the cartoon movie Hotel Transylvania. The film, which starred the voice talents of Adam Sandler, Selena Gomez, Andy Samberg, and many others, told the story of Count Dracula’s daughter Mavis and how she finds an
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Read More
            </a>
        </div>
    </div>

    {{-- sponsors with images? --}}
    {{-- <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            We are sponsored by...
        </h2>

  <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div> --}}

    <div class="text-center py-15">
        <h2 class="text-3xl font-bold py-10">
            Recent App Reviews
        </h2>
    </div>

    <div class="w-4/5 mx-auto py-20 border-b border-gray-200 background-imageceappreviews">
        <div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide text-center py-4 " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                {{-- <a href="https://kotaku.com/rplace-reddit-april-fools-elden-ring-hollow-knight-word-1848747948">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/ca51e06c966a0fc2865026659b865b82.jpg"  class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
            </a> --}}
            Alessio Rochi
                <br>
            “Best service in the market. Using it since a lot of time. Absolutely suggested.”
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                {{-- <a href ="https://kotaku.com/lego-star-wars-skywalker-saga-review-kotaku-ps5-xbox-tt-1848746867">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/b630506cf871c5859909299c47e1a388.jpg" class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
              </a> --}}
              David Jones
              <br>
              “All online and have an easy to use app. Very competitive app.”
              </div>
              <div class="carousel-item">
                {{-- <a href="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg" class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
                </a> --}}
                Alexa Jackson
                <br>
                “When im ready to read a book I can always come here and find one.”
                <br>
                "Very good service with useful links and support".
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>

    <div class="text-center py-15">
        <h2 class="text-3xl font-bold py-10">
            Recent Posts
        </h2>
    </div>

    <div class="sm:grid grid-cols-1 w-4/5 m-auto ">
        <div class="flex background-imageboxturningred text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                   Turning Red(2022) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    Mei Lee is a 13-year-old girl who is torn between being her mother's obedient daughter and the chaos of her youth. As if that were not enough, when she gets too excited, she turns into a big red panda.
                </h3>

                <a 
                    href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>


    <br>
    <div class="sm:grid grid-cols-1 w-4/5 m-auto">
        <div class="flex background-imagetheinterview text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    The Interview (2022) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    Aaron and Dave, who run a popular late-night show, get a chance to interview Kim Jong-un. The CIA decides to take advantage of the opportunity and devices a plan to assassinate the infamous dictator.
                </h3>

                <a 
                    href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="sm:grid grid-cols-1 w-4/5 m-auto">
        <div class="flex background-imagecentralintelligence text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Central Intelligence (2016) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    Accountant Calvin Joyner's life changes drastically after Bob Stone, his old classmate from high school, drags him into a dubious covert operation.
                </h3>

                <a 
                    href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>

    
@endsection