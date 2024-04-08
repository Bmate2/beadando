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

    <form method="post" action="{{route('lego.create')}}">
        @csrf
        <div>
            <label>Code:</label>
            <input type="text" name="code" placeholder="Code" value="{{old('code')}}"/>
        </div>
        <div>
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}"/>
        </div>
        <div>
            <label>Pieces:</label>
            <input type="text" name="pieces" placeholder="Pieces" value="{{old('pieces')}}"/>
        </div>
        <div>
            <label>Price:</label>
            <input type="text" name="price" placeholder="Price" value="{{old('price')}}"/>
        </div>
        <div>
            <input type="submit" value="Add new product">
        </div>
    </form>
    <a href="{{ route('lego.index') }}" class="btn btn-primary">Átváltás másik oldalra</a>

</body>

</html>