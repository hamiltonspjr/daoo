<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Editar Consulta</h1>
<form action="{{route('consulta-update',$consulta->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Data da Consulta:</td>
            <td><input type="date" name="data_consulta" value="{{$consulta->data_consulta}}"/></td>
        </tr>
        <tr>
            <td>ID do Paciente:</td>
            <td><input type="text" name="paciente_id" value="{{$consulta->paciente_id}}" /></td>
        </tr>
        <tr>
            <td>ID do Profissional:</td>
            <td><input type="text" name="profissional_id" value="{{$consulta->profissional_id}}" /></td>
        </tr>

        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/consultas"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
