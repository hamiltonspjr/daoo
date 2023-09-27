<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Paciente</title>
</head>
<body>
@if ($paciente)
    <h1>{{ $paciente->nome }}</h1>
    <ul>
        <li>Email: {{ $paciente->email }}</li>
        <li>Telefone: {{ $paciente->telefone }}</li>
        <li>Data de Nascimento: {{$paciente->data_de_nascimento}}</li>
        <li>Cep: {{$paciente->cep}}</li>

    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('paciente-remove',$paciente->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/pacientes"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Paciente não encontrado! </p>
@endif
<a href="/pacientes">&#9664;Voltar</a>
</body>
</html>
