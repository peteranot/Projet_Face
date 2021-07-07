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
		
		<!-- CAROUSEL CSS -->
		<link href="css/carousel.css" rel="stylesheet">
		<!-- STYLE CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- MENU CSS -->
		<link href="css/menu.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
		
		
		
		
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


    </head>
  <body>
	{{-- MENU --}}
	<nav>
		<div class="logo"><img src="img/logo_face.jpeg" alt="logo de face polynésie" width="50" height="45"></div>
		<div class="openMenu"><i class="fa fa-bars"></i></div>
		<div class="links">
			<ul class="mainMenu">
				<li>
					<a href="{{ url('/home') }}">Accueil</a>
				</li>
				<li>
					<a href="https://facepolynesie.org/nos-actions/">Nos Actions</a>
				</li>
				<li>
					<a href="https://facepolynesie.org/entreprises-partenaires/">Entreprise Partenaires</a>
				</li>
				<li>
					{{-- @if (Auth::user()->id_user_type == 1 ) --}}
					<a href="{{ url('/recrutement') }}">Recrutement</a>
					{{-- @endif --}}
				</li>
				<li><a href="https://facepolynesie.org/nous-contactez/">Nous-contactez</a></li>
				<li><a href="https://facepolynesie.org/faites-un-dons/">Dons</a></li>
				<li>
					@if (Route::has('login'))
					<div class="links">
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
				</li>
				<div class="closeMenu"><i class="fa fa-times"></i></div>
			</ul>
		</div>
	</nav>
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
    
    {{-- CONTENUE --}}
    <div class="flex-center position-ref full-height">
        
        <div class="content" >

            <div class="title m-b-md">
                <img src="https://anavai.org/uploads/images/5e309c4ccabdc912041494.png">
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
	{{-- SCRIPT MENU --}}
    <script type="text/javascript" src="js/menu.js"></script>
  </body>
</html>
