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
        <form action="{{ route('salvar_adm') }}" method="post">
            @csrf
            <div><label for="nome">nome</label><input  type="text" name="nome" id="nome"></div>
            <div><label for="email">email</label><input  type="text" name="email" id="email"></div>
            <div><label for="senha">senha</label><input  type="text" name="senha" id="senha"></div>
            <div><label for="telefone">telefone</label><input  type="text" name="telefone" id="telefone"></div>
            <button type="submit">Salvar</button>
        </form>
        </body>   
</html>