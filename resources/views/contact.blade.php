<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

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
        #menu-toggle:checked + #menu {
            display: block;
        }
        body{
            background: rgb(248, 242, 231);
        }
        .primary-background{
            background: rgb(248, 242, 231);
        }
        .navbar-background{
            background: rgb(248, 242, 231);
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
            background: #e0d8c5f3;
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
        .underline span{
            width: 15px;
            height: 100%;
            background: #F7EFDF;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
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
            margin-top: 200px;
            margin-bottom: 0;
            margin-bottom: 0;
        }
        .bgafterwave{
            height: 800px;
            background-color: rgb(248, 242, 231);
            padding-top: 0;
            margin-top: 0;
            margin-bottom: 10px;
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
            top: 0;
            animation: up 280ms linear ;
            animation-play-state: paused;
            animation-delay: calc(var(--scroll) * -1s);
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
                        <li><a class="inline-block no-underline hover:underline primary-text-color hover:underline py-2 px-4" href="#">Home</a></li>
                        <li><a class="inline-block no-underline hover:underline primary-text-color hover:underline py-2 px-4" href="#main1">Bedrijf</a></li>
                        <li><a class="inline-block no-underline hover:underline primary-text-color hover:underline py-2 px-4" href="#">Contact</a></li>
                        <li><a class="inline-block no-underline hover:underline primary-text-color hover:underline py-2 px-4" href="#footer1">Extra info</a></li>
                        <li><a class="inline-block no-underline hover:underline primary-text-color hover:underline py-2 px-4" href="#"></a></li>
                    </ul>
                </nav>
            </div>


        </div>
        <div id="headerScroll">
            <h1 class="">De Vaan Vitaliteit</h1>
        </div>
    </nav>

    <div class="bgafterwave relative flex h-screen w-full justify-center items-center ">
        <img src="/images/Ribalta_Espaco_1.jpg" alt="">
    </div>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>

</html>
