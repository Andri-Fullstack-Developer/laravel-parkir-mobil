
@section('content')
    <div class="container">
        <h1>Daftar Data Parkir</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Pilihan</th>
                    <th>Nomor Plat</th>
                    <th>Lantai</th>
                    <th>Nomor Lantai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataParkir as $parkir)
                    <tr>
                        <td>{{ $parkir->pilihan }}</td>
                        <td>{{ $parkir->Nplat }}</td>
                        <td>{{ $parkir->lantai }}</td>
                        <td>{{ $parkir->nomerlantai }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
