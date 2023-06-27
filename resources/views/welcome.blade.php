<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De Vaan Vitaliteit</title>
    <link rel="icon" href="images/2023-01-18.png" type="image/icon type">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/82d3b6429e.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    
    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
            color: rgb(134, 32, 65);
        }
        .caveat{
            font-family: 'Caveat';font-size: 22px;
        }
        .josefin-sans{
            font-family: 'Josefin Sans', sans-serif;
            color: black;
            font-weight: 500;
            background: white;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 5px;
        }
        #menu-toggle:checked + #menu {
            display: block;
        }
        body{
            background: rgb(248, 242, 231);
            
        }
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        } 
        .primary-background{
            background: #FFFFFF  ;
        }
        .navbar-background{
            background: #FFFFFF  ;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
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
            color: #4D4637;
        }
        .secondary-text-color{
            color: #585142;
        }
        .light-text-color{
            color: #726D62;
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
        footer{
            width: 100%;
            position:0;
            bottom:0;
            background: #ecd5c3;
            color: #fff;
            padding: 100px 0 30px;
            font-size: 13px;
            line-height: 20px;
        }
        .footer-logo{
            height: 60px;
            width: 60px;
        }
        .row{
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .col{
            flex-basis: 25%;
            padding: 10px;
        }
        .col:nth-child(2), .col:nth-child(3){
            flex-basis: 15%;
        }
        .logo{
            width: 80px;
            margin-bottom: 30px
        }
        .col h3{
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }
        .email-id{
            width:fit-content;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }
        .footerlist li{
            list-style: none;
            margin-bottom: 12px
        }
        .footerlist li a{
            text-decoration: none;
        }
        form{
            padding-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #4D4637;
            margin-bottom: 50px
        }
        form input{
            width: 100%;
            background: transparent;
            color: #F7EFDF;
            border: 0;
            outline: none;
        }
        form button{
            background: transparent;
            border: 0;
            outline: none;
            cursor: pointer;
        }
        form button .fas{
            font-size: 16px;
            color: #4D4637;
        }
        .social-icons .fab{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #585142;
            background: #F7EFDF;
            margin-right: 15px;
            cursor: pointer;
        }
        hr{
            width: 90%;
            border: 0;
            border-bottom: 1px solid #4D4637;
            margin: 20px auto;
        }
        .copyright{
            text-align: center;
        }
        .underline{
            width: 100%;
            height: 5px;
            background: #4D4637;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }
        @keyframes moving{
            0%{
                left: -20px;
            }
            100%{
                left: 100px;
            }
        }
        @media (max-width: 700px){
            footer{
                bottom: unset;
            }
            .col{
                flex-basis: 100%;
            }
            .col:nth-child(2), .col:nth-child(3){
                flex-basis: 100%;
            }
        }
        .waveline{
            margin-top: 500px;
            margin-bottom: 0;
            margin-bottom: 0;
        }
        .bgafterwave{
            height: 400px;
            background-color: #FFFFFF  ;
            padding-top: 0;
            margin-top: 0;
            z-index: 10;
            
        }
        .bgafterwave img{
            margin-top: 0;
            padding-top: 0;
            width: 1500px;
            height: 680px;
        }
        .infoblok{
            height: 800px;
        }
        #headerScrollbg{
            /* background-color: ;  */
            /* background: #ecd5c3 ; */
            background-image: url("images/My project-1 (3).png");
            padding: 13px; 
            color: transparent;
            text-align: center; 
            font-size: 30px;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            position: fixed; 
            width: 100%; 
            z-index: -10;
            top: 0;
            animation: up 400ms linear ;
            animation-play-state: paused;
            animation-delay: calc(var(--scroll) * -1s);
        }
        #headerScroll {
            background-color: transparent; 
            padding: 13px; 
            color: #4D4637;
            text-align: center; 
            font-size: 30px;
            font-family: 'caveat';
            font-weight: 400;
            position: fixed; 
            width: 100%; 
            z-index: 30;
            top: 0;
            animation: up 210ms linear ;
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
                padding: 13px;

            }
            }
            .contact_button{
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 6px 14px;
                font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
                border-radius: 6px;
                border: none;

                color: #fff;
                background: black;
                background-origin: border-box;
                box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
            }
            .button5 {
            background-color:  #c95e12 ;
            color: white;
            }
            .button6 {
            background-color:  #ecd5c3 ;
            color: black;
            }

            .button6:hover {
            background-color: #c9ae9a;
            color: black;
            }

            .button5:hover {
            background-color: #d28d5c;
            color: white;
            }
            .packagebutton{
            background-color:  white ;
            color: black;
            }
            .packagebutton:hover{
            background-color: #6ee7b7;
            color: black;
            }
            
            .container{
            margin: 0 auto;
        }
        .container-1{
            margin: 0 auto;
            max-width: 2000px;
        }
        .container-2{
            margin: 0 auto;
            max-width: 1830px;
        }

        .flex-container{
            display: flex;
            justify-content: space-around;
        }
        .textboxaboutme{
            background-color: #4e655b;
            color: #ecd5c3;
        }
        .images, .text{
            width: 90%;
            margin: 100px;
        }
        .images{
            width: 750px;
        }

        .images{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
        }

        .img1{
            grid-column: 1 / span 2;
            grid-row:    1 / span 2;
        }

        .img2{
            grid-column: 2 / span 2;
            grid-row:    2 / span 2;
        }
        .Image3{
            height: 800px;
            width: 800px;
        }
        .image3box{
            height: 800px;
            width: 800px;
        }
        .Borderundersection{
            /* border-bottom: #000 1px solid;
            border-top: #000 1px solid; */
            /* background-color: #ecd5c3 ; */
            background-image: linear-gradient(to right top, #4e655b, #687a6a, #858e7b, #a3a38d, #c2b8a2, #ccb99c, #d9b998, #e6b895, #e0a274, #da8c54, #d27635, #c95e12);
        }
        
        #features{
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .feature-row{
            width: 80;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            
        }
        .feature-col{
            flex-basis: 25%;
            text-align: center;
            border: solid 2px gray;
            border-radius: 8px;
        }
        .title-border{
            margin-top: 20px;
            border-bottom: solid 2px gray;
            height: 40px;
        }
        .hr-lines:before{
        content:" ";
        display: block;
        height: 2px;
        width: 410px;
        position: absolute;
        top: 90%;
        left: 6%;
        background: gray;
        }
        .hr-lines{
        position: relative;
        margin-top: 20px;
        height: 45px;
        }
        .priceplan{
        }


    </style>
    <script>
        window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
        }, false);
    </script>

