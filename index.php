﻿<!DOCTYPE HTML>
<html lang="br" class="no-js">
     <head>
          <title>Sistema de Login e Senha Criptografados</title>
          <link href="minha_folha_de_estilo.css" type="text/css" rel="stylesheet" /> 
     </head>
     <body> 

	
          <div id="conteudo">
               <h1 style="color:white">Sistema de login e senha criptografados - Acesso ao Conteúdo Exclusivo</h1>
               <div class="borda"></div>
               <p style="color:white">Para ter acesso ao <strong>Conteúdo Exclusivo</strong>, por favor, logue-se utilizando o formulário abaixo!</p>
               <p style="color:white">Ainda não é cadastrado em nosso sistema, <a href="cadastro.php">cadastre-se</a>!</p>
               <form method="post" action="validaacesso.php" id="validaAcesso">
                    <fieldset>
                         <legend>Login</legend> 
                         <label for="email">E-Mail:</label>
                         <input type="email" name="email" id="email" required placeholder="E-MAIL"/>
                         <div class="clear"></div>
                         <label for="senha">Senha:</label>
                         <input type="password" name="senha" id="senha" required placeholder="PASSWORD" /> 
                         <div class="clear"></div>
                         <input type="submit" value="Acessar o sistema" />
                    </fieldset>
               </form>
               <p><small>Esqueceu seus dados? <a href="fsenha.php">Clique aqui!</a></small></p>
          </div>
     </body>
</html>