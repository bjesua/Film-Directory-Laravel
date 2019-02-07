@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">

    <div class="row col-md-offset-4 col-sm-offset-3">
        @if($data != '')
            <div class="movie-card">
                <div class="movie-header ">
                    <img class="img-responsive manOfSteel"
                         src="{{url('/images')}}/{{ $data[0]->photo }}">
                </div>
                <div class="movie-content">
                    <div class="movie-content-header">
                        <a href="">
                            <h3 class="movie-title">{{ $data[0]->name }}</h3>
                        </a>
                        <div class="imax-logo"></div>
                    </div>
                    <div class="movie-info">
                        <div class="info-section">
                            <label>Release Date</label>
                            <span>{{ $data[0]->release_date }}</span>
                        </div>
                        <div class="info-section">
                            <label>Country</label>
                            <span>{{ $data[0]->country }}</span>
                        </div>
                        <div class="info-section">
                            <label>Rating</label>
                            <span>{{ $data[0]->rating }} / 5</span>
                        </div>
                        <div class="info-section">
                            <label>Ticket Price</label>
                            <span>{{ $data[0]->ticket_price }}</span>
                        </div>
                    </div>
                    <div class="movie-info">
                        <div class="info-section-text">
                            <label>Description</label>
                            <p>{{ $data[0]->description }}</p>
                        </div>
                        <div class="info-section-text">
                            <label>Genre</label>
                            <p>{{ $data[0]->genre }}</p>
                        </div>
                    </div>


                    @if (Auth::check())
                        <div class="comment-leave">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h3>leave a comment</h3>
                            <form action="/saveComment" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_film" value="{{$data[0]->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                           placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Comment</label>
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            Login/Register to comment...
                        </div>

                    @endif



                    <h3>Comments</h3>

                    @if($data != '')
                        @foreach($data[0]->comments as $k)
                            <div class="media-slug">
                                <div class="media-body">
                                    <h4 class="media-heading">{{$k->name}} <p>{{$k->date}}</p></h4>
                                    <p>{{$k->comment}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
    </div>


@endsection


{{--galeria--}}
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>

