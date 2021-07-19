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

    <link rel="stylesheet" href="/css/errors.css">

    <title>sold</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="../img/logo.png" alt="Logo de Event Finder" class="logo">
            <a href="#"><img src="../img/bell.png" alt="icono de campana" class=" bell" id="icon-pointer"></a>
            <a href="/register"><img src="../img/user.png" alt="Icono de usuario" class="user"
                    id="icon-pointer"></a>
            <ul class="top-nav">
                <li class="top-nav-item"><a href="/index" class="link-nav"><span
                            class="pink-Square-item">HOME</span></a></li>

                <li class="top-nav-item"><a href="/categories" class="link-nav">
                        <spanclass="pink-Square-item">CATEGORIES</span>
                    </a> </li>

                <li class="top-nav-item"><a href="/register" class="link-nav"><span
                            class="pink-Square-item">REGISTER</span></a></li>
            </ul>
        </nav>
    </div>
    <!--TOP VAR-->

    <!--CONTENT-->
    <section class=" row justify-content-center content">
        <img src="../img/oops.png" alt="imagen de error" class="img">
        <h2 class="title">OOPS!</h2>
        <h3 class="txt">it seems we don't have any more tickets</h3>
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