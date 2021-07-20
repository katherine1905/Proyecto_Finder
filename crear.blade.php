
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



<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <!-- img -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input id="image" type="file" name="image" class="form-control">
                <img id="preview" src="{{url('/img/c3.jpg')}}" alt="preview image" style="height:150px">
            </div>
        </div>
        <!-- title -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Titulo">
            </div>
        </div>
        <!-- category -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="categories_id">
                
                </select>
            </div>
        </div>
        <!-- description -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <!-- location -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place:</strong>
                <input type="text" name="location" class="form-control" placeholder="Sitio del evento">
            </div>
        </div>
        <!-- Fecha -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong><br>
                <input type="datetime-local" name="dateTime" value="2021-07-07T19:30" min="2021-06-01T00:00" max="2023-12-16T00:00">
            </div>
        </div>
        <!-- Precio adulto -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adult Price:</strong>
                <input type="number" name="priceAdult" class="form-control">
            </div>
        </div>
        <!-- precio ninos -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Children Price:</strong>
                <input type="number" name="priceKid" class="form-control">
            </div>
        </div>
        <!-- Disponibilidad -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Available:</strong><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="available" value="1" checked>
                <label class="form-check-label">Available</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="available" value="0">
                <label class="form-check-label">Not Available</label>
            </div>
        </div>
        <!-- Inventario -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maximum Capacity:</strong>
                <input type="number" name="inventory" class="form-control"><br>
            </div>
        </div>
        <!-- boton -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" href="events" >Add</button>
        </div>
    </div>

</form>

</body>

</html>