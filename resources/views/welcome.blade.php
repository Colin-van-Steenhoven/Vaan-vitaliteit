<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
            color: rgb(134, 32, 65);
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        body{
            background: #F7EFDF;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        #header{
            background-color: #F7EFDF;
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        .primary-text-color{
            color: rgba(148,45,113,1);
        }
        .secondary-text-color{
            color: rgb(248, 242, 231);
        }
        .text-header-menu{
            color: #000000;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
        .first-image{
            width: 850px;
        }
        .footer{
            background-color:rgb(134, 32, 65); 
        }
        .homeimg{
            margin-top: 900px;
        }
        .waveline{
            margin-top: 630px;
        }
        #headerScrollbg{
            background-color: #2A9D8F; 
            padding: 13px; 
            color: transparent;
            text-align: center; 
            font-size: 30px;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            position: fixed; 
            width: 100%; 
            top: 0;
            animation: up 280ms linear ;
            animation-play-state: paused;
            animation-delay: calc(var(--scroll) * -1s);
        }
        #headerScroll {
            background-color: transparent; 
            padding: 13px; 
            color: black;
            text-align: center; 
            font-size: 30px;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            position: fixed; 
            width: 100%; 
            z-index: 30;
            top: 0;
            animation: up 280ms linear ;
            animation-play-state: paused;
            animation-delay: calc(var(--scroll) * -1s);
            }
            @keyframes up {
            from {
                font-size: 90px;
                padding: 400px 20px;
            }
            to {
                font-size: 30px;
                padding: 15px;

            }
            }
    </style>
    <script>
        window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
        }, false);
    </script>

</head>

<body class="text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 sticky bg py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden z-50 md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-header-menu font-bold pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Subject 1</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Subject 2</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Subject 3</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Subject 4</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Subject 5</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 z-10 md:order-2">
                <a class="flex items-left tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">

                    <!-- <h1 class="primary-text-color items-center">De Vaan Vitaliteit</h1> -->
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center z-10 " id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black primary-text-color" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

            </div>
        </div>
        <div id="headerScroll">
            <h1 class="">De Vaan Vitaliteit</h1>
        </div>

        
    </nav>
 
        <div id="headerScrollbg">
            <h1 class="">De Vaan Vitaliteit</h1>
        </div>
    <div class="waveline  relative z-10">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#F7EFDF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <div class=" homeimg flex h-screen w-full justify-center items-center ">
        <img src="/images/Ribalta_Espaco_1.jpg" alt="">
    </div>

    <div class="container mx-auto">
        <div class="relative flex h-screen">
            <img src="/images/square.png" alt="Image 1" class=" absolute h-4/5 -left-24 object-cover">
            <img src="/images/square.png" alt="Image 2" class="absolute h-4/5 top-64 left-40  object-cover">
            <div class="m-auto sm:m-auto absolute right-0 top-72 text-left w-2/5 block">
                <h2 class="text-4xl font-extrabold text-black">lorem ipsum</h2>

                <p class="py-8 text-xl font-bold italic text-gray-600">lorem ipsum</p>

                <p class="font-extrabold text-black text-l pb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptas, facilis nostrum delectus ipsam provident, minus nobis beatae deleniti eum quo quam architecto optio omnis quod repudiandae debitis atque iste.
                </p>

                <p class="font-extrabold text-black text-l pb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus doloribus hic repudiandae accusantium commodi, facilis deserunt optio cumque cupiditate aliquid vitae quasi possimus ab quia id sint, non fugiat neque.
                </p>

                <p class="font-extrabold text-black text-l pb-9">
                </p>

            <!-- <a href="/blog/who-am-i-and-why-am-i-anonymous" class="uppercase bg-blue-500 text-gray-100 text-s 
            font-extrabold py-3 px-8 rounded-3xl">
                find out more
            </a> -->
        </div>
        </div>
    </div>

    <footer class="container mx-auto py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold primary-text-color">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                    <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                        <div class="px-3 md:px-0">
                            <h3 class="font-bold  secondary-text-color">Social</h3>
                            <ul class="list-reset items-center pt-3">
                                <li>
                                    <a class="inline-block no-underline  secondary-text-color hover:text-black hover:underline py-1" href="#">Add social links</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   

</body>

</html>
