<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="telalogin.css">
    <title>Login</title>
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin" action="validar_login.php">
            <h1>Acesso</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="loginscol" placeholder="Digite seu e-mail ou CPF" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <a href="/">Esqueci minha senha</a>
            <a href="/">Cadastre-se</a><br>
            <input type="submit" value="Acessar" class="btn">
        </form>
    </div>
</body>
</html>
