<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
        body header{
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
        footer{
            width: 100%;
            position:0;
            bottom:0;
            background: linear-gradient(to right, #f7efdf, #b9aa87);
            color: #fff;
            padding: 100px 0 30px;
            border-top-left-radius: 125px;
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
        ul li{
            list-style: none;
            margin-bottom: 12px
        }
        ul li a{
            text-decoration: none;
            color: #fff;
        }
        form{
            padding-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            margin-bottom: 50px
        }
        form input{
            width: 100%;
            background: transparent;
            color: #ccc;
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
            color: #ccc;
        }
        .social-icons .fab{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #000;
            background: #fff;
            margin-right: 15px;
            cursor: pointer:
        }
        hr{
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }
        .copyright{
            text-align: center;
        }
        .underline{
            width: 100%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }
        .underline span{
            width: 15px;
            height: 100%;
            background: #fff;
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
    </style>
<script src="https://kit.fontawesome.com/82d3b6429e.js" crossorigin="anonymous"></script>
</head>

<body class="text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
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

            <div class="order-1 md:order-2">
                <a class="flex items-left tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">

                    <h1 class="primary-text-color items-center">De Vaan Vitaliteit</h1>
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black primary-text-color" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>
    <div class="flex h-screen w-full justify-center items-center">
        <img src="/images/Ribalta_Espaco_1.jpg" alt="">
    </div>
    <div class="picture">
        <img src="/images/Primavera.jpg" alt="" >
    </div>

    <footer>
        <div class="row">
            <div class="col h-40">
                <img class="footer-logo" src="images/2023-01-18.png" alt="logo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Neque animi sequi, modi, accusantium quasi facilis quaerat 
                    cum molestiae sapiente dolore magnam</p>
            </div>
            <div class="col">
                <h3>office <div class="underline"><span></span></div></h3>
                <p>bedrijf naam</p>
                <p>naam persoon</p>
                <p>locatie</p>
                <p class="email-id">vaan-vitaliteit@outlook.com</p>
                <h4>+91 - 01234546789</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form>
                    <i class="fas fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="subtim"><i class="fas fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-brands fa-facebook"></i>
                    <i class="fab fa-brands fa-twitter"></i>
                    <i class="fab fa-brands fa-whatsapp"></i>
                    <i class="fab fa-brands fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p><div class="copyright">copyright boelshit 2023 bla bla bla</div></p>
    </footer>
   

</body>

</html>
