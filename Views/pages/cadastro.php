<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Views\pages\imagens/LC LOGO.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Inconsolata&family=League+Spartan;900&family=Noto+Sans:wght@300&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Views\pages\css/css reset.css">
    <link rel="stylesheet" href="Views\pages\css/style.css">
    <link rel="stylesheet" href="Views\pages\css/login.css">
    <title>Cadastro</title>
</head>
<body>
    <a href="home" class="volt">&lt;Voltar</a>
    <section class="cadastro">
        <div class="center">
            <h1>Cadastrar</h1>
            <form method="post" action="cadastro">
                <div class="txts">
                    <input type="text" name="nome" required>
                    <label>Nome</label>
                </div>
                <div class="txts">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="txts">
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
                <button type="submit" name="submit">Enviar</button>
            </form>
            <p>Já tem uma conta? <a href="login">Logar</a></p>
        </div>
    </section>
</body>
</html>