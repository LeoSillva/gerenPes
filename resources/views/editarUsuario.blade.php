<html>
    <head><title>Gerenciamento de Pesquisadores</title></head>
    <body>
        <h1>Editar Usuário</h1></br>
        <form method="POST" action="{{route('usuario.salvar')}}">
        @csrf
            <input type="hidden" value="{{$usuario->id}}" name="id_usuario"/>
            <label for="txtNome">Nome:</label>
            <input id="txtNome" name="nome" value="{{$usuario->nome}}"/>
            <label for="txtEmail">Email:</label>
            <input id="txtEmail" name="email" value="{{$usuario->email}}"/>
            <button type="submit">Editar Dados</button>
        </form>
    </body>
</html>