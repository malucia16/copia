<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">
                Título del libro
            </label>
            <input type="text" name="title_book" id="title" required value="{{ $book->title }}">
            <label for="date">
                Fecha de publicación
            </label>
            <input type="date" name="date_book" id="date" required value="{{ $book->published_at }}">
            <label for="genre"> Género </label>
            <select name="genre_book" id="genre" required>
            <option value="Ciencia Ficción" {{ $book->genre == 'Ciencia Ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
            <option value="Terror" {{ $book->genre == 'Terror' ? 'selected' : '' }}>Terror</option>
            <option value="Romance" {{ $book->genre == 'Romance' ? 'selected' : '' }}>Romance</option>
            <option value="Aventura" {{ $book->genre == 'Aventura' ? 'selected' : '' }}>Aventura</option>
            <option value="Fantasía" {{ $book->genre == 'Fantasía' ? 'selected' : '' }}>Fantasía</option>
            <option value="Novela" {{ $book->genre == 'Novela' ? 'selected' : '' }}>Novela</option>
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>

</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">
                Título del libro
            </label>
            <input type="text" name="title_book" id="title" required value="{{ $book->title }}">
            <label for="date">
                Fecha de publicación
            </label>
            <input type="date" name="date_book" id="date" required value="{{ $book->published_at }}">
            <label for="genre">
                Género
            </label>
                <select name="genre_book" id="genre" required>
                    <option value="Terror">Terror</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Romance">Romance</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Fantasía">Fantasía</option>
                </select>
            <button type="submit">Guardar</button>
        </form>
    </div>

</body>
</html>-->