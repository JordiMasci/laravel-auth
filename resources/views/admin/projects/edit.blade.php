@extends('layouts.app')

@section('content-header')
    <h1 class="my-3">Crea Post</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">Torna alla lista</a>
    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-outline-primary">Mostra dettaglio</a>
@endsection

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="row">
            @method('PATCH')
            @csrf

            <div class="col-12 my-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
            </div>

            <div class="col-12 mb-4">
                <label for="content" class="form-label">Contenuto</label>
                <textarea name="content" id="content" class="form-control" rows="5">{{$project->content}}</textarea>
            </div>

            <div class="col-12 mb-4">
                <button class="btn btn-secondary">Salva</button>
            </div>

        </form>

    </div>
@endsection
