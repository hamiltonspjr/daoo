<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Consulta</title>
</head>
<body>
@if ($consulta)
    <h1>{{ $consulta->data_consulta }}</h1>
    <ul>
        <li>ID do Paciente: {{ $consulta->paciente_id }}</li>
        <li>ID do Profissional: {{ $consulta->profissional_id }}</li>
    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('consulta-remove',$consulta->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/consultas"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Consulta não encontrada! </p>
@endif
<a href="/consultas">&#9664;Voltar</a>
</body>
</html>
