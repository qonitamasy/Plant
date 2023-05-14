<!DOCTYPE html>
<html lang='id'>

<head>
    <meta charset="UTF-8">
    <title> Project Data Plant </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
    </div class="row">
    </div class="col=lg-12 margin-tb">
    </div class="pull-left">
         <h2>Edit Plant</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ url('/plants') }}" enctype="multipart/form-data"> Back</a>
    </div>
  </div>
</div>
@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{  session('status') }}
  </div>
@endif

<form action="{{ url("/plant/$plant->id") }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Nama Tanaman:</strong>
                <input type="text" name="Nama_Tanaman" value="{{ old('Nama_Tanaman', $plant->Nama_Tanaman) }}"
                class="form-control" placeholder="Nama">
                @error('Nama_Tanaman')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Tanaman:</strong>
                <input type="text" name="Asal_Tanaman" class="form-control" placeholder="Asal"
                    value="{{ $plant->Asal_Tanaman }}">
                    @error('Asal_Tanaman')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Desc:</strong>
                    <input type="text" name="Deskripsi" value="{{ $plant->Deskripsi }}" class="form-control"
                    placeholder="Desc"
                    @error('Deskripsi')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Update</button>
        </div>
</form>
</div>
</body>
</html>