@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-4 ">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="p-4">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Image..." >
                        </div>
                        <div class="mb-3">
                            <label for="Project Name" class="form-label">Project Name</label>
                            <input type="text" name="Project Name" class="form-control" id="Project Name" placeholder="Project Name..." >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Description..." ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="repository link" class="form-label">Repository link</label>
                            <input type="text" name="repository link" class="form-control" id="repository link" placeholder="Repository link..." >
                        </div>
                        <div class="mb-3">
                            <label for="date_start" class="form-label">Start date</label>
                            <input class="form-control" type="date" name="date_start" id="date_start">
                        </div>
                        <div class="mb-3">
                            <label for="date_end" class="form-label">End date</label>
                            <input class="form-control" type="date" name="date_end" id="date_end">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
