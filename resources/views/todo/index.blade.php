@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between ">
                    <h5>All Todos</h5>
                    <a name="" id="" class="btn btn-primary float-right" href="{{route('todos.create')}}" role="button">Add new</a>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                    <li class="list-group-item list-group-item-action">
                        {{$todo->title}}
                        @if($todo->completed)
                        <span class="badge badge-pill badge-success">Completed</span>
                        @else
                        <span class="badge badge-pill badge-danger">Uncompleted</span>
                        @endif
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
