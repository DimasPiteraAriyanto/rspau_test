@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Pasien</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('pasien.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="text" name="name" class="form-control" placeholder="Masukan nama pasien...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No RM:</strong>
                <input type="text" name="no_rm" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Umur:</strong>
                <input type="text" name="umur" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">
                <label for="perempuan">Perempuan</label><br>
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Diagnosa:
                    <select name="id_diagnosa" id="id_diagnosa">
                        <option value="1">Common Cold</option>
                        <option value="2">Vertigo of Central origin</option>
                        <option value="3">Gout</option>
                      </select>
                </strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection
