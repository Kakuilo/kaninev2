<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Bem-Vindo</title>  
        <meta charset="utf-8">
        <meta name="José Gabriel">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="main.css">
    </head>
<body>
    <header> 
                    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-ajust">
                        <div class="container-fluid nav-ajust">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand" href="main.php">Kanine</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#equipe">Equipe</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#footer">contatos</a>
                              </li>
                            </ul>
                            <form class="d-flex">
                                <a class="nav-link active lado-direito" aria-current="page" href="login.php">Login</a>
                                <a class="nav-link active lado-direito" aria-current="page" href="cadastro.php">Cadastre-se</a>
                            </form>
                          </div>
                        </div>
                      </nav>
                      <h1 class = "titulo text-center">Kanine</h1>
         <h2 class="subtitulo text-center">Melhor site para você adotar</h2>  <h2 class="subtitulo2 text-center">seu Animal de estimação</h2>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="equipe" class="img" src="fotos-kanine/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="img" src="fotos-kanine/Equipe.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="img" src="fotos-kanine/img3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>