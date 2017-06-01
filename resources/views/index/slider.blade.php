@extends('layouts.app')

@section('title', 'Page Title')

@section('styles')
    @parent
    <link href="{{{ asset('/css/carousel_webcast.css') }}}" rel="stylesheet">
@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                @if ($loop->first)
                    <div class="item active">
                @else
                    <div class="item">
                @endif
                        <img src="<?php echo asset("$banner->background")?>" alt="Los Angeles">
                        <div class="absolute-div">
                            <div class="carousel-caption">
                                @if($banner->tipobanner_id == 1)
                                    <div class="text-content">
                                        <p>
                                            Webcast {{$banner->periodo}}, {{$banner->fecha}} 
                                            <br>{{$banner->hora}}
                                            <br>
                                        </p>
                                        <div class="buttons">
                                            <button class="btn btn-danger"><a target="_blank" href='<?php echo asset("$banner->flyer")?>'>Invitacion</a></button>
                                            <button class="btn btn-danger"><a target="_blank" href="{{$banner->link}}">Registro</a></button>
                                        </div>
                                    </div>
                                @else 
                                    <div class="text-content">
                                        <div id="logo_sw"></div>
                                        <p>
                                            Sports World Day 
                                            <br>{{$banner->fecha}} 
                                            <br>
                                        </p>
                                        <div class="buttons">
                                            <button class="btn btn-danger"><a target="_blank" href='<?php echo asset("$banner->flyer")?>'>Invitacion</a></button>
                                            <button class="btn btn-danger"><a href="mailto:{{$banner->correo}}">Confirmar Asistencia</a></button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
@endsection