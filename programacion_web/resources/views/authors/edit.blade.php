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
        <form action="{{ route('authors.update', $author->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">
                nombre
            </label>
            <input type="text" name="name_author" id="name" required value="{{ $author->name}}">

            <label for="nationality">
                nacionalidad
            </label>
            <input type="text" name="nationality_author" id="nationality"  required value="{{ $author->nationality}}">

            <label for="date">
                fecha de nacimiento
            </label>
            <input type="date" name="birth_date" id="date"  required value="{{ $author->birth_date}}">
        
            <button type="submit">Guardar</button>
        </form>
        
    </div>

</body>
</html>