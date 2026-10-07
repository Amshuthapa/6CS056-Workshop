<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>

    <h1>Edit Contact</h1>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

    <hr>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <br>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $contact->name) }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <br>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $contact->email) }}"
            >
        </div>

        <br>

        <button type="submit">Update Contact</button>

    </form>

</body>
</html>