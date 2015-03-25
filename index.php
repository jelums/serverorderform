<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Virtuaalipalvelimen tilausjärjestelmä</title>
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
        <a href="#">
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
            <input type="text" class="form-control" placeholder="Etunimi" aria-describedby="sizing-addon3" id="firstname" name="firstname">
          </div>
        </div>
      </div>
      <br>
      <!-- Last name Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Sukunimi</span>
            <input type="text" class="form-control" placeholder="Sukunimi" aria-describedby="sizing-addon3" id="lastname" name="lastname">
          </div>
        </div>
      </div>
      <br>
      <!-- Studentnumber Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Opiskelijatunnus</span>
            <input type="text" class="form-control" placeholder="Opiskelijatunnus" aria-describedby="basic-addon3" id="studentid" name="studentid">
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
            <input type="text" class="form-control" placeholder="Ryhmätunnus" aria-describedby="basic-addon3" id="groupid" name="groupid">
          </div>
        </div>
      </div>
      <br>
      <!-- Terms & Conditions -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <a href="#ehdot" class="fancybox">Käyttöehdot</a>
          <div id="ehdot" style="display:none;width:300px;">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit, mi sed sollicitudin hendrerit, elit elit tristique velit, ut sagittis urna dolor non metus. Fusce viverra lacus sit amet urna porttitor eu mollis massa hendrerit.
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
  </body>
</html>
