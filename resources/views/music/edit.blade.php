<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="p-4 " style="background-color:rgb(250, 250, 250) ;">
        <p class="h2">Music Gallery</p>
    </header>
    <main class="container d-flex justify-content-center align-items-center">
        <div class="col-9 mt-2">
            <p class="h3">Edit music</p>
            <form action="{{ route('music.update',['music'=>$music]) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Name</label>
                <input type="text" class="form-control mb-2" placeholder="Name" name="name" value="{{ $music->name }}"
                    required>
                <label for="">Artist</label>
                <input type="text" class="form-control mb-2" placeholder="Artist" name="artist"
                    value="{{ $music->artist }}" required>
                <label for="">Genre</label>
                <input type="text" class="form-control mb-4" placeholder="Genre" name="genre"
                    value="{{ $music->genre }}" required>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-outline-dark btn-sm">Save Music</button>
                    <a href="{{ route('music.index') }}" class=" btn btn-outline-danger btn-sm">Cancel</a>
                </div>
            </form>
        </div>
    </main>

</body>

</html>