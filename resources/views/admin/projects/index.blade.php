@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-3 my-3 ">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$project['img']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$project['name']}}</h5>
                          <p class="card-text">{{$project['slug']}}</p>
                          <p class="card-text">{{$project['repository_link']}}</p>
                          <p class="card-text">{{$project['descriptions']}}</p>
                          <p class="card-text">{{$project['date_start']}}</p>
                          <p class="card-text">{{$project['date_end']}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection