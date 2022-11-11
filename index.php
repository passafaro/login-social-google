<?php 

include "app/Usuario.php"; 
$sessaoUsuario = new Usuario();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  
    
    <?php if(!$usuario = $sessaoUsuario->verificaSessao()){ ?>
      <form class="form-signin">
      <h1 class="h1 mb-3 font-weight-normal">Login Social com Google<br><br></h1>
      <h1 class="h4 mb-3 font-weight-normal">Faça seu login</h1>


        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <div id="g_id_onload" 
          data-client_id="1044330575067-vs9kepcr4cg472r7oi9hvjuasa3p8hct.apps.googleusercontent.com"
          data-login_uri="http://localhost/login.php"
          data-auto_prompt="false">
        </div>
        <div class="g_id_signin" 
          data-type="standard"
          data-size="large"
          data-theme="outline"
          data-text="sign_in_with"
          data-shape="rectangular"
          data-logo_alignment="center"
          data-width=300>
        </div>
      
      

        <p class="mt-5 mb-3 text-muted">10/2022</p>
        <p class="linkDoc">
          Documentação: <br>
          <a target="_blank" href="https://developers.google.com/identity/gsi/web/guides/overview">https://developers.google.com/identity/gsi/web/guides/overview</a>
        </p>
        





      </form>
      <?php } else { ?>

        <div class="form-signin">
        <div class="imagemPerfil" style="background-image:url('<?php echo $usuario['foto'] ?>')"></div>
        
        <br>
          Olá, Sr(a). <b><?php echo $usuario['nome'] . ' ' . $usuario['sobrenome'] ?></b>. <br> 
          seja muito bem vindo!<br> 
          <b><?php echo $usuario['email'] ?></b><br> 
          <br> 
          <a href="logout.php">Sair</a>

        </div>

      <?php }  ?>






  </body>
</html>
