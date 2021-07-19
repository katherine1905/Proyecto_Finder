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

    <link rel="stylesheet" href="/css/reservation.css">

    <title>Reservation</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="../img/logo.png" alt="Logo de Event Finder" class="logo">
            <a href="#"><img src="../img/bell.png" alt="icono de campana" class=" bell"></a>
            <a href="/register"><img src="../img/user.png" alt="Icono de usuario" class="user"></a>
            <ul class="top-nav">
                <li class="top-nav-item"><a href="/events" class="link-nav"><span
                            class="pink-Square-item">HOME</span></a> </li>
                <li class="top-nav-item"><a href="/categories" class="link-nav"><span
                            class="pink-Square-item">CATEGORIES</span></a> </li>
                <li class="top-nav-item"><a href="/register" class="link-nav"><span
                            class="pink-Square-item">REGISTER</span> </a></li>
            </ul>
        </nav>
    </div>
    <!--TOP VAR-->

    <!--CONTENT-->
    <section class="row justify-content-center content">
        <div class="col-10">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="sub-title-black">RESERVATIONS</h2>

                    <img src="../img/{{ $event-> image }}" alt="imagen de banda de metal" class="img">
                    <img src="../img/18.png" alt="mayor de edad icono" class="icon18">

                    <h3 class="subtitle">Lorem ipsum dolor sit amet </h3>
                    <p class="important">La Sabana, San José <br>
                        May 20th <br>
                        7pm - 11pm <br>
                        $10 ticket</p>

                        <a href="/events" class="btn-return">RETURN</a>
                </div>

                <!--STEPS FORM-->
                <div class="col-sm-6">
                    <ul class="nav-steps">
                        <li class="top-nav-item"><a href="/reservation" class="nav-link"><span class="nav-link-backgroud">Set
                                    information</span></a></li>
                        
                    </ul>
                    <!--STEPS FORM-->

                    <div class="row labels">
                        <label for="">FULL NAME</label>
                        <input type="text" class="text-field">
                    </div>
                    <div class="row labels">
                        <label for="">E-MAIL</label>
                        <input type="text" class="text-field">
                    </div>
                    <div class="row labels">
                        <label for="">CREDIT</label>
                        <input type="text" class="text-field">
                    </div>
                    <div class="row labels">
                        <label for="">SECURITY PIN</label>
                        <input type="text" class="text-field">
                    </div>

                    <!--SLIDER-->
                    <div class="slidecontainer">
                        <input type="range" min="1" max="5" value="1" class="slider" id="myRange">
                        <p> Max-Tickets-Adults: <span id="demo"></span></p>

                        
                    </div>

                    <script>
                        var slider = document.getElementById("myRange");
                        var output = document.getElementById("demo");
                        output.innerHTML = slider.value;

                        slider.oninput = function () {
                            output.innerHTML = this.value;
                        }
                    </script>
                    <!--SLIDER-->

                    <a href="/events" class="btn-book">BOOK</a>
                </div>
                <!--STEPS FORM-->
            </div>
        </div>
    </section>
    <!--CONTENT-->

    <!-- FOOTER -->
    <footer class="row footer">
        <div class="col-10 pl-0">
            <nav class="nav-bottom">
                <ul class="margin-bottom">
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/index">HOME <span
                                class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link"
                            href="/categories">CATEGORIES<span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/register">REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- FOOTER -->
</body>

</html>