<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
</head>
<body>
<h1>Pacientes</h1>
@if ($paciente)
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
        <tr>
            <td>{{$paciente->nome}}</td>
            <td>{{$paciente->email}}</td>
            <td>{{$paciente->telefone}}</td>
            <td>{{($paciente->data_de_nascimento)}}</td>
            <td>{{($paciente->cep)}}</td>
        </tr>
        </tbody>
    </table>
@else
    <p>Paciente não encontrado! </p>
@endif
<a href="/pacientes">voltar</a>
</body>
</html>
