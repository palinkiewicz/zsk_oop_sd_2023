<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="register_user" method="get">
        First name: <input type="text" name="first_name" value="{{ old('first_name') }}"><br>
        Last name: <input type="text" name="last_name" value="{{ old('last_name') }}"><br>
        Email: <input type="email" name="email" value="{{ old('email') }}"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>