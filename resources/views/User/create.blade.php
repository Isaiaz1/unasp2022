<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar novo usuario</title>
    <style>
        label{
            float: left;
            display: block;
            width:90px;
            }
    </style>
  </head>
  <body>
        <form action="{{ route('salvar_user') }}" method="post">
            @csrf
            <div><label for="email">email</label><input  type="text" name="email" id="email"></div>
            <div><label for="senha">senha</label><input  type="text" name="senha" id="senha"></div>
            <div><label for="cpf">cpf</label><input  type="text" name="cpf" id="cpf"></div>
            <div><label for="idioma">idioma</label><input  type="text" name="idioma" id="idioma"></div>
            <button type="submit">Salvar</button>
        </form>
        </body>   
</html>