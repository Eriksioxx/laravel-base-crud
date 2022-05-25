<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section>
        @forelse ($comics as $comic)
            <div>
                <h2>{{ $comic->title }}</h2>
                <img src={{ $comic->thumb }} alt="{{ $comic->title }} ">
                <h5>{{ $comic->sale_date }} &nbsp &nbsp<span>${{ $comic->price }}</span></h5>
                <p>{{ $comic->description }}</p>


            </div>

        @empty
            <div> Non ce n'è Comics </div>
        @endforelse
    </section>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow: scroll;
    }

    section {
        width: 1200px;
        margin: auto;
        text-align: center;

        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        flex-grow: 2;
    }

    div {
        width: 25%;
        margin: 30px 0;
    }

    h2 {
        margin: 15px;
    }

    p {
        padding: 5px 10px;
        font-size: 13px;
        text-align: justify;
    }

</style>
