@extends('layouts.app')

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
                        <td></td>
                    </tr>

                @empty
                <td colspan="6"><i>Non ci sono risultati</i></td>
                @endforelse
            </tbody>
        </table>
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
