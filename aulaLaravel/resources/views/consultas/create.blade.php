<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Inserir nova Consulta</h1>
<form action="/consulta" method="POST">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
    <table>
        <tr>
            <td>Data da Consulta:</td>
            <td><input type="date" name="data_consulta"/></td>
        </tr>
        <tr>
            <td>Nome do Paciente:</td>
            <td>
            <!-- Poderia ter substituido os inputs por select -->
            <select name='paciente_id'>
                @foreach($pacientesCollection as $paciente)
                    <option value='{{$paciente->id}}'>{{$paciente->nome}}</option>
                @endforeach
            </select>
        </td>
        </tr>
        <tr>
            <td>Nome do Profissional:</td>
            <td><select name='profissional_id'>
                @foreach($profissionalCollection as $profissional)
                    <option value='{{$profissional->id}}'>{{$profissional->nome}}</option>
                @endforeach
            </select></td>
        </tr>

        <tr align="center">
            <td colspan="2"><input type="submit" value="Criar"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><a href="/consultas" style="display: inline">&#9664;&nbsp;Voltar</a></td>
        </tr>
    </table>
</form>
</body>

</html>
