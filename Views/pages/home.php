<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/LC LOGO.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Inconsolata&family=League+Spartan;900&family=Noto+Sans:wght@300&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Views\pages\css/css reset.css">
    <link rel="stylesheet" href="Views\pages\css/style.css">
    <link rel="stylesheet" href="Views\pages\css\inicio.css">
    
    <title>Início</title>
</head>
<body>
    <div id="preheader">
        <div id="deitado"></div>
    <header>
        
        <img id="logo" src="Views\pages\imagens/LC LOGO.png" alt="Logo da Lan Control">
		<input type="checkbox" id="chec">
        <div  class="btncad">
        <nav>
                <a  href="home">Início</a>
                <a  href="download">DowNload</a>
                <a  href="contato">Contato</a>
        </nav>
        <div>
        <?php session_start(); if(!isset($_SESSION['email']))echo '<a href="login" class="btn_cadastro">Login</a>' ?>
            <?php if(isset($_SESSION['email']))echo '<a href="sair" class="btn_cadastro">Sair</a>' ?>
        </div>
        </div>
        <label for="chec">
            <img src="Views\pages\imagens/menu.png" alt="">
        </label>
    </header>      
    </div>
    
        
    </div>
        <img src="Views\pages\imagens/banner2.png" alt="Banner Lan Control" id="banner">
        <section class="objetivo">
        <h2>Objetivo</h2>
        <p>Nosso principal objetivo é tornar de rápido e fácil acesso o controle de ligar e delisgar computadores a distância para todos, principalmente para empresas e escolas, tornando mais rápida a manutenção e condução de aulas ministradas em laboratórios
        </p>
        <a href='https://br.freepik.com/fotos-vetores-gratis/fundo'> <img src="Views\pages\imagens/Fundotec1.jpg" alt="Imagem com ícones de redes e tecnologia" id="tec"></a>
     
        </section>

        <section class="wol">
            <h2>Wake on Lan</h2>
            <p>
                Wake on Lan é a principal tecnologia implementada no projeto, permite que um computador seja ligado por uma mensagem enviada remotamente. 
                Por ser uma implementação na placa-mãe do computador depende que seja ativado nas confirurações de Gerenciamento de energia da BIOS.
                Por isso para que o aplicativo seja utilizado corretamente é importante que o usuário siga o tutorial de instalação e configuração.
            </p>
        </section>
        <footer>
            <img id="imgfooter" src="Views\pages\imagens/lan control 2.png" alt="Lan Control Logo">
            <p class="copyright">© Lan Control - 2022</p>
        </footer>
</body>
</html>