@vite('resources/css/app.css')
@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1  m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class=" sm:text-white text-5x1 uppercase font-bold text-shadow-md pb-14">Vaan vitaliteit</h1>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mt-20 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/vitaliteit.8b83b83a41f2.jpg') }}" 
                    width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">lorem</h2>

            <p class="py-8 text-xl font-bold italic text-gray-800">lorem</p>

            <p class="font-extrabold text-gray-600 text-l pb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis corrupti libero adipisci ipsam excepturi dolorum! Iusto enim suscipit excepturi nesciunt? Error cupiditate expedita, mollitia aliquam praesentium corrupti ipsum excepturi fuga.
            </p>

            <p class="font-extrabold text-gray-600 text-l pb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est odio dignissimos corporis quae, vel itaque officiis minima quis, nam alias facilis minus rerum aspernatur dolorum doloribus laboriosam. Repudiandae, deserunt quia.
            </p>

            <p class="font-extrabold text-gray-600 text-l pb-9">
            </p>

            <a href="" class="uppercase bg-blue-500 text-gray-100 text-s 
            font-extrabold py-3 px-8 rounded-3xl">
                find out more
            </a>
        </div>
    </div>

    <div class="text-center py-16 mt-20 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">lorem</h2>
        <span class="font-extrabold block text-4xl py-1">
        lorem
        </span>
        <span class="font-extrabold block text-4xl py-1">
        lorem
        </span>
        <span class="font-extrabold block text-4xl py-1">
        lorem
        </span>
        <span class="font-extrabold block text-4xl py-1">
            lorem
        </span>
        <span class="font-extrabold block text-4xl py-1">
        lorem
        </span>

    </div>

    <!-- <div class="text-center py-15 mt-20">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Adipisci reprehenderit distinctio, doloremque culpa
              voluptatibus facere recusandae,
        </p>
    </div> -->

    <div class="sm:grid mt-20 grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="text-2xl font-extrabold">
                    lorem lorem lorem
                </span>

                <h3 class="tetx-xl font-bold py-10">I
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium at labore, quos et dolores reiciendis sunt cum nihil dolorum perferendis tenetur ratione sequi nemo quis vero? Porro facilis deserunt assumenda?
                </h3>

                <!-- <a 
                    href="" 
                    class="uppercase bg-transparent border-2 border-gray-100 textx-gray-100 text-xs font-extrabold
                    py-3 px-5 rounded-3xl">
                    find out more
                </a> -->
            </div>

        </div>
        <div>
                <img src="https://cdn.pixabay.com/photo/2016/11/29/06/15/plans-1867745_960_720.jpg" 
                    width="700" alt="">
            </div>
    </div>
@endsection

