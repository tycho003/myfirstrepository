<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <h1> Welcome, {{ Auth::user()->name }} </h1>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounde focus:shadow-outline"
            type="submit">Logout</button>
    </form>
</body>

</html>
