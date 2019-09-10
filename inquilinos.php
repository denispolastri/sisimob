<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SisImob</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>

    </script>
  </head>
  <body>
    <main>
      <?php
        require_once('navbar.php');
      ?>
    <nav id="menu">
      <ul>
          <li><a href="imovCadastro.php">Cadastro</a></li>
          <li><a href="imovListagem.php">Listagem</a></li>
      </ul>
    </nav>
    <h2>Inquilinos</h2>


    </main>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
  </body>
</html>