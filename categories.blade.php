<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!--bootstrap-->

    <!--font-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!--font-->

    <link rel="stylesheet" href="/css/categories.css">

    <title>categories</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="../img/logo.png" alt="Logo de Event Finder" class="logo">
            <a href="#"><img src="../img/bell.png" alt="icono de campana" class=" bell" id="icon-pointer"></a>

            <ul class="top-nav">
                <li class="top-nav-item"><a href="/events" class="link-nav"><span class="pink-Square-item">HOME</span></a></li>

                <li class="top-nav-item"><a href="/events/categories" class="link-nav">
                        <spanclass="pink-Square-item">CATEGORIES</span>
                    </a> </li>

                <li class="top-nav-item"><a href="/registration" class="link-nav"><span class="pink-Square-item">REGISTER</span></a></li>
            </ul>
        </nav>
    </div>
    <!--TOP VAR-->

    <!--CONTENT-->
    <section class=" row justify-content-center ">
        <div class="col-10 content">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="sub-title-black">CATEGORIES</h2>

                </div>


            </div>
        </div>

    </section>

    <!--CONTENT-->


    <!--SECOND ROW-->
    @foreach ($categories as $category)

    <section class="row justify-content-center content">

        <div class="col-10 img-padding">
            <h3 class="sub-title-categorie">{{$category->name}}</h3>
            <div class="row">

                @foreach ($events as $event )

                @if($category->id == $event->categories_id)

                <div class="col-sm-3 ">
                    <a href="{{ route('events.show', $event->id) }}" class="linkImg">
                        <img src="../img/{{ $event->image}}" alt="imagen sobre comida" class="img-size">
                        <p><span class="bold-img">{{$event->title}}</span> <br>
                            {{$event->location}} /{{$event->when}} <br>
                            {{$event->starts}} <br>
                            <span class="bold-img">{{$event->type}}</span>
                        </p>
                    </a>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </section>
    @endforeach


    <!--CONTENT-->
    <!-- FOOTER -->
    <footer class="row footer">
        <div class="col-10 pl-0">
            <nav class="nav-bottom">
                <ul class="margin-bottom">
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/events">HOME <span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/events/categories">CATEGORIES<span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/registration">REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- FOOTER -->
</body>

</html>