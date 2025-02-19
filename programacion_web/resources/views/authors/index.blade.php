<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autores</title>
</head>

<body>
    <h1>Authors</h1>
    <div>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <label for="name">
                nombre
            </label>
            <input type="text" name="name_author" id="name" required>

            <label for="nationality">
                nacionalidad
            </label>
            <input type="text" name="nationality_author" id="nationality" required>

            <label for="date">
                fecha de nacimiento
            </label>
            <input type="date" name="birth_date" id="date" required>
        
            <button type="submit">Guardar</button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>nombre</th>
                    <th>nacionalidad</th>
                    <th>fecha de nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->nationality }}</td>
                        <td>{{ $author->birth_date }}</td>
                        <td>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="{{ route('authors.edit', $author->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>