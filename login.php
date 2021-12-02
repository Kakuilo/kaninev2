<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
<meta name="login">
<link rel="stylesheet" href="login.css">
</Head>
<body>
   <a href="main.html" style="text-decoration: none; color: white;"> <h1>Kanine</h1></a>
    <h2>Faça seu login, e tenha a melhor experiencia com adoção de Animais</h2>
    <div class="box">
<div id="login">
<p class="conserte">Email <input id="email" type="email" nome="Digite Seu Email">  <br/></p>

<p>Senha <input id="input" type="password" name="Digite Sua Senha">
<input class="mostrar" type="button" onclick="mostrarsenha()" value="Mostrar"></p>
    <a href="google.com" style="text-decoration:none; color:blue;"><p class="esc">Esqueci a Senha</p></a>
    <input class="button"  type="button" onclick="login()" value="Login"> 
   <a href="cadastro.html"> <input class="button" type="button" value="Cadastra-se Gratuitamente"> </a>
</div>
</div>
<img class="img" src="fotos kanine/osso" alt="">
<footer class="conserto1">
    <ul class="rodape">
        <li>Telefone</li>
        <li>(81)98748-6244</li> <br/>
        <li>WhatsSapp</li>
       <a href="https://wa.me/5581985196763" target="_blank"><li style="text-decoration: none; color:black;">(81)985196763</li><br/></a>
        <li>E-mail</li>
        <a href="mailto:mooneyadriel@gmail.com? Subject=Título%20da%20mensagem" target="_blank"><li style="text-decoration: none; color: black;">mooneyadriel@gmail.com</li><a>
    </ul>
</footer>
<script>
function mostrarsenha(){
    var tipo= document.getElementById("input");
        if(tipo.type=="password"){
            tipo.type="text";
        }else if(tipo.type=="text"){
            tipo.type=("password");
        }
}
function login(){
  var email= document.getElementById("email").value;
  var senha = document.getElementById("input").value;

  if(email == "" || senha == ""){
        alert("preencha os Campos para fazer login");

  }else if(email !="mooneyadriel@gmail.com"){
   alert("Email não cadastrado");
}else if(email == "mooneyadriel@gmail.com" && senha !="gabriel123"){
        alert("Senha Incorreta");
}else if(email=="mooneyadriel@gmail.com" && senha =="gabriel123"){
    alert("LOGIN EFETUADO COM sucesso");
}else{
 alert("algo deu errado ");
}
}
</script>
</body>
</html>