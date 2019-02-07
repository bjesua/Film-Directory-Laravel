@extends('layouts.app')

@section('content')

    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
        <div class="alert alert-success">
{{ session('status') }}
                </div>
@endif

            You are logged in!
        </div>
    </div>
</div>
</div>
</div>
-->

    <div class="container">
        <div class="row col-md-6 col-md-offset-3">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel panel-primary">
                <div class="panel-heading">Add a new film</div>
                <div class="panel-body">

                    <h2>Add a Film</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="post" action="/processCreate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="titleid" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                {{--<input name="description" type="text" class="form-control" id="titleid"--}}
                                {{--placeholder="Description">--}}
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Release Date</label>
                            <div class="col-sm-9">
                                {{--<input name="releasedate" type="text" class="form-control" id="titleid"--}}
                                {{--placeholder="Release Date">--}}
                                <div class="input-group input-append date" id="datePicker">
                                    <input type="text" class="form-control" name="date"/>
                                    <span class="input-group-addon add-on"><span
                                                class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Rating</label>
                            <div class="col-sm-9">
                                <span class="fa fa-star" id="id-1" onclick="add(this.id,1)"></span>
                                <span class="fa fa-star" id="id-2" onclick="add(this.id,2)"></span>
                                <span class="fa fa-star" id="id-3" onclick="add(this.id,3)"></span>
                                <span class="fa fa-star" id="id-4" onclick="add(this.id,4)"></span>
                                <span class="fa fa-star" id="id-5" onclick="add(this.id,5)"></span>
                                <input name="rating" type="hidden" class="form-control" id="rating"
                                       placeholder="Rating">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Ticket Price</label>
                            <div class="col-sm-9">
                                <input name="ticketprice" type="text" class="form-control" id="titleid"
                                       placeholder="Ticket Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Genre</label>
                            <div class="col-sm-9">
                                <input type="text" name="genre" id="tagsInput" placeholder="Comma separated ','"
                                       data-role="tagsinput"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                                <input name="country" type="text" class="form-control" id="titleid"
                                       placeholder="Country ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gameimageid" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <input name="image" type="file" id="gameimageid" class="custom-file-input">
                                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary"> Submit Film</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection