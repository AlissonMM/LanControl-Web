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
    <link rel="stylesheet" href="Views\pages\css/inicio.css">
    
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
                <a  href="download">Download</a>
                <a  href="contato">Contato</a>
        </nav>
        <?php if(!isset($_SESSION['email']))echo '<a href="login" class="btn_cadastro">Login</a>' ?>
        <?php if(isset($_SESSION['email']))echo '<a href="sair" class="btn_cadastro">Sair</a>' ?>
        </div>
        <label for="chec">
            <img src="Views\pages\imagens/menu.png" alt="">
        </label>
    </header>      
    </div>
    
        
    </div>
    <h2 class="desce">Faça download plebe</h2>
        <section class="downloads">
        <div class="download-card alinhar">
            <a href="download/Site TCC 1.5.2.3.rar" download><img id="windowslogo" src="Views\pages\imagens/windows.png" alt="Logo do Windows">
            <p>Download Windows</p></a>
        </div>
        <div class="download-card alinhar">
            <a href="download/Site TCC 1.3.5.rar"><img id="windowslogo" src="Views\pages\imagens/android.png" alt="Logo do Android">
            <p>Download Android</p></a>
        </div>
        </section>
        <footer>
            <img id="imgfooter" src="Views\pages\imagens/lan control 2.png" alt="Lan Control logo">
            <p class="copyright">© Lan Control - 2022</p>
        </footer>
 
</body>
</html>