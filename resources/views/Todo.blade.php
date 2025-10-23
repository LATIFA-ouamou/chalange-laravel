<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ma To-Do List</h1>
    <form action="/add" method="POST">
        @csrf
    <input type="text" name="todo">
    <button type="submit"> ajouter</button>

</form>
<ul>
      @foreach ($Todoo as $todo)
          <li>{{ $todo }}<a href="">Supprimer</a> </li>
      @endforeach
            
       
    </ul>
</body>
</html>