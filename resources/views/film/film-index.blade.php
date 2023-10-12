<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Film</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .film-info {
            display: flex;
        }

        .film-poster {
            flex: 1;
            border: 2px solid cadetblue;
            background: cadetblue;
            text-align: center; 
         
        }

        .film-details {
            flex: 2;
            padding: 20px;
        }

        .film-title {
            font-size: 24px;
            font-weight: bold;
        }

        .film-year {
            color: #777;
        }

        .film-description {
            margin-top: 10px;
        }
        .gambar{
         font-size: 20px;
         color: #f4f4f4;
         padding-top: 90px;


        }
    </style>
</head>
<body>
    <header>
        <h1>Informasi Film</h1>
    </header>

    <div class="container">
        <div class="film-info">
            <div class="film-poster">
                <div class="gambar">judul film</div>
            </div>
            <div class="film-details">
                @foreach ($film as $item)
                 <h2 class="film-title"></h2>
                <p class="film-year">{{ $item->namaFilm }}</p>
                <p class="film-description">{{ $item->durasi }}</p>
                <p class="film-description">{{ $item->jamTayang }}</p>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
