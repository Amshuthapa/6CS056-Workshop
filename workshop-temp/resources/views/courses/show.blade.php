@extends('layouts.app')

@section('title', 'Course Details')

@section('content')

    <h1>Course Details</h1>

    <p><strong>Name:</strong> {{ $course->name }}</p>

    <p>
        <strong>Description:</strong>
        {{ $course->description ?? 'N/A' }}
    </p>

    <p><strong>Price:</strong> {{ $course->price }}</p>

    <p><strong>Duration:</strong> {{ $course->duration }} days</p>

    <br>

    <a href="{{ route('courses.edit', $course) }}">Edit Course</a>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

@endsection