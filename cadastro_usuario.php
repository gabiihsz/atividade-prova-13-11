<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="usuarios.php">Cadastro de Usuários</a></li>
                <li><a href="tarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="gerenciar.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Cadastro de Usuários</h2>
        <form method="POST" action="salvar_usuario.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>
