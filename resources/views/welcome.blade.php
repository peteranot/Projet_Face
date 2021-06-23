<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- LINK BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* html, body {
                background-color: white;
                background-repeat: no-repeat;
                background-attachment: fixed;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            } */

            /* .full-height {
                height: 100vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
           
            .position-ref {
                position: relative;
            }
            
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            } 

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* .m-b-md {
                margin-bottom: 30px;
            } */
            .input {
                border-radius: 10%;
            }
        </style>

        <style>
          @import url("https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap");
            *,
            *::before,
            *::after {
            box-sizing: border-box;
            }

            /* body {
            margin: 0;
            padding: 0;
            font-family: "Titillium Web", sans-serif;
            } */

            .carousel {
            display: grid;
            grid-template-rows: 1fr 3fr 1.5fr;
            grid-template-columns: 50px 1fr 1fr 1fr 1fr 50px;
            row-gap: 15vh;
            position: relative;
            }

            .progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 5px;
            width: 100%;
            }
            .progress-bar__fill {
            width: 0;
            height: inherit;
            background: #c20000;
            transition: all 0.16s;
            }
            .progress-bar--primary {
            z-index: 2;
            }

            .main-post-wrapper {
            grid-row: 1/4;
            grid-column: 1/7;
            position: relative;
            }

            .slides {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            }

            .main-post {
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            }
            .main-post__image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            bottom: 0;
            }
            .main-post__image img {
            width: 100%;
            height: 100%;
            display: block;
            -o-object-fit: cover;
                object-fit: cover;
            }
            .main-post__image::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(14, 13, 14, 0.5);
            }
            .main-post__content {
            position: absolute;
            top: 40%;
            left: 4%;
            transform: translateY(-40%);
            color: #fff;
            width: 90%;
            }
            .main-post__tag-wrapper {
            margin: 0;
            display: inline-flex;
            overflow: hidden;
            }
            .main-post__tag {
            font-size: 0.95em;
            background: #c20000;
            padding: 6px 18px;
            }
            .main-post__title {
            font-weight: 700;
            font-size: 1.95em;
            line-height: 1.25;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            }
            .main-post__link {
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            display: inline-flex;
            align-items: center;
            }
            .main-post__link-text {
            font-size: 0.9em;
            }
            .main-post__link-icon--arrow {
            margin-left: 12px;
            }
            .main-post__link-icon--play-btn {
            margin-right: 12px;
            }

            .main-post__link:hover .main-post__link-text,
            .main-post__link:hover .main-post__link-icon--arrow path {
            color: #c20000;
            stroke: #c20000;
            }

            .main-post--active {
            top: 0;
            z-index: 1;
            transition: top 0.9s 0.4s ease-out;
            }

            .main-post--not-active {
            top: 100%;
            z-index: 0;
            transition: top 0.75s 2s;
            }

            .main-post.main-post--active .main-post__tag-wrapper {
            width: 25%;
            transition: all 0.98s 1.9s;
            }

            .main-post.main-post--not-active .main-post__tag-wrapper {
            width: 0;
            transition: width 0.3s 0.2s;
            }

            .main-post.main-post--active .main-post__title {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.8s 1.42s, transform 0.5s 1.4s;
            }

            .main-post.main-post--not-active .main-post__title {
            transform: translateY(40px);
            opacity: 0;
            transition: transform 0.2s 0.35s, opacity 0.5s 0.2s;
            }

            .main-post.main-post--active .main-post__link {
            opacity: 1;
            transition: opacity 0.9s 2.2s;
            }

            .main-post.main-post--not-active .main-post__link {
            opacity: 0;
            transition: opacity 0.5s 0.2s;
            }

            .posts-wrapper {
            grid-row: 3/4;
            grid-column: 3/6;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            -moz-column-gap: 14px;
                column-gap: 14px;
            z-index: 1;
            }

            .post {
            background: rgba(14, 13, 14, 0.6);
            opacity: 0.3;
            color: #fff;
            position: relative;
            padding: 16px 20px;
            }
            .post__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8em;
            }
            .post__tag {
            color: #80837e;
            }
            .post__title {
            font-weight: 400;
            font-size: 0.95em;
            line-height: 1.5;
            }
            .post--active {
            opacity: 1;
            background: rgba(14, 13, 14, 0.75);
            }
            .post:not(.post--active) {
            pointer-events: none;
            }

            .hide-on-mobile {
            display: none;
            }

            @media screen and (min-width: 768px) {
            .main-post__title {
                font-size: 2.9em;
            }
            }
            @media screen and (min-width: 1024px) {
            .hide-on-mobile {
                display: grid;
            }

            .posts-wrapper {
                grid-column: 2/6;
            }

            .hide-on-desktop {
                display: none;
            }
            }
            @media screen and (min-width: 1440px) {
            .main-post__content {
                width: 45%;
            }

            .posts-wrapper {
                grid-column: 3/6;
            }
            }
        </style>

        <style>

            /* *{
                border: black solid 1px;
            } */

            h1,h2{
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            a{
                text-decoration: none;
                color: black;
            }

            /* PRESENTATION */
            .presentation{
                background-color: rgb(239, 239, 239);
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .a_notre_sujet{
                margin-top: 3%;
            }

            #texte_in_presentation{
                margin-bottom: 5%;
            }

            .prioritary{
                z-index: 1;
            }

            #btn{
                position: fixed;
                box-shadow: 10px 5px 5px grey;
                background-color: white;
            }

            .btnF{
                color: white;
                background-color: blue;
            }

            .btnI{
                color: white;
                background-color: rgb(255, 51, 217);
            }
            
            .btnY{
                color: white;
                background-color: red;
            }

            .video{
                margin-bottom: 5%;
            }
            /* RESPONSIVE VIDEO */

            @media screen and (max-width: 835px){
                .item{
                    width:600px;
                }
            }

            @media screen and (max-width: 790px){
                .item{
                    width:550px;
                }
            }

            @media screen and (max-width: 740px){
                .item{
                    width:450px;
                }
            }

            @media screen and (max-width: 645px){
                .item{
                    width:370px;
                }
            }

            @media screen and (max-width: 558px){
                .item{
                    width:270px;
                }
            }

            @media screen and (max-width: 460px){
                .item{
                    width:190px;
                }
            }
            /* PRESENTATION */

            /* WHO */
            

            .back-g_who{
                background-color: rgb(242, 242, 242);
            }

            .equipe{
                background-color: white;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .icone{
                margin-top: 5%;
                margin-bottom: 5%;
            }
            /* Responsive row */

            @media screen and (max-width: 767px){
                .response_bloc{
                    width:600px;
                }
            }

            @media screen and (max-width: 670px){
                .response_bloc{
                    width:470px;
                }
            }

            @media screen and (max-width: 550px){
                .response_bloc{
                    width:370px;
                }
            }

            @media screen and (max-width: 461px){
                .response_bloc{
                    width:290px;
                }
            }

            @media screen and (max-width: 390px){
                .response_bloc{
                    width:250px;
                }
            }

            /* .icone_profils{
                border-radius: 100%;
            } */

                /* Conteneur principal */
            .overlay-image {
                position: relative;
                width: 90%;
            }

                /* Image originale */
            .overlay-image .image {
                border-radius: 100%;
                display: block;
                width: 100%;
                height: auto;
            }

                /* Texte original */
            .overlay-image .text {
                color: #fff;
                /* font-size: 30px; */
                line-height: 1.5em;
                text-shadow: 2px 2px 2px #000;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

            /* Responsive text */

            @media screen and (max-width: 3000px ){
                .text{
                    font-size:30px;
                }
            }

            @media screen and (max-width: 1395px){
                .text{
                    font-size:20px;
                }
            }

            @media screen and (max-width: 1200px){
                .text{
                    font-size:20px;
                }
            }

            @media screen and (max-width: 1110px){
                .text{
                    font-size:15px;
                }
            }

            @media screen and (max-width: 1024px){
                .text{
                    font-size:17px;
                }
            }

            @media screen and (max-width: 768px){
                .text{
                    font-size:17px;
                }
            }

            @media screen and (max-width: 462px){
                .text{
                    font-size:20px;
                }
            }

            @media screen and (max-width: 432px){
                .text{
                    font-size:15px;
                }
            }

            @media screen and (max-width: 375px){
                .text{
                    font-size:17px;
                }
            }

                /* Overlay */
            .overlay-image .hover {
                border-radius: 100%;
                position: absolute;
                top: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
            }

                /* Apparition overlay sur passage souris */
            .overlay-image:hover .hover {
                opacity: 1;
            }

            .overlay-image .normal {
                transition: .5s ease;
            }

            .overlay-image:hover .normal {
                opacity: 0;
            }

            .overlay-image .hover {
                background-color: rgba(0,0,0,0.5);
            }
            /* WHO */
            
            /* MISSION */
            .missions{
                background-color: rgb(239, 239, 239);
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .text_missions{
                margin-top: 5%;
            }

            /* Conteneur principal */
            .overlay-images {
                position: relative;
                width: 80%;
            }

                /* Image originale */
            .overlay-images .image {
                border-radius: 20px;
                display: block;
                width: 100%;
                height: auto;
            }

                /* Texte original */
            .overlay-images .text {
                color: #fff;
                font-size: 30px;
                line-height: 1.5em;
                text-shadow: 2px 2px 2px #000;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

                /* Overlay */
            .overlay-images .hover {
                border-radius: 20px;
                position: absolute;
                top: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
            }

                /* Apparition overlay sur passage souris */
            .overlay-images:hover .hover {
                opacity: 1;
            }

            .overlay-images .normal {
                transition: .5s ease;
            }

            .overlay-images:hover .normal {
                opacity: 0;
            }

            .overlay-images .hover {
                background-color: rgba(0,0,0,0.5);
            }

            .missions_du_bas{
                margin-top: 50px;
            }
            /* MISSION */

            /* FOOTER */
            .back-g_footer{
                background-color: rgb(242, 242, 242);
                color:rgb(239, 239, 239)
            }

            .copyright_on_footer{
                margin-top: 5%;
                margin-left: 5%;
                margin-bottom: 3%;
            }
            /* FOOTER */

            .row{
                margin:0;
                padding: 0;
            }
        </style>

    </head>
  <body>

    {{-- CAROUSEL --}}
    <div class="carousel">
        <div class="progress-bar progress-bar--primary hide-on-desktop">
            <div class="progress-bar__fill" style="width: 2%;"></div>
        </div>
        <header class="main-post-wrapper">
            <div class="slides">
                <article class="main-post main-post--not-active">
                    <div class="main-post__image">
                        <img src="https://facepolynesie.files.wordpress.com/2020/11/20201105_135536.jpg?w=1440" alt="">
                    </div>
                    <div class="main-post__content">
                        <div class="main-post__tag-wrapper">
                            <span class="main-post__tag">
                                FACE POLYNESIE
                            </span>
                        </div>
                        <h1 class="main-post__title">
                            Bienvenue sur le site de FACE POLYNESIE
                        </h1>
                        <a class="main-post__link" href="#">
                            <span class="main-post__link-text">
                                <a href="#who">Qui sommes nous ?</a>
                            </span>
                            <svg class="main-post__link-icon main-post__link-icon--arrow" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white"></path>
                            </svg>
                        </a>
                     </div>
                </article>
                <article class="main-post main-post--not-active">
                    <div class="main-post__image">
                        <img src="https://www.fr.weber/files/fr/styles/1920x1080_resize/public/pictures/2020-04/recyclage.png.jpg?itok=0eFt-Gdv" alt="">
                    </div>
                    <div class="main-post__content">
                        <div class="main-post__tag-wrapper">
                            <span class="main-post__tag">
                                Recyclage
                            </span>
                        </div>
                        <h1 class="main-post__title">
                            L'Atelier upcycling
                        </h1>
                        <a class="main-post__link" href="#">
                            <span class="main-post__link-text">
                                Retrouver ici nos produits 
                            </span>
                            <svg class="main-post__link-icon main-post__link-icon--arrow" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article class="main-post main-post--not-active">
                    <div class="main-post__image">
                        <img src="https://www.tech4islands.com/wp-content/uploads/2019/02/Face-Polynesie-inclusion-1200x675.jpg" alt="">
                    </div>
                    <div class="main-post__content">
                        <div class="main-post__tag-wrapper">
                            <span class="main-post__tag">
                                Partenaire
                            </span>
                        </div>
                        <h1 class="main-post__title">
                            Partenaire SILVER
                        </h1>
                    </div>
                </article>
            </div>
        </header>
      
        <div class="posts-wrapper hide-on-mobile">
            <article class="post">
                <div class="progress-bar">
                    <div class="progress-bar__fill" style="width: 0px;"></div>
                </div>
                <header class="post__header">
                <span class="post__tag">
                    Bienvenue!
                </span>
                <p class="post__published">
                    <!-- 17 Juin 2021 -->
                </p>
            </header>
            <h2 class="post__title">
                Face Polynésie
            </h2>
        </article>
        <article class="post">
            <div class="progress-bar">
              <div class="progress-bar__fill" style="width: 0px;"></div>
            </div>
            <header class="post__header">
                <span class="post__tag">
                    Atelier
                </span>
                <p class="post__published">
                    <!-- 12 August 2019 -->
                </p>
            </header>
            <h2 class="post__title">
                UPCYCLING!   
            </h2>
        </article>
        <article class="post post-main-not--active">
            <div class="progress-bar">
                <div class="progress-bar__fill" style="width: 2%;"></div>
            </div>
            <header class="post__header">
                <span class="post__tag">
                    En images!    
                </span>
                <p class="post__published">
                <!--  -->
                </p>
            </header>
            <h2 class="post__title">
                Partenaire SILVER 
            </h2>
        </article>
      </div>
    </div>
    
    {{-- GESTION DU COMPTE --}}
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Mon compte</a>
                <!--<a href="{{ url('/home') }}">Déconnexion</a>-->
            @else
                <!--<a href="{{ url('/home') }}">Accueil</a>-->
                <a href="{{ route('login') }}">Se connecter</a>

                {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}">S'inscrire</a>
                @endif --}}
            @endauth
            </div>
        @endif

        <div class="content" >

            <div class="title m-b-md">
                <img src="https://anavai.org/uploads/images/5e309c4ccabdc912041494.png">
            </div>

            <div class="links">
                <a href="{{ url('/home') }}">Accueil</a>
                <a href="{{ url('/home') }}">Nos Actions</a>
                <a href="{{ url('/home') }}">Entreprise Partenaires</a>
                {{-- @if (Auth::user()->id_user_type == 1 ) --}}
                <a href="{{ url('/recrutement') }}">Recrutement</a>
                {{-- @endif --}}
                <a href="{{ url('/home') }}">Nous-contactez</a>
                <a href="{{ url('/home') }}">Dons</a>
            </div>

            <br>

            <!-- PRESENTATION -->
            <div class="row" id="who" style="justify-content: center;" >

                <div class="response_bloc col-md-5 presentation" align="center">
                    <h1>
                        <a href="https://facepolynesie.org/qui-sommes-nous/">
                            Présentation
                        </a>
                    </h1>
                </div>
                
            </div>

            <div class="row mt-4" style="justify-content: left;" >
                {{-- <div class="prioritary col-md-1">
                    <div type="button">
                        <ul class="list-group mt-5" id="btn">
                            <a href="https://www.facebook.com/FACE.POLYNESIE"><li class="btnF list-group-item m-1"><i class="fab fa-facebook"></i></li></a>
                            <a href="https://www.instagram.com/facepolynesiefrancaise/"><li class="btnI list-group-item m-1"><i class="fab fa-instagram"></i></li></a>
                            <a href="https://www.youtube.com/user/laFondationFACE"><li class="btnY list-group-item m-1" aria-disabled="true"><i class="fab fa-youtube"></i></li></a>
                        </ul>
                    </div>
                </div> --}}
            </div>

            <div class="col-md-12" align="center">

                <img src="img/logo_face.jpeg" alt="logo de face polynésie" width="230" height="230">

                <h2 class="a_notre_sujet">
                    A notre sujet
                </h2>

                <p id="texte_in_presentation">
                    Crée en 2016 à l’initiative de chefs d’entreprise de grands groupes Polynésien. <br>
                    Avec l’appui d’un réseau de plus de 50 entreprises de toutes tailles, FACE Polynésie met tout en œuvre pour réduire les inégalités sociales. <br>
                    Elle construit sa politique d’intervention en lien avec les institutions polynésiennes et les entreprises socialement engagées, <br>
                    afin d’agir au plus près des habitants des quartiers prioritaires. <br>
                    FACE coordonne un réseau de clubs d’entreprises locaux, regroupant 59 entreprises, <br>
                    dont l’objet est de participer au développement économique et social de territoires en difficulté
                </p>

            </div>

            

            <div class="row" style="justify-content: center;">
                <div class="item col-md-12 video" align="center">
                    <video controls class="item">
                        <source src="video/creee-en-2016-a-linitiative-de-chefs-dentreprise-de-grands-groupes-polynesi_dvd.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <!-- PRESENTATION -->

            <br>

            <!-- WHO -->
            <div class="row" style="justify-content: center;" >

                <div class="response_bloc col-md-5 presentation" align="center">
                    <h1>
                        <a href="#">
                            Notre équipe
                        </a>
                    </h1>
                </div>
                
            </div>

            <div class="row d-flex">
                
                <div class="col-md-4 icone" align="center">
                    <div class="overlay-image">
                
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    PAUWELS Sylvain <br>
                                    Directeur
                                </div>
                            </div>
                        
                    </div>
                </div>

                <div class="col-md-4 icone" align="center">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du charger en communication"/>
                            <div class="hover">
                                <div class="text">
                                    KOHUEINUI David <br>
                                    Charger en communication
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-4 icone" align="center">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du charger en informatique"/>
                            <div class="hover">
                                <div class="text">
                                    CHEE-AYEE Christian <br>
                                    Charger en informatique
                                </div>
                            </div>
                    </div>
                </div>

            </div>
            <!-- WHO -->

            <br>

            <!-- LES MISSIONS DE FACE -->
            <div class="row" style="justify-content: center;">

                <div class="col-md-3">
                </div>

                <!-- LE LIEN SUR LE TITRE "NOS MISSIONS" EST TOTALEMENT INUTILE -->
                <div class="response_bloc col-md-6 missions" align="center">
                    <h1>
                        <a href="https://facepolynesie.org/portfolio/">
                            Nos missions
                        </a>
                    </h1>
                </div>

                <div class="col-md-3">
                </div>

            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-md-12">

                    <P class="text_missions">
                    Né de la prise de conscience des entrepreneurs du Pays du rôle sociétal qui est le leur, <br>
                    FACE Polynésie Française regroupe une cinquantaine d’entreprises engagées en faveur de la <br>
                    lutte contre toutes formes d’exclusions. FACE Polynésie vise à fédérer les moyens des <br>
                    entreprises locales pour accompagner et soutenir les actions portées par le gouvernement de Polynésie, <br>
                    le milieu associatif ou les initiatives individuelles.
                    </P>

                </div>
            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-md-3" align="center">
                    <a href="https://facepolynesie.org/portfolio/avec-les-acteurs-du-territoire/">
                        <div class="overlay-images">
                            <img class="image" src="img/img/drapeau.png" alt="icône du drapeau"/>
                                <div class="response_bloc hover">
                                    <div class="text">
                                        Acteurs du territoire
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" align="center">
                    <a href="https://facepolynesie.org/portfolio/a-lecole/">
                        <div class="overlay-images">
                            <img class="image" src="img/a-lecole.png" alt="icône du livre"/>
                                <div class="response_bloc hover">
                                    <div class="text">
                                        A l'école
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" align="center">
                    <a href="https://facepolynesie.org/portfolio/au-quotidien/">
                        <div class="overlay-images">
                            <img class="image" src="img/img/maison.png" alt="icône de la maison"/>
                                <div class="response_bloc hover">
                                    <div class="text">
                                        Au quotidien
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>
            </div>

            <br/>

            <div class="row" style="justify-content: center;">
                <div class="col-md-3" align="center">
                    <a href="https://facepolynesie.org/portfolio/dans-lentreprise/">
                        <div class="overlay-images">
                            <img class="image" src="img/img/malette.png" alt="icône de la malette"/>
                                <div class="response_bloc hover">
                                    <div class="text">
                                        Dans l'entreprise
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" align="center">
                    <a href="https://facepolynesie.org/portfolio/les-missions-de-face/">
                        <div class="overlay-images">
                            <img class="image" src="img/img/poigne.png" alt="icône de la poigne"/>
                                <div class="hover">
                                    <div class="text">

                                        Pour l'emploi
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- LES MISSIONS DE FACE -->

            <br>

            <!-- FOOTER -->
            <div class="row back-g_footer">
                <div class="col-md-12 mission" style="padding: 10px; background-color:black">
                <center>
                    <p>© 2021 ASSOCIATION FACE POLYNÉSIE</p>
                    <p>41 rue du Dr Cassiau – CCISM, 2ème étage</p>
                    <p>Développer par la TeamAlpha du RSMA-PF-ARUE en formation développeur web</p>
                </center>
                </div>
            </div>
            <!-- FOOTER -->

        </div>

    </div>


    {{-- SCRIPT CAROUSEL --}}
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>   
    <script id="rendered-js">
        let mainPosts = document.querySelectorAll(".main-post");
        let posts = document.querySelectorAll(".post");

        let i = 0;
        let postIndex = 0;
        let currentPost = posts[postIndex];
        let currentMainPost = mainPosts[postIndex];

        let progressInterval = setInterval(progress, 50); // 180

        function progress() {
            if (i === 100) {
                i = -5;
                // reset progress bar
                currentPost.querySelector(".progress-bar__fill").style.width = 0;
                document.querySelector(
                ".progress-bar--primary .progress-bar__fill").
                style.width = 0;
                currentPost.classList.remove("post--active");

                postIndex++;

                currentMainPost.classList.add("main-post--not-active");
                currentMainPost.classList.remove("main-post--active");

                // reset postIndex to loop over the slides again
                if (postIndex === posts.length) {
                postIndex = 0;
                }

                currentPost = posts[postIndex];
                currentMainPost = mainPosts[postIndex];
            } 
            else {
                i++;
                currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
                document.querySelector(
                ".progress-bar--primary .progress-bar__fill").
                style.width = `${i}%`;
                currentPost.classList.add("post--active");

                currentMainPost.classList.add("main-post--active");
                currentMainPost.classList.remove("main-post--not-active");
            }
        }
        //# sourceURL=pen.js
    </script>
    <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
  
    
  </body>
</html>
