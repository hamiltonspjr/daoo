<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consultas</title>
</head>
<body>
<h1>Consultas </h1>
@if ($listaConsultas->count()>0)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Data da Consulta</th>
            <th>ID do Paciente</th>
            <th>ID do Profissional</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listaConsultas as $consulta)
            <tr>
                <td>
                    <a href="/consulta/{{$consulta->id}}">
                        {{$consulta->id}}
                    </a>
                </td>
                <td>{{$consulta->data_consulta}}</td>
                <td>{{$consulta->paciente_id}}</td>
                <td>{{$consulta->profissional_id}}</td>
                <td>
                    <a href="{{ route('consulta-edit',$consulta->id) }}">Editar</a>
                    <a href="{{ route('consulta-delete',$consulta->id) }}">&#128465</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Consultas não encontrados! </p>
@endif
<a href="{{route('consulta-create')}}">Nova Consulta</a>
</body>
</html>
