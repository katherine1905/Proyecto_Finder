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

    <link rel="stylesheet" href="/css/detalleEvento.css">

    <title>Detalle</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="/img/logo.png" alt="Logo de Event Finder" class="logo">
            <a href="#"><img src="/img/bell.png" alt="icono de campana" class=" bell" id="icon-pointer"></a>
            
            <ul class="top-nav">
                <li class="top-nav-item"><a href="/events" class="link-nav"><span
                            class="pink-Square-item">HOME</span></a> </li>
                <li class="top-nav-item"><a href="/events/categories" class="link-nav"><span
                            class="pink-Square-item">CATEGORIES</span></a> </li>
                <li class="top-nav-item"><a href="/registration" class="link-nav"><span
                            class="pink-Square-item">REGISTER</span> </a></li>
            </ul>
        </nav>
    </div>
    <!--TOP VAR-->

    <section class="row justify-content-center">
        <div class="col-10 content">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="sub-title-black">COMING SOON</h2>

                    <img src="/img/{{ $event-> image }}" alt="imagen de evento" class="img">
                    <img src="/img/18.png" alt="mayor de edad icono" class="icon18">


                    
                </div>

                <div class="col-sm-4">
                    <h3 class="subtitle">{{ $event->title}} </h3>

                    <div class="move-around">
                    <p>{{ $event->description }}</p>
                    </div>

                    <p class="important">{{ $event->location}} <br>
                        {{ $event->when}} <br>
                        7pm - 11pm <br>
                        ${{ $event->padults }} ticket<br>
                        ${{ $event->pkids }} ticket</p>

                        <a href="/events/book/{{$event->id}}" class="btn">BOOK</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="row footer">
        <div class="col-10 pl-0">
            <nav class="nav-bottom">
                <ul class="margin-bottom">
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/events">HOME <span
                                class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link"
                            href="/events/categories">CATEGORIES<span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/registration">REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>

    </footer>
    <!-- FOOTER -->
</body>

</html>