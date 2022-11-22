<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas em aberto</title>
</head>
<body>
    <<table class="table">
        <thead>
            <tr>
                <th>Nome da empresa</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Periodo</th>

                @foreach($vagas as $vagas)
            </tr>
            <tr>
                <td>{{$vagas->empresa_nome}}</td>
                <td>{{$vagas->cargo}}</td>
                <td>{{$vagas->salario}}</td>
                <td>{{$vagas->periodo}}</td>
                <td>Editar</td>
                <td><a href="{{ route('excluir_vagas',['id'=>$vagas->id])}}"
                        title="Excluir vaga {{ $vagas->nome }}" >Excluir </a></td>
            </tr>
            @endforeach
        </thead>
    </table>
    
</body>
</html>