<!DOCTYPE html>
<?php

require '../includes/functions.php';

$conn = connect($config);

if ( $conn ) {
  $user = hyvaksytyt('user', $conn);
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
    <link rel="stylesheet" href="http://order.studyingroom.net/css/style.css">
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
    <ul class="nav nav-tabs">
      <li role="presentation"><a href="uudet.php">Uudet tilaukset <span class="badge"><?= $laskuri($user, $conn); ?></span></a></li>
      <li role="presentation" class="active"><a href="hyvaksytyt.php">Hyväksytyt tunnukset</a></li>
      <li role="presentation"><a href="hylatyt.php">Hylätyt tunnukset</a></li>
      <li role="presentation"><a href="poistetut.php">Poistetut tunnukset</a></li>
    </ul>
    <br>
    <div class="panel panel-success">
    <div class="panel-heading">Hyväksytyt tunnukset</div>
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
      <?php foreach($user as $row) : ?>
        <tr>
          <td>
            <?= $row['id']?>
          </td>
          <td>
            <p><?= $row['firstname']?>
          </td>
          <td>
            <?= $row['surname']?>
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
        <td>
          <button type="submit" class="btn btn-xs btn-danger">
            Poista
          </button>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
  </div>
  </div>
  <!-- jQuery from Google API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
