<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>

    <h1>Add New Contact</h1>

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

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <div>
            <label for="name">Name:</label>
            <br>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
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
                value="{{ old('email') }}"
            >
        </div>

        <br>

        <button type="submit">Save Contact</button>

    </form>

</body>
</html>