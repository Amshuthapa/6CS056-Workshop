@extends('layouts.app')

@section('title', 'Students')

@section('content')

    <h1>Students</h1>

    <a href="{{ route('students.create') }}">Add New Student</a>

    @if($students->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            {{ $student->date_of_birth?->format('Y-m-d') ?? 'N/A' }}
                        </td>
                        <td>{{ $student->age ?? 'N/A' }}</td>
                        <td>{{ $student->course ?? 'N/A' }}</td>

                        <td>
                            <a href="{{ route('students.show', $student) }}">
                                View
                            </a>

                            <a href="{{ route('students.edit', $student) }}">
                                Edit
                            </a>

                            <form
                                action="{{ route('students.destroy', $student) }}"
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
        <p>No students found.</p>
    @endif

@endsection