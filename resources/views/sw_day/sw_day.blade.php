@extends('layouts.app')

@section('title', 'Page Title')

@section('styles')
    @parent
    <link href="{{{ asset('/css/sw_day.css') }}}" rel="stylesheet">
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

        <img class="sw_logo" src="{{asset('images/sw_day/sports_world_logo.svg')}}" alt="Logo">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('images/sw_day/bg_sw_day.jpg')}}" alt="Los Angeles">
                <div class="absolute-div">
                    <div class="carousel-caption">
                        <div class="text-content">
                            Sports World Day 
                            <br>5 de mayo del 2017 
                        </div>
                        <div class="buttons">
                            <button>fasd</button>
                            <button>fasd</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('images/sw_day/bg_sw_day.jpg')}}" alt="Los Angeles">
                <div class="absolute-div">
                    <div class="carousel-caption">
                        <div class="text-content">
                            Webcast 4T16, Febrero 20, 2017 
                            <br>11:00 AM CDT, 12:00 PM ET 
                            <br><button>fasd</button>
                            <br><button>fasd</button>
                        </div>
                    </div>
                </div>
            </div>
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