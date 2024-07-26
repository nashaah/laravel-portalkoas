<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Portal Koas</title>
    <!-- Bootstrap CSS -->
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    @include('pelajar/navpelajar')
    <main class="col-md-9 ms-sm-auto
                        col-lg-10 px-md-4 ">
        <div class="pt-3">
            <h2 class="text-primary">
                Dashboard
            </h2>
            <p class="text-dark">
                Selamat Datang, <strong>{{ $pelajar->nama_depan }} {{$pelajar->nama_belakang}}</strong>
            </p>
            <p class="text-dark">
                TypeScript is a strict superset
                of JavaScript, which means anything
                that is implemented in JavaScript
                can be implemented using TypeScript
                along with the choice of adding
                enhanced features. It is an Open Source
                Object Oriented programming language and
                strongly typed language. As TS code is
                converted to JS code it makes it easier
                to integrate into JavaScript projects.
                The TypeScript Tutorial provides the
                complete guide from beginner to
                advanced level.
            </p>
        </div>
    </main>
    </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
