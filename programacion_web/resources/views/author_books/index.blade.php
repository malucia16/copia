<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Authors Books</h1>
    <div>
        <form action="{{ route('authors_books.store') }}" method="POST">
            @csrf
            <div id="inputs">
            </div>
            <button type= "button" onclick= "cuantosElementos()">Agregar</button>
        </form>
        </div>
        <div>
            <input type="number" id="cuantos" min="1">
            <script>
            function cuantosElementos(){
                let cuantos= parseInt(document.getElementById("cuantos").value);
                var div= document.getElementById("inputs");
                for (let i = 0; i < cuantos; i++) {
                    div.innerHTML += `
                    <div>
                    <select name= author_id[]">
                        @foreach ($authors as $author)
                            <option value= "{{ $author->id }}">{{ $author->name}}</option>
                        @endforeach
                    </select>
                    <select name= book_id[]">
                        @foreach ($books as $book)
                            <option value= "{{ $book->id }}">{{ $book->title}}</option>
                        @endforeach
                    </select>
                    </div>
                    `;
                }
                div.innerHTML += `
                    <button type= "submit">Enviar</button>`
            }
            </script>
        </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Autor</th>
                    <th>Libro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authorBooks as $authorBook)
                    <tr>
                        <td>{{ $authorBook->author_id }}</td>
                        <td>{{ $authorBook->book_id }}</td>
                        <td>
                            <form action="{{ route('authors_books.destroy', $authorBook->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="{{ route('authors_books.edit', $authorBook->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</body>
</html>