@php
    \Carbon\Carbon::setLocale('id');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan | Portal Koas</title>
    <!-- Bootstrap CSS -->
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('pengajar/navpengajar')
    <main class="col-md-9 ms-sm-auto
                        col-lg-10 px-md-4 ">
        <div class="pt-3">
            <h2 class="text-primary">
                Jadwal Bimbingan
            </h2>
            <button type="button" class="btn btn-primary addbim"><i class="fa-solid fa-plus"></i>    Bimbingan Baru</button>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Batch</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Topik</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bimbingan as $item)
                        <tr>
                            <th>{{ $item->batchID }}</th>
                            <td>{{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</td>
                            <td>{{ $item->waktu }} WIB</td>
                            <td>{{ $item->topik }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->type }}</td>
                            <td><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
