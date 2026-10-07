@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

    <h1>Add New Student</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Name:</label>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >

        <label>Email:</label>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
        >

        <label>Phone:</label>
        <input
            type="text"
            name="phone"
            value="{{ old('phone') }}"
        >

        <label>Date of Birth:</label>
        <input
            type="date"
            name="date_of_birth"
            value="{{ old('date_of_birth') }}"
        >

        <label>Course:</label>
        <input
            type="text"
            name="course"
            value="{{ old('course') }}"
        >

        <button type="submit">
            Save Student
        </button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Students
    </a>

@endsection