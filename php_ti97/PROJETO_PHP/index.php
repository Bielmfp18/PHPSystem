<html>
  <head>
    <meta charset="utf-8" />
    <title>Tela de Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-light">
      <a class="navbar-brand" href="#">
        
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action = "validar.php" method="post"> <!--action é o destino no qual será validado no código-->
                <div class="form-group">
                  <input name = "email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name = "senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-block text-white" style="background-color:rgb(0, 200, 255); border-color: rgb(0, 200, 255);">
  Entrar
</button>

              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>