@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-3xl uppercase font-bold text-shadow-md pb-14">
                    Get connected to the world through film
                </h1>
                {{-- <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a> --}}
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
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-10/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                HOTEL TRANSYLVANIA: TRANSFORMANIA (2022) REVIEW
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                A SERVICEABLE (YET UNCESSARY) MONSTER CODA TO THE FRANCHISE   In 2012, animated director / writer Genndy Tartakovsky (along with a story by Todd Durham) released the cartoon movie Hotel Transylvania. The film, which starred the voice talents of Adam Sandler, Selena Gomez, Andy Samberg, and many others, told the story of Count Dracula’s daughter Mavis and how she finds an
            </p>

            {{-- <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p> --}}

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Read More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
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
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        {{-- <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p> --}}
    </div>

    <div class="sm:grid grid-cols-1 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    THE BATMAN (2022) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    A CINEMATICALLY DARK (YET BEAUTIFULLY POETIC) DETECTIVE STORY   Batman, the Cape Crusader, the Dark Knight, the Bat of Gotham….and so on and so forth. The character of the Batman has always been a fix point of fascination, finding the dual life of DC comic book creation Bruce Wayne, a wealthy philanthropist whose was orphaned at a young age drove
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
        <div class="flex bg-green-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    THE ICE AGE ADVENTURES OF BUCK WILD (2022) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    A TERRIBLY PLOTTED AND POORLY OUTDATED SPIN-OFF ENDEAVOR   While DreamWorks had Shrek, Pixar has Toy Story, and Illumination Entertainment has Despicable Me, Blue Sky Animation, a subdivision under 20th Century Fox, had Ice Age as their flagship series. Created back 2002, Ice Age follows the cartoon adventures of a group of animal misfits, a Mammoth, a sloth, a sabretooth,
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
        <div class="flex bg-pink-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    THE 355 (2022) REVIEW
                </span>

                <h3 class="text-xl font-bold py-10">
                    A DERIVATE AND SHALLOW SPY ENDEAVOR   Spy movies are an acquired taste and a special brand of cinematic excitement all in their own respective class. Dashing agents in impeccable attires, with a plethora of high-tech gadgets and gizmos at their disposal, and crazy hair-raising antics to save the world from a global threat. It’s the classic spy theatricals that
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