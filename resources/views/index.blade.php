<html>
    <head><title>GerenPes</title></head>
    <body>
        <h1>Gerenciamento de Pesquisadores </h1></br>
        <a href="cadUsuario"><button>Cadastrar Novo</button></a></br></br>
        <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </thead>
        <tbody>
            @foreach($usuarios as $u)
                    <td>{{$u->getId()}}</td>
                    <td>{{$u->getNome()}}</td>
                    <td>{{$u->getEmail()}}</td>
                    <td>
                        <a href="{{route('usuario.editar',$u->getId())}}" name="id_usuario">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('usuario.delete',$u->getId())}}" name="id_excluir" >Excluir</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </body>
</html>