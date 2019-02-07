@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">

    <div class="row col-md-offset-1 col-sm-offset-1">
        @if($data != '')
            @foreach($data as $k)
            <div class="movie-card">
                <div class="movie-header ">
                    <img class="img-responsive manOfSteel"
                         src="{{url('/images')}}/{{ $k->photo }}">
                </div><!--movie-header-->
                <div class="movie-content">
                    <div class="movie-content-header">
                        <a href="films/{{ $k->url }}">
                            <h3 class="movie-title">{{ $k->name }}</h3>
                        </a>
                        <div class="imax-logo"></div>
                    </div>
                    <div class="movie-info">
                        <div class="info-section">
                            <label>Release Date</label>
                            <span>{{ $k->release_date }}</span>
                        </div><!--date,time-->
                        <div class="info-section">
                            <label>Country</label>
                            <span>{{ $k->country }}</span>
                        </div><!--screen-->
                        <div class="info-section">
                            <label>Rating</label>
                            <span>{{ $k->rating }} / 5</span>
                        </div><!--row-->
                        <div class="info-section">
                            <label>Ticket Price</label>
                            <span>{{ $k->ticket_price }}</span>
                        </div><!--seat-->
                    </div>
                    <div class="movie-info">
                        <div class="info-section-text">
                            <label>Description</label>
                            <p>{{ $k->description }}</p>
                        </div>
                        <div class="info-section-text">
                            <label>Genre</label>
                            <p>{{ $k->genre }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>


@endsection
