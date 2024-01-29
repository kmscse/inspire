<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic styling for the container */
        .container {
            width: 50%;
            margin: 100px auto;
            border: 3px solid #111;
            border-radius: 30px;
            padding: 30px 20px;
            text-align: center;
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{$quote[0]['q']}}</h2>
        <h4>{{$quote[0]['a']}}</h4>
    </div>
</body>
</html>