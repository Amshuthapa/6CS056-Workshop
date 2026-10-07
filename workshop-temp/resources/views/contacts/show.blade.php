<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
</head>
<body>

    <h1>Contact Details</h1>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

    <hr>

    <p>
        <strong>ID:</strong>
        {{ $contact->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $contact->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $contact->email }}
    </p>

    <p>
        <strong>Created At:</strong>
        {{ $contact->created_at }}
    </p>

    <p>
        <strong>Updated At:</strong>
        {{ $contact->updated_at }}
    </p>

    <br>

    <a href="{{ route('contacts.edit', $contact) }}">
        Edit Contact
    </a>

</body>
</html>