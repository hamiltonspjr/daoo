<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profissional</title>
</head>
<body>
<h1>Profissional</h1>
@if ($profissional)
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Cep</th>
            <th>Especialidade</th>
            <th>Credencial</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$profissional->nome}}</td>
            <td>{{$profissional->email}}</td>
            <td>{{$profissional->telefone}}</td>
            <td>{{($profissional->data_de_nascimento)}}</td>
            <td>{{($profissional->cep)}}</td>
            <td>{{($profissional->especialidade)}}</td>
            <td>{{($profissional->numero_credencial)}}</td>
        </tr>
        </tbody>
    </table>
@else
    <p>Profissional não encontrado! </p>
@endif
<a href="/profissionais">voltar</a>
</body>
</html>
