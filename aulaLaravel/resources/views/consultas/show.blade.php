<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
<h1>Consulta</h1>
@if ($consulta)
    <table>
        <thead>
        <tr>
            <th>Data da Consulta</th>
            <th>ID do Paciente</th>
            <th>ID do Profissional</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$consulta->data_consulta}}</td>
            <td>{{$consulta->paciente_id}}</td>
            <td>{{$consulta->profissional_id}}</td>
        </tr>
        </tbody>
    </table>
@else
    <p>Consulta não encontrada! </p>
@endif
<a href="/consultas">voltar</a>
</body>
</html>
