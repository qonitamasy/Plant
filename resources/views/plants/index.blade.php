<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Project Plant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Data Plant </h2>
                </div>
                <div class="pull-right mb-2">
                    {{--  ini url di route yang buat nampilih form create data --}}
                    <a class="btn btn-success" href="{{ url('/plant/data/create') }}"> Create Data Tanaman </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Tanaman</th>
                <th>Asal</th>
                <th>Desc</th>
                <th width="280px">Action</th>
            </tr>

        {{-- variable $data ini diambil dari method index di SanrioController --}}
        @foreach ($data as $item)
        <tr>
            <td>{{  $item->id }}</td>
            <td>{{  $item->Nama_Tanaman }}</td>
            <td>{{  $item->Asal_Tanaman  }}</td>
            <td>{{  $item->Deskripsi }}</td>
            <td>
                {{-- route aksi untuk hapus --}}
                <form action="{{ url("/plant/$item->id") }}" method="Post">
                    {{-- route aksi untuk edit--}}
                    <a class="btn btn-primary" href="{{ url("/plant/$item->id/edit") }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>