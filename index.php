<?php

session_start();
if(isset($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media-query.css" />
  </head>
  <body>
    <header id="cabecalho">
      <h1> <img src="imagens/ghost.png" alt="">Telesct</h1>
      <nav id="menu-pc">
        <ul>
          <li>
            <a href="index.html">INICIO</a>
          </li>
          <li><a href="#">NOVIDADE</a></li>
          <li><a href="#" id="cor1">DOWLOAD</a></li>
          <li><a href="#">SOBRE</a></li>
        </ul>
        <div class="sessao-cadastro">
          <img class="perfili" src="imagens/perfil-de-usuario (1).png" alt="" />
          <p id="cadastro">Cadastro/Login</p>
        </div>
      </nav>
      
        <div class="btn-abrir-menu" id="btn-menu">
          <img src="imagens/menu-aberto.png" alt="">
        </div>

        <div class="menu-mobile" id="menu-mobile">
          <nav>
            <ul>
              <li>
                <a href="index.html">INICIO</a>
              </li>
              <li><a href="cadastro-login.html" target="_self" class="cor">LOGIN/CADASTRO</a></li>
              <li><a href="#">NOVIDADE</a></li>
              <li><a href="#" id="cor">DOWLOAD</a></li>
              <li><a href="#">SOBRE</a></li>
              <li><a href="#" id="responsavel-botao-do-menu">RESPONSAVEL</a></li>
            </ul>
          </nav>
        </div>
        <div class="overlay-menu-mobile" id="overlay-menu-mobile"></div>
    </header>
    <main>
      <section class="carrossel-imagens" id="jogos">
        <div class="quadrado-imagem">
          <img src="imagens/valorante.jpg" alt="" />
          <h2 class="titulo-jogo-vermelho">Valorante</h2>
        </div>
        <div class="quadrado-imagem">
          <img src="imagens/freefire.jpg" alt="" />
          <h2 class="titulo-jogo">Free Fire</h2>
        </div>
        <div class="quadrado-imagem">
          <img src="imagens/fortinite.jpg" alt="" />
          <h2 class="titulo-jogo-vermelho">Fortnite</h2>
        </div>
        <div class="quadrado-imagem">
            <img src="imagens/blood.jpg" alt="" />
            <h2 class="titulo-jogo">Blood Strike</h2>
          </div>
        <div class="quadrado-imagem">
          <img src="imagens/farlight.jpg" alt="" />
          <h2 class="titulo-jogo-vermelho">Farlight</h2>
        </div>
      </section>

      <section id="Duvidas">
        <h2>Duvidas</h2>
      </section> 
      <div id="bloco" class="carrossel-imagens">

        <div>
          <h2>O site é seguro ?</h2>
          <p>sim, todos os dados dos usuários que trafegam pela página seão criptografados e protegidos em caso de invasões cibernéricas. O site possui selo de verificação SSL</p>
        </div>

        <div>
          <h2>O site é seguro ?</h2>
          <p>sim, todos os dados dos usuários que trafegam pela página seão criptografados e protegidos em caso de invasões cibernéricas. O site possui selo de verificação SSL</p>
        </div>

        <div>
          <h2>O site é seguro ?</h2>
          <p>sim, todos os dados dos usuários que trafegam pela página seão criptografados e protegidos em caso de invasões cibernéricas. O site possui selo de verificação SSL</p>
        </div>
      </div>
    </main>
  </body>
</html>
