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
            @if (session()->has('success'))


            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <p class="h3">Music</p>
            <a href="{{ route('music.create') }}"><button class="btn btn-outline-dark btn-sm">Create music</button></a>
            @foreach ( $musics as $music )
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <p class="fw-bold">{{ $music->name }}</p>
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle btn-sm" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{ route('music.edit',['music'=>$music]) }}">Edit</a>
                                </li>
                                <li><a type="submit " href="">
                                        <form action=" {{ route('music.destroy', $music->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="card-text">
                        <p>{{ $music->artist }}
                            <br>
                            {{ $music->genre }}

                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>