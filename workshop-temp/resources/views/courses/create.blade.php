@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

    <h1>Add New Course</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <label>Name:</label>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >

        <label>Description:</label>
        <textarea
            name="description"
            rows="4"
            cols="40"
        >{{ old('description') }}</textarea>

        <br><br>

        <label>Price:</label>
        <input
            type="number"
            name="price"
            step="0.01"
            value="{{ old('price') }}"
        >

        <label>Duration (days):</label>
        <input
            type="number"
            name="duration"
            value="{{ old('duration') }}"
        >

        <button type="submit">Save Course</button>

    </form>

    <br>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

@endsection