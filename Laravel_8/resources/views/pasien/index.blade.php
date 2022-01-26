@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL 8</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('pasien.create') }}"> Input Pasien</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">ID</th>
            <th width="280px"class="text-center">No.RM</th>
            <th width="280px"class="text-center">Nama</th>
            <th width="280px"class="text-center">Umur</th>
            <th width="280px"class="text-center">Jenis Kelamin</th>
            <th width="280px"class="text-center">Diagnosa</th>
            <th width="280px"class="text-center">Aksi</th>
        </tr>
        @foreach ($pasiens as $pasien)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $pasien->no_rm }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->umur }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->id_diagnosa }}</td>

            <td class="text-center">
                <form action="{{ route('pasien.destroy',$pasien->id) }}" method="POST">
                    <a class="btn btn-primary btn-sm" href="{{ route('pasien.edit',$pasien->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $pasien->name }}?')">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>

    {!! $pasiens->links() !!}

@endsection
