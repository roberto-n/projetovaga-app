<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="{{route->('pet.store') }}" method="post">
    @csrf

    <label for="animal">Nome animal </label>
    <input type="text" name="animal"> </input>
     <br>
    <label for="raca">raça</label>
    <input type="text" name="raca"></input>
    <br>

    <label for="tipo">tipo</label>
    <input type="text" name="tipo"></input>
    <br>

    <label for="dono">dono</label>
    <input type="text" name="dono"></input>
    <br>

    <label for="contatodono">contato</label>
    <input type="tel" name="contatodono"></input>
    
    <button type="button">cadastrar</button>

    </form>
    </div>

</body>
</html>