</head>

<body class="text-gray-600 work-sans leading-normal text-base tracking-normal primary-background">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 sticky navbar-background py-1">
        <div id="navbar" class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex z-50 md:items-center md:w-auto w-full order-3 md:order-1 primary-text-color" id="menu">
                <nav>
                    <ul class="md:flex  items-center justify-between text-base text-header-menu font-bold pt-4 md:pt-0">
                        <li><a class="inline-block no-underline primary-text-color py-2 px-4" href="#">Home</a></li>
                        <li><a class="inline-block no-underline primary-text-color py-2 px-4" href="#main1">Bedrijf</a></li>
                        <li><a class="inline-block no-underline primary-text-color py-2 px-4" href="#main5">Over mij</a></li>
                        <li><a class="inline-block no-underline primary-text-color py-2 px-4" href="#prijzen">Prijzen</a></li>
                        <li><a class="inline-block no-underline primary-text-color py-2 px-4" href="#"></a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 z-10 md:order-2">
                <a class="flex items-left tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">

                    <!-- <h1 class="primary-text-color items-center">De Vaan Vitaliteit</h1> -->
                </a>
            </div>


        </div>
        <div id="headerScroll">
            <h1 class="josefin-sans">De Vaan Vitaliteit</h1>
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
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF " fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
        <!-- <img src="/images/vitality.png" alt=""> -->
    
        <div id="main1" class="container-1 z-20">
            <div class="flex-container bg-white w-full">
                    <div class="images">
                        <div class="image-container">
                            <img src="/images/food.jpg" alt="Image 1" class="img1 rounded-lg shadow-2xl shadow-black/20 dark:shadow-black/40">
                            <img  src="/images/devaanvrouw2smap.jpg" alt="Image 2" class="img2 rounded-lg shadow-2xl shadow-black/20 dark:shadow-black/40">
                        </div>
                    </div>
                    
                    <div class="m-auto sm:m-auto right-0 top-72 text-left w-2/5 block">
                        <h2 class="text-4xl pb-5 font-extrabold primary-text-color text-black primary-text-color">Wat we doen</h2>


                        <p class="font-extrabold secondary-text-color pb-3">
                        Bij De Vaan Vitaliteit realiseren we vitaliteitsprojecten bij bedrijven, met als doel om van werkdruk naar werkgeluk te gaan. We geloven dat een gezonde en vitale werkomgeving essentieel is voor het welzijn en de prestaties van medewerkers. 
                        </p>

                        <p class="font-extrabold secondary-text-color pb-3">
                        Onze projecten zijn gebaseerd op vijf belangrijke pijlers: voeding, beweging, ontspanning, ademhaling en slaap. Door deze pijlers te integreren, creëren we een holistische benadering van vitaliteit en streven we naar een gezonde balans op de werkvloer.
                        </p>
                        <h2 class="text-4xl pb-5  font-extrabold primary-text-color pt-10 text-black primary-text-color">Samenwerking</h2>


                        <p class="font-extrabold secondary-text-color pb-3">
                        Bij De Vaan Vitaliteit geloven we in de kracht van samenwerking en multidisciplinaire aanpak. 
                        </p>

                        <p class="font-extrabold secondary-text-color pb-3">
                        Daarom werken we nauw samen met andere disciplines, zoals een stressmanagementcoach. Door de expertise van verschillende professionals te bundelen, bieden we een breed scala aan diensten en programma's om de vitaliteit van medewerkers te bevorderen. Samen streven we naar een gezonde en gelukkige werkomgeving waarin medewerkers optimaal kunnen presteren.
                        </p>
                    </div>
            </div>
            <div id="main5"></div>
        </div>
    
    <div  class=" Borderundersection mt-20 p-6 mb-28">
    <div  class="container ">
        <div class="grid grid-cols-8 grid-rows-2 ">
            <div class=" image3box col-start-2 col-span-2 row-start-1 row-span-2">
                <img src="/images/devaanvrouw.jpg" class="Image3 rounded-md" alt="Image3">
            </div>
            <div class="textboxaboutme m-auto sm:m-auto right-0 col-start-5 col-span-4 p-6 top-72 row-start-1 row-span-2 text-left w-5/5 block shadow-2xl  rounded-md">
                <h2 class="text-4xl font-extrabold pb-7 pt-7 ">Over Mij!</h2>


                <p class="font-extrabold pb-3">
                Welkom bij De Vaan Vitaliteit! Mijn naam is Merel de Vaan en ik ben een gepassioneerde verpleegkundige en voedingsdeskundige. Mijn missie is om bewustwording te creëren op het gebied van vitaliteit en mensen te laten zien welke positieve impact voeding kan hebben op hun welzijn. Met mijn achtergrond en expertise richt ik me op het bevorderen van vitaliteit en het streven naar een gezonde levensstijl.                </p>


                <!-- <a href="contact"><button class="button button6"> Lees meer </button></a> -->
                

                <p class="font-extrabold pb-9">
                </p>

            <!-- <a href="/blog/who-am-i-and-why-am-i-anonymous" class="uppercase bg-blue-500 text-gray-100 text-s 
            font-extrabold py-3 px-8 rounded-3xl">
                find out more
            </a> -->
        </div>
        
        </div>
        <div id="prijzen"></div>
    </div>
    </div>
    
    <!-- <div class="container ">
        <div class="border-black border-solid ">
            <h1>wadwaa</h1>
        </div>
    </div> -->

