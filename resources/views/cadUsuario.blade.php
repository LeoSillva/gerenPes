<html>
    <head><title>Gerenciamento de Pesquisadores/title></head>
    <body>
        <h1>Cadastrar Novo Usuário</h1>
        <form method="POST" action="{{route('usuario.salvar')}}">
        @csrf
            <label for="txtNome">Nome:</label>
            <input id="txtNome" name="nome"/>
            <label for="txtEmail">Email:</label>
            <input id="txtEmail" name="email"/>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>