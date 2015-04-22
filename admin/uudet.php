<!DOCTYPE html>

<?php

require '../includes/functions.php';

$conn = connect($config);

if ( $conn ) {
  $user = uudet('user', $conn);
} else die('Tietokantaan ei saatu yhteyttä');

$laskuri = 'laskuri';

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Virtuaalipalvelimen tilausjärjestelmän ylläpito</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <nav>
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="uudet.php">Uudet tilaukset <span class="badge"><?= $laskuri($user, $conn); ?></span></a></li>
        <li role="presentation"><a href="hyvaksytyt.php">Hyväksytyt tunnukset</a></li>
        <li role="presentation"><a href="hylatyt.php">Hylätyt tunnukset</a></li>
        <li role="presentation"><a href="poistetut.php">Poistetut tunnukset</a></li>
        <li role="presentation" class="navbar-right"><a href="#">Kirjaudu ulos</a></li>
      </ul>
    </nav>
    <br>
    <?php foreach($user as $row) : ?>
      <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>ORDER ID <?= $row['id']?></h4>
          </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <p><strong>Etunimi</strong> <?= $row['firstname']?></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <p><strong>Sukunimi</strong> <?= $row['surname']?></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <p><strong>Saapunut</strong> <?= $row['date']?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <p><strong>Opiskelijatunnus</strong> <?= $row['account']?></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <p><strong>Ryhmätunnus</strong> <?= $row['class']?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <p><strong>Sähköposti</strong> <?= $row['email']?></p>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2 col-sm-6">
              <button type="submit" class="btn btn-success" name="hyvaksy" value="hyvaksy" onclick="hyvaksy()">
                Hyväksy
              </button>
              <button type="submit" class="btn btn-danger" name="hylkaa" value="hylkaa">
                Hylkää
              </button>
            </div>
          </div>
      </div>
    </div>
      <br>
    <?php endforeach;
    $conn = null; ?>
  </div>
  <!-- jQuery from Google API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- Accept new order -->
  <script>
    function hyvaksy() {
      var request = $.ajax({
        url: "../includes/hyvaksy.php",
        type: "GET",
        dataType: "html"
      });

      request.done(function() {
        alert( "Tilaus hyväksytty");
        window.location.reload();
      });

      request.fail(function(jqXHR, textStatus) {
        alert( "Request failed: " + textStatus );
      });

    }
  </script>
  </body>
</html>