<!--paketten-->


<style>
    [x-cloak] {
    display: none;
    }
</style>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

<div class="container mx-auto antialiased text-gray-900 bg-white" x-data="setup()">
  <!-- Navbar -->


  <main  class="mx-4 my-16">
    <div class="text-center" >
      <h1 class="mb-4 text-2xl font-normal md:text-3xl lg:text-4xl">
        Van <span class="font-semibold">werkdruk</span> naar<span class="font-semibold"> werkgeluk</span>
      </h1>
      <p class="text-sm font-normal text-gray-400">
      Bij De Vaan Vitaliteit zijn we toegewijd aan het bevorderen van een gezonde levensstijl, 
      </p>
      <p class="text-sm font-normal text-gray-400">
      het verbeteren van welzijn en het verminderen van stress op de werkvloer. 
      </p>
      <p class="text-sm font-normal text-gray-400">
      Samen kunnen we de weg bewandelen naar een vitale en gelukkige toekomst.
      </p>
    </div>

    <!-- Plan switch -->


    <!-- Plans -->
    <div 
         class="flex flex-col items-center justify-center mt-16 space-y-8  lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0"
         >
      <template x-for="(plan, i) in plans" x-key="i">
        <section class="priceplan flex flex-col w-full max-w-sm p-12 space-y-6 bg-gradient-to-r from-slate-50 to-blue-50  rounded-sm shadow-md">
          <!-- Price -->
          <div class="flex-shrink-0">
            <span
                  class="text-4xl font-medium tracking-tight"
                  :class="plan.name == 'Basic' ? 'text-green-500' : ''"
                  x-text="plan.price"
                  ></span>
            <span class="text-gray-400" x-text="billPlan == 'monthly' ? '/month' : ' prijs'"></span>
          </div>

          <!--  -->
          <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal" x-text="plan.name"></h2>
            <p class="text-sm text-gray-400" x-text="plan.discretion"></p>
          </div>

          <!-- Features -->
          <ul class="flex-1 space-y-4">
            <template x-for="(feature, i) in plan.features" x-key="i">
              <li class="flex items-start">
                <svg
                     class="w-6 h-6 text-green-600  flex-shrink-0"
                     aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                     >
                  <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                        />
                </svg>
                <span class="ml-3 text-base font-medium" x-text="feature"></span>
              </li>
            </template>
          </ul>

          <!-- Button -->
        </section>
      </template>
    </div>
  </main>

  <!-- Author links -->
  
