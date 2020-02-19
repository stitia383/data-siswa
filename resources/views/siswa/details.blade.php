@extends('layouts.master')
@section('siswa', 'active')
@section('content')
<div class="container">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Profil Siswa</h1>
            <br>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img src="{{asset('foto/'.$siswa->foto)}}" alt="profile pict" width="120px" height="130px">
                            <br><br>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <b>Nama</b>
                                        </div>
                                        <div class="col-sm-10">:
                                            {{$siswa->nama}}</>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <b>Kelas</b>
                                        </div>
                                        <div class="col-sm-10">:
                                            {{$siswa->kelas}}</>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <b>Alamat</b>
                                        </div>
                                        <div class="col-sm-10">:
                                            {{$siswa->alamat}}</>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#exampleModal">
                                Input Nilai
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Nilai</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:10px">No</th>
                                        <th>Mata Pelajaran</th>
                                        <th> Nilai</th>
                                        <th style="width:120px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa->nilai as $s)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$s->mapel}}</td>
                                        <td>{{$s->nilai}}</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class=="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Nilai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('nilai.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="mapel">Nama</label>
                                    <input type="text" class="form-control" id="mapel" placeholder="mapel" name="mapel"
                                        value="{{$siswa->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Bahasa Indonesia</option>
                                        <option>Matematika</option>
                                        <option>Fisika</option>
                                        <option>IPS</option>
                                        <option>PPKN</option>
                                        <option>Bahasa Inggris</option>
                                        <option>Olahraga</option>
                                        <option>Biologi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mapel">Nilai</label>
                                    <input type="text" class="form-control" id="mapel" placeholder="mapel" name="mapel">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Input</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>



@stop
