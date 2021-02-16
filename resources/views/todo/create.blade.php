@extends('layouts.app')

@section('title', 'Create Todo')
@section('content')


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Create New <span class="badge badge-success">Todo</span></h5>
                </div>

                <div class="card-body m-2">
                    <form method="POST" action="{{ route('todos.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('title') is-invalid @enderror" name="description" rows="3"></textarea>
                             @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row float-right">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
