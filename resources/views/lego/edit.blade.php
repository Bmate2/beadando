<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGO Update</title>
</head>

<body>
    <div class="container">
        <h1>Update LEGO product</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('lego.edit', $lego->code) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $lego->name }}" class="form-control"
                            placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="name">Code:</label>
                        <input type="text" id="code" name="code" value="{{ $lego->code }}" class="form-control"
                            placeholder="Code">
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" value="{{ $lego->price }}" class="form-control"
                            placeholder="Price">
                    </div>

                    <div class="form-group">
                        <label for="pieces">Pieces:</label>
                        <input type="number" id="pieces" name="pieces" value="{{ $lego->pieces }}" class="form-control"
                            placeholder="Pieces">
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>