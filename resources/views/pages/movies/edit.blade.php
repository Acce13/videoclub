@extends('layouts.app')
@section('title', 'Edit Movie')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0 text-gray-800">Edit Movie</h1>
        <a href="{{ route('movies.index') }}" class="btn btn-primary btn-circle">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('movies.update', $movie) }}" method="POST">
                @csrf
                @method('put')

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="input_name">Name</label>
                    <input type="text" name="name" id="input_name" class="form-control" placeholder="Name" value="{{ old('name', $movie->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="input_synopsis">Synopsis</label>
                    <textarea class="form-control" name="synopsis" id="input_synopsis" rows="3" placeholder="Synopsis" required>{{ old('name', $movie->synopsis) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="input_unit_price">Unit price</label>
                    <input type="number" name="unit_price" id="input_unit_price" class="form-control" placeholder="Unit price" value="{{ old('name', $movie->unit_price) }}" required>
                </div>
                <div class="form-group">
                    <label for="input_type">Type</label>
                    <select class="form-control" name="type" id="input_type" required>
                        <option value="">-- Choose a type --</option>
                        <option value="releases" {{ ($movie->type == 'releases') ? 'selected' : '' }}>Releases</option>
                        <option value="normal" {{ ($movie->type == 'normal') ? 'selected' : '' }}>Normal</option>
                        <option value="old" {{ ($movie->type == 'old') ? 'selected' : '' }}>Old</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input_gender">Gender</label>
                    <input type="text" name="gender" id="input_gender" class="form-control" placeholder="Gender" value="{{ old('gender', $movie->gender) }}" required>
                </div>
                <div class="form-group">
                    <label for="input_release_date">Release date</label>
                    <input type="date" name="release_date" id="input_release_date" class="form-control" placeholder="Release date" value="{{ old('release_date', $movie->release_date) }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection