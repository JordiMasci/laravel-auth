@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section('content-header')
    <h1 class="my-3">Lista post</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary">Crea Nuovo elemento</a>

@endsection


@section('content')
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="mx-3">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>

                @empty
                    <td colspan="6"><i>Non ci sono risultati</i></td>
                @endforelse
            </tbody>
        </table>
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
