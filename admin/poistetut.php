<!DOCTYPE html>
<?php

require '../includes/functions.php';

$conn = connect($config);

if ( $conn ) {
  $user = poistetut('user', $conn);
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
        <li role="presentation"><a href="uudet.php">Uudet tilaukset <span class="badge"><?= $laskuri($user, $conn); ?></span></a></li>
        <li role="presentation"><a href="hyvaksytyt.php">Hyväksytyt tunnukset</a></li>
        <li role="presentation"><a href="hylatyt.php">Hylätyt tunnukset</a></li>
        <li role="presentation" class="active"><a href="poistetut.php">Poistetut tunnukset</a></li>
        <li role="presentation" class="navbar-right"><a href="#">Kirjaudu ulos</a></li>
      </ul>
    </nav>
    <br>
    <div class="panel panel-default">
      <div class="panel-heading">Poistetut tunnukset</div>
      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
                Etunimi
              </th>
              <th>
                Sukunimi
              </th>
              <th>
                Sähköposti
              </th>
              <th>
                Opiskelijatunnus
              </th>
              <th>
                Ryhmätunnus
              </th>
              <th>
                Päivämäärä
              </th>
              <th>
                Hyväksyjä
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Single order -->
            <?php foreach($user as $row) : ?>
              <tr>
                <td>
                  <?= $row['id']?>
                </td>
                <td>
                  <?= $row['firstname']?>
                </td>
                <td>
                  <?= $row['surname']?>
                </td>
                <td>
                  <?= $row['email']?>
                </td>
                <td>
                  <?= $row['account']?>
                </td>
                <td>
                  <?= $row['class']?>
                </td>
                <td>
                  <?= $row['date']?>
                </td>
                <td>
                  Jesse Lumme
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- jQuery from Google API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
