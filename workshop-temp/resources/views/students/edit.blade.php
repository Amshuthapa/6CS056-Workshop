@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h1>Edit Student</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('students.update', $student) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label>Name:</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $student->name) }}"
        >

        <label>Email:</label>
        <input
            type="email"
            name="email"
            value="{{ old('email', $student->email) }}"
        >

        <label>Phone:</label>
        <input
            type="text"
            name="phone"
            value="{{ old('phone', $student->phone) }}"
        >

        <label>Date of Birth:</label>
        <input
            type="date"
            name="date_of_birth"
            value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}"
        >

        <label>Course:</label>
        <input
            type="text"
            name="course"
            value="{{ old('course', $student->course) }}"
        >

        <button type="submit">
            Update Student
        </button>

    </form>

    <br>

    <a href="{{ route('students.show', $student) }}">
        Cancel
    </a>

@endsection