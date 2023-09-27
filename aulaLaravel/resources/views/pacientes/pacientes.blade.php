<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
</head>
<body>
<h1>Pacientes </h1>
@if ($listaPacientes->count()>0)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Cep</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listaPacientes as $paciente)
            <tr>
                <td>
                    <a href="/paciente/{{$paciente->id}}">
                        {{$paciente->id}}
                    </a>
                </td>
                <td>{{$paciente->nome}}</td>
                <td>{{$paciente->email}}</td>
                <td>{{$paciente->telefone}}</td>
                <td>{{($paciente->data_de_nascimento)}}</td>
                <td>{{($paciente->cep)}}</td>
                <td>
                    <a href="{{ route('paciente-edit',$paciente->id) }}">Editar</a>
                    <a href="{{ route('paciente-delete',$paciente->id) }}">&#128465</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Pacientes não encontrados! </p>
@endif
<a href="{{route('paciente-create')}}">Novo Paciente</a>
</body>
</html>
