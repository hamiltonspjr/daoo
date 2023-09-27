<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Inserir novo Paciente</h1>
<form action="/paciente" method="POST">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input type="tel" name="telefone"/></td>
        </tr>
        <tr>
            <td>Data de Nascimento:</td>
            <td><input type="date" name="data_de_nascimento"/></td>
        </tr>
        <tr>
            <td>Cep:</td>
            <td><input type="text" name="cep"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" value="Criar"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><a href="/pacientes" style="display: inline">&#9664;&nbsp;Voltar</a></td>
        </tr>
    </table>
</form>
</body>

</html>
