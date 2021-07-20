<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!--bootstrap-->

    <!--font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!--font-->

    <link rel="stylesheet" href="/css/index.css">
    <title>EventFinder</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="./img/logo.png" alt="Logo de Event Finder" class="logo">
            <img src="./img/mobileLogo.png" alt="logo mobile" class="mobileLogo">
            <a href="#"><img src="./img/bell.png" alt="icono de campana" class=" bell"></a>
            <ul class="top-nav">
                <li class="top-nav-item"><a href="/events" class="link-nav"><span
                            class="pink-Square-item">HOME</span></a> </li>
                <li class="top-nav-item"><a href="/categories" class="link-nav"><span
                            class="pink-Square-item">CATEGORIES</span></a> </li>
                <li class="top-nav-item"><a href="/registration" class="link-nav"><span
                            class="pink-Square-item">REGISTER</span> 
            </a></li>
            </ul>

            <!--MOBILE-->
            <div class="icono-menu">
                <img src="./img/menu.png" alt="icono menu" id="hambuerguesa" class="hambuerguesa">
        
                <div class="cont-menu active" id="menu">
                    <ul class="cont-menu ul li">
                        <li><a id="Menu" href="/events">HOME</a></li>
                        <li><a id="Menu" href="/categories">CATEGORIES</a></li>
                        <li><a id="Menu" href="/registration">REGISTER</a></li>
                    </ul>
                </div>
            </div>
        
            <script src="home.js">
        
            </script>
            <!--MOBILE-->
        </nav>
    </div>
    <!--TOP VAR-->

    <!--COVER PAGE-->
    <section class="cover-page-img">
        <h1 class="cover-text1">ARE YOU LOOKING FOR THE UNEXPECTED? <br>
            ARE YOU LOOKING FOR THINGS YOU’VE NEVER SEEN BEFORE?</h1>
        <h2 class="cover-text2">LET’S GET STARTED!</h2>
        <img src="./img/lupa.png" alt="icono de lupa" class="lupa">
        <input type="text" class="searcher" placeholder=" search" maxlength="50">
    </section>
    <!--COVER PAGE-->

    <!--COMING SOON-->
    <section class="row justify-content-center coming-section">
        <h2 class="sub-title-black" id="sub-title-padding">COMING SOON </h2>

        <div class="col-10 img-padding">
            <div class="row">
                @foreach ($events as $event)
                    
                    <div class="col-sm-3 ">
                        <a href="{{ route('events.show', $event->id) }}" class="linkImg">
                            <img src="./img/{{ $event->image}}" alt="imagen sobre caridad" class="img-size">

                            <p><span class="bold-img">{{$event->title}} </span> <br>
                                {{$event->location}} / {{$event->when}} <br>
                                {{$event->starts}} <br>
                                <span class="bold-img">{{$event->type}}</span>
                            </p>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!--COMING SOON-->

    <!--RECENT EVENTS-->
    <section class="row recent-events-section">
        <div class="col-10">
            <div class="row">
                <div class="col-sm-7">
                    <h2 class="sub-title-white">
                        RECENT EVENTS
                    </h2>

                    <p class="recent-events-txt">
                        Lorem ipsum dolor sit amet, consectetuer <br>
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut <br>
                        laoreet dolore magna aliquam erat volutpat. <br>
                    </p>
                    <p class="recent-events-txt">
                        Lorem ipsum dolor sit amet, consectetuer <br>
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut <br>
                        laoreet dolore magna aliquam erat volutpat. <br>
                    </p>

                    <a href="/categories" class="btn-see-more">SEE MORE</a>
                </div>

                <div class="col-sm video">
                    <div style="padding:75% 0 0 0;position:relative;">
                        <iframe
                            src="https://player.vimeo.com/video/549781270?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                            title="Video resumen Evento 35 Aniversario Cerviglas.mp4">
                        </iframe>
                    </div>
                    <script src="https://player.vimeo.com/api/player.js"></script>
                </div>
            </div>
        </div>
    </section>
    <!--RECENT EVENTS-->

    <!--STAY TUNE-->
    <section class="row stay-tune-section">
        <div class="col-12">
            <div class="row">
                <div class="col-sm">
                    <h2 class="sub-title-white">STAY TUNE!</h2>

                    <p class="stay-tune-txt">
                        Lorem ipsum dolor sit amet, consectetuer <br>
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut <br>
                        laoreet dolore magna aliquam erat volutpat. <br>
                    </p>
                </div>

                <div class="col-sm stay-tune-txt-position">
                    <p class="stay-tune-txt">
                        Lorem ipsum dolor sit amet, consectetuer <br>
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut <br>
                        laoreet dolore magna aliquam erat volutpat. <br>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-10 stay-tune-icons-position">
            <div class="row">
                <div class="col-sm">
                    <img src="./img/twi.png" alt="twitter icon" class="stay-tune-icons">

                    <img src="./img/F.png" alt="facebook icon" class="stay-tune-icons">

                    <img src="./img/insta.png" alt="instagram icon" class="stay-tune-icons">

                    <img src="./img/b.png" alt="basket ball icon" class="stay-tune-icons">
                </div>
            </div>
        </div>

    </section>
    <!--STAY TUNE-->

    <!--SHARE-->
    <section class="row share-section">
        <div class="col-10">
            <div class="row">
                <div class="col-sm">
                    <h2 class="sub-title-black">SHARE YOUR FEEDBACK</h2>

                    <p class="share-text">
                        “Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut <br>

                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation.” <br>
                    </p>

                    <p class="share-text-author">-Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </section>
    <!--SHARE-->

    <!--CONTACT-->
    <section class="row contact-section">
        <div class="col-10">
            <div class="row">
                <div class="col-sm">
                    <h2 class="sub-title-white">CONTACT</h2>
                    <div class="row labels">
                        <label for="">FULL NAME</label>
                        <input type="text" class="text-field">
                    </div>
                    <div class="row labels">
                        <label for="">E-MAIL</label>
                        <input type="text" class="text-field">
                    </div>
                </div>
                <div class="col-sm contact-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet nonummy nibh euismod aliquam erat volutpat.
                    </p>
                </div>
            </div>
            <div class="row labels">
                <label for="">MESSAGE</label>
                <textarea name="" id="" cols="30" rows="10" class="message-txtField"></textarea>
                <a href="#" class="btn-message">MESSAGE</a>
            </div>
        </div>
    </section>
    <!--CONTACT-->

    <!-- FOOTER -->
    <footer class="row footer">
        <div class="col-10 pl-0">
            <nav class="nav-bottom">
                <ul class="margin-bottom">
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/events">HOME <span
                                class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link"
                            href="/categories">CATEGORIES<span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/registration">REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>

    </footer>
    <!-- FOOTER -->
</body>

</html>