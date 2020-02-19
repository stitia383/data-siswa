@extends('layouts.master')
@section('content')

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Foto</th>
            <th scope="col">Detail</th>
            <th scope="col">Aksi</th>
            <th><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1">
                    Tambah Data
                </button></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_siswa as $siswa)
        <tr>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->kelas}}</td>
            <td>{{$siswa->alamat}}</td>
            <td><img src="/foto/{{$siswa->foto}}" alt="" width="100px" height="120px"></td>
            <td><a href="{{route('siswa.show', $siswa->id)}}" class="btn btn-success btn-sm">Profile</a>
            <td><a class="btn btn-warning btn-sm" href="{{route('siswa.edit', $siswa->id)}}">Edit</a></td>
            <td>
                <form action="{{route('siswa.destroy', $siswa->id)}} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return(confirm('Apakah anda ingin meghapus data ini ?'))">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="modal-body">
                <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelas</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="kelas">
                    </div>
                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name=alamat></textarea>
                                </div>
                    <div class="form-group">
                        <label for="exampleinputpassword1">Foto</label>
                        <input type="file" class="form-control" id="exampleinputpassword1" name="foto">
                    </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary ">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
