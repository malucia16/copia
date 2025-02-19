<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Books</h1>
    <div>
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <label for="title">
                Título del libro
            </label>
            <input type="text" name="title_book" id="title" required>
            <label for="date">
                Fecha de publicación
            </label>
            <input type="date" name="date_book" id="date" required>
            <label for="genre">
                Género
            </label>
            <select name="genre_book" id="genre" required>
                <option value="Ciencia Ficción">Ciencia Ficción</option>
                <option value="Terror">Terror</option>
                <option value="Romance">Romance</option>
                <option value="Aventura">Aventura</option>
                <option value="Fantasía">Fantasía</option>
                <option value="Novela">Novela</option>
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>


    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Fecha de publicación</th>
                    <th>Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->published_at }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>
                            <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="{{ route('books.edit', $book->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>