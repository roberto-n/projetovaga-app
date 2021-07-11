<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Pet</title>
</head>
<body>
    <div>
    <form action="{{route('pet.index')}}"  method="get">
    @csrf

    <label for="animal">Nome animal </label>
    <input type="text" name="animal"> </input>
     <br>
    <label for="raca">Raça</label>
    <input type="text" name="raca"></input>
    <br>

    <label for="tipo">Tipo</label>
    <input type="text" name="tipo"></input>
    <br>

    <label for="dono">Dono</label>
    <input type="text" name="dono"></input>
    <br>

    <label for="contatodono">Contato</label>
    <input type="tel" name="contatodono"></input>

    <button type="button">Pesquisar</button>

    </form>
</div>
</body>
</html>