@extends('layouts.master')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')

<div class="content-wrapper" style="min-height: 926px;">
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{$siswa->count()}}</h3>
                                <p>Data siswa</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="/data-siswa" class="small-box-footer">Lihat <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{$nilai->count()}}</h3>
                                <p>Data nilai</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="data-nilai" class="small-box-footer">Lihat <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{$siswa->count()}}</h3>
                                <p>Rangking</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="rangking" class="small-box-footer">Lihat <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