</div>

<script>
    const setup = () => {
    return {
        isNavOpen: false,

        billPlan: 'none',

        plans: [
        {
            name: 'Vitality boost',
            discretion: 'Traject gericht op verbetering van leefwijze',
            price: "€214,95",
            features: ['4 individuele consulten '],
        },
        {
            name: 'Total Vitality',
            discretion: ' Uitgebreid traject gericht op verbetering van leefwijze',
            price: '€287,55' ,
            features: ['6 individuele consulten ', 'inclusief voedingsadvies', 'stressmanagementtips ', 'slaapoptimalisatie'],
        },
        {
            name: 'Team vitality',
            discretion: 'Vitaliteitsproject op maat voor uw bedrijf',
            price: 'n.o.t.k',
            features: ['Workshopreeks over voeding, beweging, ontspanning, slaap en ademhaling', 'Persoonlijke begeleiding voor werknemers', 'Persoonlijke coaching voor werknemers', 'evaluaties voor medewerkers'],
        },
        ],
    }
}
</script>

    <footer>
        <div id="footer1" class="row">
            <div class="col h-40 secondary-text-color">
                <img class="footer-logo" src="images/2023-01-18.png" alt="logo">
                <p>Van werkdruk naar werkgeluk</p>
            </div>
            <div class="col secondary-text-color">
                <h3 class="primary-text-color">Office <div class="underline"><span></span></div></h3>
                <p>De Vaan Vitaliteit</p>
                <p>Merel de Vaan</p>
                <a href="https://www.google.com/maps/place/De+Vaan+Vitaliteit/@51.5867814,4.7824352,17z/data=!4m6!3m5!1s0xf3517659e88f923:0x35d722a8ab4883cd!8m2!3d51.5867781!4d4.7850101!16s%2Fg%2F11tdrlmx20"><p>Claudius Prinsenlaan 12, 4811 DK Breda</p></a>
                <a href="mailto:devaanvitaliteit@gmail.com"> <p class="email-id">devaanvitaliteit@gmail.com</p> </a>  
                <a href="tel:123-456-7890"> <h4>+31 - 6 12345678</h4> </a>
            </div>
            <div class="col">
                <h3 class="primary-text-color">Links <div class="underline"><span></span></div></h3>
                <ul class="secondary-text-color">
                    <li><a  href="#">Home</a></li>
                    <li><a  href="#main1">Bedrijf</a></li>
                    <li><a  href="#main5">Over mij</a></li>
                    <li><a  href="#footer1">Prijzen</a></li>
                    <li><a  href="#"></a></li>
                </ul>
            </div>
            <div class="col">
                <h3 class="primary-text-color">Social media <div class="underline"><span></span></div></h3>
                <div class="social-icons secondary-text-color">
                    <i class="fab fa-brands fa-facebook "></i>
                    <i class="fab fa-brands fa-twitter"></i>
                    <i class="fab fa-brands fa-whatsapp"></i>
                    <i class="fab fa-brands fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p><div class="copyright light-text-color">copyright: Vaan Vitaliteit</div></p>
    </footer>
   
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>

</html>
