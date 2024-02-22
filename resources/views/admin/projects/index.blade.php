@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">My Projects</h1>
            </div>
            <div class="col-12 my-3">
                <button type="button" class="btn btn-primary float-end me-3 "><a class="text-decoration-none text-white" href="{{route('admin.projects.create')}}">Add Project</a></button>
            </div>
            @foreach ($projects as $project)
                <div class="col-3 my-3 ">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$project['img']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$project['name']}}</h5>
                          <a class="card-text" href="{{$project['repository_link']}}">Repository link</a>
                          <p class="card-text">{{$project['description']}}</p>
                          <p class="card-text">{{$project['date_start']}}</p>
                          <p class="card-text">{{$project['date_end']}}</p>
                          <a href="{{route('admin.projects.show', ['project'=>$project->slug])}}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection