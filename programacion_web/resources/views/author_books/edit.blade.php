<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<div>
        <form action="{{ route('authors_books.update', $authorBook->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="author_id">Autor</label>
            <select name="id_author" id="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            <label for="book_id">Libro</label>
            <select name="id_book" id="book_id">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>


</body>
</html>