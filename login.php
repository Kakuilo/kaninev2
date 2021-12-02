
<!DOCTYPE html>
<html>
<Head>
<meta charset="utf-8">
<meta name="login">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
</Head>
<body>
<header class="head">
                    <nav class="navbar navbar-expand-lg navbar-lightnav-ajust">
                        <div class="container-fluid nav-ajust">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand" href="main.php">Kanine</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav" aria-current="page" href="#equipe">Equipe</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav" href="#footer">contatos</a>
                              </li>
                            </ul>
                            <form class="d-flex">
                                <a class="nav" aria-current="page" href="cadastro.php">Cadastre-se</a>
                            </form>
                          </div>
                        </div>
                      </nav>
                             <div class="title">                  
                                    <h1 class="text-center">Kanine</h1>
                                    <h2  class="text-center">Faça seu login, e tenha a melhor experiencia com adoção de Animais</h2>
                              </div>
</header>
    <div class="form-meu card">
    <form action="php/logando.php" method="POST">
  <div class="mb-6" >
    <label for="exampleInputEmail1" class="form-label" name="email">Endereço de Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Caso não tenha cadastro se cadastrese <a href="cadastro.php">aqui</a></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">me deixe conectado</label>
  </div>
  <button type="submit" class="btn btn-primary" name="enviar">Entrar</button>
</form>
</div>
<footer id="footer" class="conserto1">
        <ul class="rodape">
            <li>Telefone</li>
            <li>(81)98748-6244</li> <br/>
            <li>WhatsSapp</li>
           <a href="https://wa.me/5581985196763" target="_blank"><li style="text-decoration: none; color:black;">(81)985196763</li><br/></a>
            <li>E-mail</li>
            <a href="mailto:mooneyadriel@gmail.com? Subject=Título%20da%20mensagem" target="_blank"><li style="text-decoration: none; color: black;">mooneyadriel@gmail.com</li><a>
        </ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--<script>
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
</script>-->
</body>
</html>