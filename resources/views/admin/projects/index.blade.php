@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">My Projects</h1>
            </div>
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
                          <a href="{{route('admin.projects.show', $project['id'])}}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection