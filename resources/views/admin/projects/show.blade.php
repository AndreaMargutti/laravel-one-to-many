@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h1>{{$project->name}}</h1>
        </div>
        <h3>
           Made by: {{$project->members}}
        </h3>
        <p>
            {{$project->description}}
        </p>
    </div>
</div>

@endsection
