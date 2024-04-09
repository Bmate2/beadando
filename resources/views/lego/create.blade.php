<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include("layouts.navbar")
    <h1>Create a LEGO product</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('lego.create') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="code">Code:</label>
                        <input type="text" id="code" name="code" class="form-control" placeholder="Code">
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Price">
                    </div>

                    <div class="form-group">
                        <label for="pieces">Pieces:</label>
                        <input type="number" id="pieces" name="pieces" class="form-control" placeholder="Pieces">
                    </div>

                    <div class="display:flex mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Add LEGO</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>


</body>

</html>