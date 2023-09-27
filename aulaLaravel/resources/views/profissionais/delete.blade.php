<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Profissional</title>
</head>
<body>
@if ($profissional)
    <h1>{{ $profissional->nome }}</h1>
    <ul>
        <li>Email: {{ $profissional->email }}</li>
        <li>Telefone: {{ $profissional->telefone }}</li>
        <li>Data de Nascimento: {{$profissional->data_de_nascimento}}</li>
        <li>Cep: {{$profissional->cep}}</li>
        <li>Especialidade: {{$profissional->especialidade}}</li>
        <li>Credencial: {{$profissional->numero_credencial}}</li>

    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('profissional-remove',$profissional->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/profissionais"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Profissional não encontrado! </p>
@endif
<a href="/profissionais">&#9664;Voltar</a>
</body>
</html>
