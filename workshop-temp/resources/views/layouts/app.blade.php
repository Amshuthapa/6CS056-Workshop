<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Workshop 2')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        a, button {
            margin-right: 8px;
        }

        .success {
            padding: 10px;
            background: #d4edda;
            margin-bottom: 20px;
        }

        .error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        form {
            margin-top: 20px;
        }

        input {
            display: block;
            margin: 5px 0 15px;
            padding: 8px;
            width: 300px;
        }
    </style>
</head>

<body>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</body>
</html>