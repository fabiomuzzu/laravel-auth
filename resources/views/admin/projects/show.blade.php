@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5 ">
                <div class="card" style="width: 18rem;">
                    <img src="{{$project['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$project['name']}}</h5>
                        <p class="card-text">{{$project['slug']}}</p>
                        <p class="card-text">{{$project['repository_link']}}</p>
                        <p class="card-text">{{$project['descriptions']}}</p>
                        <p class="card-text">{{$project['date_start']}}</p>
                        <p class="card-text">{{$project['date_end']}}</p>
                    </div>
                    <a href="{{route('admin.projects.index', $project['id'])}}" class="btn btn-primary">Indietro</a>
                </div>
            </div>
        </div>
    </div>
@endsection