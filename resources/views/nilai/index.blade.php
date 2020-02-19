@extends('layouts.master')
@section('content')
<div class="container">
    <table class="table table-bordered table-dark">
        <thead>
            <tr class="table-default">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data_nilai as $nilai)
            <tr>
                <td>{{$nilai->siswa['nama']}}</td>
                <td>{{$nilai->mapel}}</td>
                <td>{{$nilai->nilai}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
