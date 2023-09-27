<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Editar Profissional</h1>
<form action="{{route('profissional-update',$profissional->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$profissional->nome}}" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{$profissional->email}}" /></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input type="tel" name="telefone" value="{{$profissional->telefone}}" /></td>
        </tr>
        <tr>
            <td>Data de Nascimento:</td>
            <td><input type="date" name="data_de_nascimento" value="{{$profissional->data_de_nascimento}}"/></td>
        </tr>
        <tr>
            <td>Cep:</td>
            <td><input type="text" name="cep" value="{{$profissional->cep}}"/></td>
        </tr>
        <tr>
            <td>Especialidade:</td>
            <td><input type="text" name="especialidade" value="{{$profissional->especialidade}}" /></td>
        </tr>
        <tr>
            <td>Credencial:</td>
            <td><input type="text" name="numero_credencial" value="{{$profissional->numero_credencial}}" /></td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/profissionais"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
