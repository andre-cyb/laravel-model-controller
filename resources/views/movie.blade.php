<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @dump($film)
    @foreach ($film as $value)
    <section style="margin-bottom: 100px; border: 1px solid grey; padding: 20px">
        <h1>{{ $value["title"] }}</h1>
        <h3>{{ $value["original_title"] }}</h3>
        <p>{{ $value["nationality"] }}</p>
        <p>{{ $value["date"] }}</p>
        <p>{{ $value["vote"] }}</p>

    </section>
        
    @endforeach
</body>
</html>