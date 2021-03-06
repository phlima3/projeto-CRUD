<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela de login</title>
<!-- CSS -->
<link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- FONT  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <div class="sidenav">
        <div class="login-main-text">
           <h2 class="mb-4">Guia do DEV<br> Página de login</h2>
           <p>Faça Login ou registre-se para aceessar nosso site!</p>
           <div class="image">
             <img src="assets/344-3446023_programmer-clipart.png" class="img-thumbnail  rounded mx-auto d-block  " style="background-color: transparent; border: none; width:70%; padding-top: 30px; ">
           </div>
          
        </div>
        
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form action="conexao.php" method="post" >
                 <div class="form-group mb-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Insira seu endereço de email">
                 </div>
                 <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control mb-5" placeholder="Insira sua senha">
                 </div>
                 <button type="submit" class="btn btn-black  m-2" name="nome" style="color:#fff;">Login</button>
                 <form action="registro.php" method="post">
                    <a href="registro.php" class="btn btn-secondary">Registre-se!</a>
                   
                 </form>
                 
              </form>
           </div>
        </div>
     </div>

  </body>
</html>
