@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Pasien</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pasien.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Pasien.." value="{{ $pasien->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No RM:</strong>
                <input type="text" name="no_rm" value="{{ $pasien->no_rm }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Umur:</strong>
                <input type="text" name="umur" value="{{ $pasien->umur}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong><br>
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" {{$pasien->jenis_kelamin == 'Laki-laki'? 'checked' : ''}}>
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" {{$pasien->jenis_kelamin == 'Perempuan'? 'checked' : ''}}>
                <label for="perempuan">Perempuan</label><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection
