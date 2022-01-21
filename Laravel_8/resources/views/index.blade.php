@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL 8</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('pasienn.create') }}"> Input Pasien</a>
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
            <th>NIS</th>
            <th width="280px"class="text-center">No.RM</th>
            <th width="280px"class="text-center">Nama</th>
            <th width="280px"class="text-center">Umur</th>
            <th width="280px"class="text-center">Jenis Kelamin</th>
            <th width="280px"class="text-center">Diagnosa</th>
            <th width="280px"class="text-center">Aksi</th>
        </tr>
        @foreach ($pasienn as $pasien)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->no_rm }}</td>
            <td>{{ $pasien->umur }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->id_diagnosa }}</td>

            <td class="text-center">
                <form action="{{ route('pasienn.destroy',$pasien->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('pasienn.show',$pasien->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('pasienn.edit',$pasien->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $pasienn->links() !!}

@endsection
