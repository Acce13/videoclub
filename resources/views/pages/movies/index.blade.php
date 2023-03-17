@extends('layouts.app')
@section('title', 'Movies')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0 text-gray-800">Movies</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary btn-circle">
            <i class="fas fa-plus"></i>
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body table-responsive">
            @if(count($movies) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Synopsis</th>
                            <th>Unit price</th>
                            <th>Type</th>
                            <th>Gender</th>
                            <th>Release date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie->name }}</td>
                            <td>{{ $movie->synopsis }}</td>
                            <td>{{ $movie->unit_price }}</td>
                            <td>{{ $movie->type }}</td>
                            <td>{{ $movie->gender }}</td>
                            <td>{{ $movie->release_date }}</td>
                            <td>
                                <a href="{{ route('movies.edit', $movie) }}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="m-0 text-center">Empty</h3>
            @endif
        </div>
    </div>
</div>
@endsection