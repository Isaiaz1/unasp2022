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
        <form>
            @csrf
            <div><label for="nome">nome</label><input  type="text" name="nome" id="nome"></div>
            <div><label for="email">email</label><input  type="text" name="email" id="email"></div>
            <div><label for="telefone">telefone</label><input  type="text" name="telefone" id="telefone"></div>
            <div><label for="endereço">endereço</label><input  type="text" name="endereço" id="endereço"></div>
            <div><label for="resumo_profissional">resumo_profissional</label><input  type="text" name="resumo_profissional" id="resumo_profissional"></div>
            <button type="submit">Salvar</button>
        </form>
        </body>   
</html>