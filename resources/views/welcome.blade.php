<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar nova vaga</title>
    <style>
        label{
            float: left;
            display: block;
            width:90px;
            }
    </style>
  </head>
  <body>
  <form action="{{ route('salvar_vaga') }}" method="post">
            @csrf
            <div><label for="nome">empresa</label><input  type="text" name="empresa_nome" id="empresa_nome"></div>
            <div><label for="cargo">cargo</label><input  type="text" name="cargo" id="cargo"></div>
            <div><label for="salario">salario</label><input  type="text" name="salario" id="salario"></div>
            <div><label for="periodo">periodo</label><input  type="text" name="periodo" id="periodo"></div>
            <button type="submit">Salvar</button>
        </form>
        </body>   
</html>