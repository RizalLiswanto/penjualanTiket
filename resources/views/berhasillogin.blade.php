<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Profil Pengguna</h1>
    </header>

    <div class="container">
        <h1>Nama  :{{ Auth::user()->nama }}</h1>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>NO Telpon: {{ Auth::user()->noTelp }}</p>
        <p>Role: {{Auth::user()->role->name }}</p>
       <a href="{{route('film')}}">Lihat film yang tayang</a>
    </div>
</body>
</html>
