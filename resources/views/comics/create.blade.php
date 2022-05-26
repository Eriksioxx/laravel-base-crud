<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label>
            <p>
                <input type="text" name="title" id="title">
            </p>
        </div>

        <div>
            <label for="thumb">Image URL:</label>
            <p>
                <input type="text" name="thumb" id="thumb">
            </p>
        </div>

        <div>
            <label for="description">Description:</label>
            <p>
                <textarea name="description"></textarea>
            </p>
        </div>

        <div>
            <label for="price">Price:</label>
            <p>
                <input type="text" name="price" id="price">
            </p>
        </div>

        <div>
            <label for="sale_date">Date:</label>
            <p>
                <input type="text" name="sale_date" id="sale_date">
            </p>
        </div>


        <button type="submit">Invia</button>
    </form>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body {
        display: flex;
        justify-content: center;

        margin-top: 50px;

        font-size: 15px;
        font-weight: bold;
    }

    form div {
        margin: 10px 0;
    }

    form input,
    textarea {
        width: 15vw;
        height: 20px;
    }

    textarea {
        height: 100px;
    }

    form button {
        float: right;
        padding: 5px 15px;
        font-size: 13px;
        font-weight: 900;
    }

</style>
