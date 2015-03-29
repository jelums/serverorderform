<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Virtuaalipalvelimen tilausjärjestelmä</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <!-- Header -->
    <header>
      <!-- OAMK logo -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <img src="img/oamkfi.png" alt="Oulun Ammattikorkeakoulu" />
        </div>
      </div>
      <br>
    <!-- Language change -->
    <div class="row">
      <div class="col-md-1 col-md-offset-4 col-sm-2">
        <a href="english.php">
          <button type="btn" class="btn btn-default">
            English
            <img src="img/en.png" class="img-rounded"width="40px"/>
          </button>
        </a>
      </div>
    </div>
    <!-- Title -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-12">
        <h4>Tilaa virtuaalipalvelin käyttöösi</h4>
      </div>
    </div>
    <br>
    </header>
    <form role="form" id="form">
    <!-- First name Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Etunimi</span>
            <input type="text" class="form-control" placeholder="Etunimi" aria-describedby="sizing-addon3" id="fname" name="fname">
          </div>
        </div>
      </div>
      <br>
      <!-- Last name Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Sukunimi</span>
            <input type="text" class="form-control" placeholder="Sukunimi" aria-describedby="sizing-addon3" id="sname" name="sname">
          </div>
        </div>
      </div>
      <br>
      <!-- Studentnumber Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Opiskelijatunnus</span>
            <input type="text" class="form-control" placeholder="Opiskelijatunnus" aria-describedby="basic-addon3" id="account" name="account">
            <span class="input-group-addon" id="basic-addon3">@students.oamk.fi</span>
          </div>
        </div>
      </div>
      <br>
      <!-- Groupnumber Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Ryhmätunnus</span>
            <input type="text" class="form-control" placeholder="Ryhmätunnus" aria-describedby="basic-addon3" id="group" name="group">
          </div>
        </div>
      </div>
      <br>
      <!-- Terms & Conditions -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <a href="#ehdot" class="fancybox">Käyttöehdot</a>
          <div id="ehdot" style="display:none;width:300px;">
            <h3>Ohjeet</h3>
            <p>
              Liiketalouden yksikköön on hankittu virtuaalipalvelin, josta opiskelija saa palvelintilan käyttöönsä koko koulutuksen ajaksi. Käytännössä tämä tarkoittaa sitä, että opiskelija saa koululta pienen web-hotellin, jota hän voi käyttää opiskelua tukeviin ja edistäviin tarkoituksiin.
            </p>
            <p>
              Lomakkeen lähettämisen jälkeen opiskelijalle luodaan tili palvelimelle ja hän saa sähköposti¬viestin, jossa on tarvittavat tiedot alkuunpääsemiseksi (mm. tunnus, salasana, osoitteita ja ohjeita).
            </p>
            <p>
              Huomaa, että palvelimen epäeettinen, epäasiallinen, hyvien tapojen vastainen tai vastuuton käyttö johtaa siihen, että opiskelijan käyttäjätili suljetaan.
            </p>
            <h3>Käyttöehdot</h3>
            <p>
              Sitoudun palvelimen vastuulliseen ja asianmukaiseen käyttöön. Vastuullinen käyttö tarkoittaa mm. sitä, että huolehdin käyttäjätilini tiedoista (esim. salasana) siten, että ne pysyvät vain minun tiedossa. Lisäksi huolehdin asentamieni ohjelmistojen päivityksistä ja käytän palvelintilaa vain opiskeluani tukeviin ja edistäviin tarkoituksiin.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <p><input type="checkbox" id="agree" name="agree"> Olen lukenut ylläesitetyt ehdot ja sitoudun käyttämään palvelinta niiden mukaisesti</p>
        </div>
      </div>
      <!-- Submit button -->
      <div class="row">
        <div class="col-md-2 col-md-offset-4 col-sm-6">
          <button type="submit" class="btn btn-default">
            Lähetä
          </button>
        </div>
      </div>
    </form>
    </div>
  <!-- jQuery from Google API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- fancyBox -->
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <script>$(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    afterLoad   : function() {
      this.content = '<h1>Virtuaalipalvelimen käyttöehdot</h1>' + this.content.html();
    }
  });
  </script>
  <!-- jQuery Validate -->
  <script src="js/formvalidate.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/messages_fi.js"></script>
  <script src="js/additional-methods.js"></script>
  </body>
</html>
