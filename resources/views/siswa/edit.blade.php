@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <form action="{{route('siswa.update', $siswa->id)}}">
                <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama"
                        value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelas</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="kelas"
                        value="{{$siswa->kelas}}">
                    </div>
                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"
                                    value="{{$siswa->alamat}}"></textarea>
                                </div>
                    <div class="form-group">
                        <label for="exampleinputpassword1">Foto</label>
                        <input type="file" class="form-control" id="exampleinputpassword1" name="foto"
                        value="{{$siswa->foto}}">
                    </div>
                    <div class="box-footer">
                            <button type="submit" class="btn btn-primary" >Update</button>
                        </div>
                </form>

                @stop
