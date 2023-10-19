<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Profissionais</title>
</head>
<body>
<h1>Profissionais </h1>
@if ($listaProfissionais->count()>0)
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
        @foreach($listaProfissionais as $profissional)
            <tr>
                <td>
                    <a href="/profissional/{{$profissional->id}}">
                        {{$profissional->id}}
                    </a>
                </td>
                <td>{{$profissional->nome}}</td>
                <td>{{$profissional->email}}</td>
                <td>{{$profissional->telefone}}</td>
                <td>{{($profissional->data_de_nascimento)}}</td>
                <td>{{($profissional->cep)}}</td>

                <td>
                    <a href="{{ route('profissional-edit',$profissional->id) }}">Editar</a>
                    <a href="{{ route('profissional-delete',$profissional->id) }}">&#128465</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Profissionais não encontrados! </p>
@endif
<a href="{{route('profissional-create')}}">Novo Profissional</a>
</body>
</html>
