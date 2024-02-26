@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5 ">
                <div class="card" style="width: 18rem;">
                    @if (Str::contains($project->img, 'https'))
                        <img src="{{$project['img']}}" class="card-img-top">
                    @else
                        <img src="{{ asset('/storage/' . $project->img) }}" class="card-img-top">
                    @endif
                    <div class="card-body">                    
                        <h5 class="card-title">{{$project['name']}}</h5>
                        <a class="card-text" href="{{$project['repository_link']}}">Repository link</a>
                        <p class="card-text">{{$project['description']}}</p>
                        <p class="card-text">{{$project['date_start']}}</p>
                        <p class="card-text">{{$project['date_end']}}</p>
                    </div>
                    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection