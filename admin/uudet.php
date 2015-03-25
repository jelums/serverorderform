<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://order.studyingroom.net/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Virtuaalipalvelimen tilausjärjestelmän ylläpito</title>
  </head>
  <body>
  <div class="container">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="uudet.php">Uudet tilaukset <span class="badge">1</span></a></li>
      <li role="presentation"><a href="hyvaksytyt.php">Hyväksytyt tilaukset</a></li>
      <li role="presentation"><a href="hylatyt.php">Hylätyt tilaukset</a></li>
    </ul>
    <br>
    <!-- Application Card -->
    <div id="card">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h4>ORDER ID</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <strong>Etunimi</strong> Jesse
        </div>
        <div class="col-md-4 col-sm-12">
          <strong>Sukunimi</strong> Lumme
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <strong>Opiskelijatunnus</strong> s3luje00
        </div>
        <div class="col-md-4 col-sm-12">
          <strong>Ryhmätunnus</strong> TIK3KA
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          24.03.2015 11:14
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2 col-sm-6">
          <button type="submit" class="btn btn-success">
            Hyväksy
          </button>
          <button type="submit" class="btn btn-danger">
            Hylkää
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery from Google API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
