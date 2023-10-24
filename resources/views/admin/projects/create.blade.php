@extends('layouts.app')

@section('content-header')
    <h1 class="my-3">Crea Post</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">Torna alla lista</a>
@endsection

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('admin.projects.store') }}" class="row">
            @csrf

            <div class="col-12 my-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="col-12 mb-4">
                <label for="content" class="form-label">Contenuto</label>
                <input type="text" name="content" id="content" class="form-control">
            </div>

            <div class="col-12 mb-4">
                <button class="btn btn-secondary">Salva</button>
            </div>

        </form>

    </div>
@endsection
