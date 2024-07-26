@php
    \Carbon\Carbon::setLocale('id');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Koas | Portal Koas</title>
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
                Daftar Koas
            </h2>
            <p class="text-dark">
                Dokter Pembimbing: {{ $pengajar->nama }}
            </p>
            <div class="search-filt">
                <input class="form-control" id="myInput" type="text" placeholder="Cari koas">
                <button type="button" class="btn btn-secondary"><i class="fa-solid fa-filter"></i>  Filter</button>
            </div>
            @foreach ($batches as $batch)
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th colspan="7">
                                {{ $batch->batch_ID }} | Tgl Masuk:
                                {{ Carbon\Carbon::parse($batch->tanggal_masuk)->translatedFormat('d F Y') }} | Ketua:
                                @if (isset($ketua[$batch->NIM_ketua]))
                                    {{ $ketua[$batch->NIM_ketua]->nama_depan }}
                                    {{ $ketua[$batch->NIM_ketua]->nama_belakang }}
                                @else
                                    Tidak ditemukan
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kampus</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id="koasTable">
                        @foreach ($koas->where('batch_ID', $batch->batch_ID) as $item)
                            <tr>
                                <td>{{ $item->NIM }}</td>
                                <td>{{ $item->nama_depan }}</td>
                                <td>{{ $item->nama_belakang }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->kampusID }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </main>
    </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#koasTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
</body>

</html>
