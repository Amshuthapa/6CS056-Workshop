<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>

    <h1>Contact Management</h1>

    <a href="{{ route('contacts.create') }}">Add New Contact</a>

    <hr>

    @if ($contacts->count() > 0)

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact) }}">
                                View
                            </a>

                            |

                            <a href="{{ route('contacts.edit', $contact) }}">
                                Edit
                            </a>

                            |

                            <form action="{{ route('contacts.destroy', $contact) }}"
                                  method="POST"
                                  style="display:inline;">

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

        <p>No contacts found.</p>

    @endif

</body>
</html>