@extends('layout.main')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="/create"> Create Post</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        <tr>
            @php $no = 1; @endphp
            @foreach($mahasiswa as $item)
                <td>{{$no++}}</td>
                <td>{{$item->Nama}}</td>
                <td>{{$item->Jurusan}}</td>
                <td>{{$item->Kelas}}</td>
            @endforeach
            <td class="text-center">
                <form action="#" method="POST">

                    <a class="btn btn-info btn-sm" href="/show">Show</a>

                    <a class="btn btn-primary btn-sm" href="#">Edit</a>

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>

    </table>


@endsection
