<!DOCTYPE html>
<html>
<head lang="pt-br">
 <meta charset="utf-8">
 <meta name =" kanine "content="site do kanine">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="cadastro.css">
 <title> Kanine </title>
</head>
<body>
    <header class="cabecalho">
    <h1>kanine</h1>
    <h2> Cadastra-se </h2> 
    <p class="mensagem">veja entre na melhor plataforma de adoção de Animais</p> <br/> 
    <p class="borda"></p>
    </header>
    <div class="cadastro">
        <form method="POST" action="/Register">
        <p>Nome</p>
        <input class="nome" type="text" name="Nome" > <br/>
        <p>Sobrenome</p> 
        <input class="nome" type="text"  name="Sobrenome" > <br/>
        <p>Gênero</p>
        <input class="click" type="radio"  name="genero" value="default"> Masculino 
        <input class="click2" type="radio" nam="genero" value="default"> Feminino 
        <p>Data de Nascimento</p>
        <input class="data" type="date" nome="data de Nascimento" value="default">
        <p>Usuário</p>
        <input id ="usuario"  type="text"   name="usuario">
        <p id="use"> </p>

        <p>E-mail</p>
    <input  id="verificar" type="email"   name="email" >
       <p id ="email1"> </p> 
        <p>Confirme Seu E-mail</p>
        <input id="confirme-email"  type="email" name="email">
        <p id="confirme"></p>

        <p>Senha</p>
        <input id="senha" type="password" name="Senha" maxlength="16" minlength=" 8">
        <button class="botao" type="button" onclick="mostrarsenha()">Mostrar</button>
    
        <p>Localização</p>
        <input class="cep1" type="text"  maxlength ="5" pattern="[1-9]">-<input class="cep2" type="text" maxlength="3" pattern="[1-9]"> <br/>
            <input class="confirmar" type="button" onclick="botao()"  name=" Final"  value="Confirmar Cadastro"> 
            <a href="login.html"><input class="confirmar" type="button"   name=" Final"  value="Faça Login"></a>
        </form>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        
        function mostrarsenha(){
        var tipo= document.getElementById("senha");
        if(tipo.type=="password"){
            tipo.type="text";
        }else if(tipo.type=="text"){
            tipo.type=("password");
        }
    }
    /*function verifica(){
        var email= document.getElementById("verificar").value;
        if( email == "mooneyadriel@gmail.com"){
        document.getElementById("mensagem_erro_email").innerHTML="Email já cadastrado";
    }else{
        document.getElementById("mensagem_erro_email").innerHTML="Email disponivel";
    }

}
function verifica2(){
        var nickname = document.getElementById("usuario").value;
        if( nickname == "kakuilo23"){
        document.getElementById("use").innerHTML="Nick já está sendo utilizado";
    }else{
        document.getElementById("use").innerHTML="Nick disponivel";
    }

}*/
 function botao(){
     var nome= document.getElementsByClassName("nome").value;
     var genero= document.getElementsByClassName("click, click2").value;
     var senha= document.getElementById("senha").value;
    var email = document.getElementById("verificar").value;
    var confirme = document.getElementById("confirme-email").value;
    var use = document.getElementById("usuario").value;
    if(nome == "" || genero == "" || use == "" || email == "" || confirme == ""|| senha == ""){
        alert("Preencha todos os campos Obrigatóris");
    }else if(email == "mooneyadriel@gmail.com" || use =="kakuilo23" || email !=  confirme){
        alert("Revise suas informações"); 
        if(email == "mooneyadriel@gmail.com" && use=="kakuilo23" && email != confirme){
            document.getElementById("email1").innerHTML="Email já cadastrado";
            document.getElementById("use").innerHTML= "Nick já está sendo utilizado";
            document.getElementById("confirme").innerHTML="Email não correspondem";
        } else if(email =="mooneyadriel@gmail.com" && use =="kakuilo23"){
                    document.getElementById("email1").innerHTML="Email já cadastrado";  
                    document.getElementById("use").innerHTML= "Nick já está sendo utilizado";
    }else if( email != confirme && use == "kakuilo23"){     
         document.getElementById("use").innerHTML="Nick já está sendo utilizado";
         document.getElementById("confirme").innerHTML="Email não correspondem";
 }else if(email != confirme && email == "mooneyadriel@gmail.com" ){
        document.getElementById("confirme").innerHTML="Email não correspondem";
        document.getElementById("email1").innerHTML="Email já cadastrado";
  }else if(email == "mooneyadriel@gmail.com"){
    document.getElementById("email1").innerHTML= "Email já cadastrado" ;
  }else if(use=="kakuilo23"){
    document.getElementById("use").innerHTML= "Nick já está sendo utilizado";
  }else if(email != confirme){
    document.getElementById("confirme").innerHTML="Email não correspondem";
}else if(email.type != "type.email"){
    alert("Email invalido");
}else if(nome == "" || genero == "" || use == ""|| email == ""|| confirme == "" || senha == ""){
    alert ("Por Favor preencha todos o Campos");   
}
  }else{
    alert("Cadastro confirmado");
}
}
    </script>
</body>
</html>
