@extends('layouts.app')

@section('content')

<form action="{{route("admin.projects.store")}}" method="POST">
    @csrf
    <label for="project-name" class="form-label">Project Name</label>
    <input type="text" id="project-name" name="name" class="form-control"
    value="{{old('name')}}">

    <label for="project-members" class="form-label">Project Members</label>
    <input type="text" id="project-members" name="members" class="form-control"
    value="{{old('members')}}">

    <label for="project-description" class="form-label">Project Description</label>
    <input type="textarea" id="project-description" name="description" class="form-control"
    value="{{old('description')}}">

    <div class="py-3">
        <button type="submit" class="btn btn-success">Inserisci Progetto</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>
</div>

@endsection
