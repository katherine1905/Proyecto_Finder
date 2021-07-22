
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

    <link rel="stylesheet" href="/css/app.css">
    <title>EventFinder</title>
</head>

<body>



<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <!-- img -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input id="image" type="file" name="image" class="form-control">
                <img id="preview" src="{{url('/img/c4.jpg')}}" alt="preview image" style="height:250px">
            </div>
        </div>
        <!-- title -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Titulo">
            </div>
        </div>
      
        
        <!-- description -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <!-- Type -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                <input type="text" name="type" class="form-control" placeholder="Sitio del evento">
            </div>
        </div>
        <!-- location -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="text" name="location" class="form-control" placeholder="Sitio del evento">
            </div>
        </div>
        <!-- Fecha -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong><br>
                <input type="datetime-local" name="when" value="2021-07-07T19:30" min="2021-06-01T00:00" max="2023-12-16T00:00">
            </div>
        </div>
            <!-- Stars-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Starts:</strong>
                <input type="number" name="starts" class="form-control">
            </div>
        </div>

        <!-- Duration-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
                <input type="number" name="duration" class="form-control">
            </div>
        </div>

        <!-- Status-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="number" name="status" class="form-control">
            </div>
        </div>

        <!-- Store-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Store:</strong>
                <input type="number" name="store" class="form-control">
            </div>
        </div>
        <!-- Precio adulto -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adult Price:</strong>
                <input type="number" name="padults" class="form-control">
            </div>
        </div>
        <!-- precio ninos -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Children Price:</strong>
                <input type="number" name="pkids" class="form-control">
            </div>
        </div>
        
        <!-- boton -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" >Add</button>

        </div>
    </div>
<a href="/events" class="btn-confirm">Home</a>
</form>

</body>

</html>