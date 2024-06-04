<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Cat</title>
    <link href="https://fonts.googleapis.com/css2?family=Seymour+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Seymour One", sans-serif;
            font-weight: 400;
            font-style: normal;
            margin: 20px;
            text-align: center;
            background-color: #f2f2f2;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }

        img {
            display: block;
            max-width: 500px;
            margin: 0 auto;
            border: 5px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<h1>A cat that happens to be comforting</h1>
<img src="{{$img}}">
</body>
</html>
