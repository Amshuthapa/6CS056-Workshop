@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <h1>Courses</h1>

    <a href="{{ route('courses.create') }}">Add New Course</a>

    @if($courses->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description ?? 'N/A' }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->duration }} days</td>

                        <td>
                            <a href="{{ route('courses.show', $course) }}">
                                View
                            </a>

                            <a href="{{ route('courses.edit', $course) }}">
                                Edit
                            </a>

                            <form
                                action="{{ route('courses.destroy', $course) }}"
                                method="POST"
                                style="display: inline;"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No courses found.</p>
    @endif

@endsection