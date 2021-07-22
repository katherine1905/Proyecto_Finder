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

    <link rel="stylesheet" href="/css/confirm.css">

    <title>Confirm</title>
</head>

<body>
    <!--TOP VAR-->
    <div class="container-fluid">
        <nav class="top-var">
            <img src="../img/logo.png" alt="Logo de Event Finder" class="logo">
            <a href="#"><img src="../img/bell.png" alt="icono de campana" class=" bell"></a>
            <a href="/register"><img src="../img/user.png" alt="Icono de usuario" class="user"></a>
            <ul class="top-nav">
                <li class="top-nav-item"><a href="/index" class="link-nav"><span class="pink-Square-item">HOME</span></a> </li>
                <li class="top-nav-item"><a href="/categories" class="link-nav"><span class="pink-Square-item">CATEGORIES</span></a> </li>
                <li class="top-nav-item"><a href="/register" class="link-nav"><span class="pink-Square-item">REGISTER</span> </a></li>
            </ul>
        </nav>
    </div>
    <!--TOP VAR-->

    <!--CONTENT-->
    <section class="row justify-content-center content">
        <div class="col-3">
            <div class="row">
                <div class="col-sm-12 ">
                    <h2 class="sub-title-black">RECIPE</h2>

                    <img src="../img/ev4.jpg" alt="banda metal" class="img">

                    <h3 class="subtitle">{{$event->title}}</h3>
                    <p class="important">{{$event->location}} <br>
                        {{$event->when}} <br>
                        {{$event->starts}} <br>
                        ${{$event->pkids}}ticket <br>
                        ${{$event->padults}}ticket
                    </p>

                    <p class="important"> {{$data["fullname"]}}
                    </p>
                    <p class="important"> {{$data["email"]}}<br>
                        Ticket(s): <br>
                        Kids: {{$data["qkids"]}}<br>
                        Adults: {{$data["qadults"]}}</p>

                    <p class="total">TOTAL: ${{$data["total"]}}</p>

                    <a href="/events" class="btn-confirm">Home</a>

                    <!--Modal -->
                    <!--<button id="myBtn">PRINT</button>-->

                    <!--The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p class="important">Thank you for your purchase!</p>
                        </div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!--CONTENT-->

    <!-- FOOTER -->
    <footer class="row footer">
        <div class="col-10 pl-0">
            <nav class="nav-bottom">
                <ul class="margin-bottom">
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/index">HOME <span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/categories">CATEGORIES<span class="bottom-simbol">|</span></a></li>
                    <li class="bottom-nav-item"><a class="bottom-nav-link" href="/register">REGISTER</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- FOOTER -->
</body>

</html>