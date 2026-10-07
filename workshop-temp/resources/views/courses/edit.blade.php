@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

    <h1>Edit Course</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name:</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $course->name) }}"
        >

        <label>Description:</label>
        <textarea
            name="description"
            rows="4"
            cols="40"
        >{{ old('description', $course->description) }}</textarea>

        <br><br>

        <label>Price:</label>
        <input
            type="number"
            name="price"
            step="0.01"
            value="{{ old('price', $course->price) }}"
        >

        <label>Duration (days):</label>
        <input
            type="number"
            name="duration"
            value="{{ old('duration', $course->duration) }}"
        >

        <button type="submit">Update Course</button>

    </form>

    <br>

    <a href="{{ route('courses.show', $course) }}">Cancel</a>

@endsection