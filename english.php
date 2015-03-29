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
  <title>Virtual server access order system</title>
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
          <img src="img/oamken.png" alt="Oulun Ammattikorkeakoulu" />
        </div>
      </div>
      <br>
      <!-- Language change -->
      <div class="row">
        <div class="col-md-1 col-md-offset-4 col-sm-2">
          <a href="index.php">
            <button type="btn" class="btn btn-default">
              Suomi
              <img src="img/fi.png" class="img-rounded"width="40px"/>
            </button>
          </a>
        </div>
      </div>
      <!-- Title -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <h4>Order virtual server access</h4>
        </div>
      </div>
      <br>
    </header>
    <form role="form" id="form">
      <!-- First name Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">First name</span>
            <input type="text" class="form-control" placeholder="First name" aria-describedby="sizing-addon3" id="fname" name="fname">
          </div>
        </div>
      </div>
      <br>
      <!-- Last name Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Last name</span>
            <input type="text" class="form-control" placeholder="Last name" aria-describedby="sizing-addon3" id="sname" name="sname">
          </div>
        </div>
      </div>
      <br>
      <!-- Studentnumber Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Student ID</span>
            <input type="text" class="form-control" placeholder="Stundent ID" aria-describedby="basic-addon3" id="account" name="account">
            <span class="input-group-addon" id="basic-addon3">@students.oamk.fi</span>
          </div>
        </div>
      </div>
      <br>
      <!-- Groupnumber Field -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">Group ID</span>
            <input type="text" class="form-control" placeholder="Group ID" aria-describedby="basic-addon3" id="group" name="group">
          </div>
        </div>
      </div>
      <br>
      <!-- Terms & Conditions -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <a href="#ehdot" class="fancybox">Terms & Conditions</a>
          <div id="ehdot" style="display:none;width:300px;">
            <h3>Info</h3>
            <p>
              School of Business and Information Management has acquired a virtual server and each student gets his/her own server space for the time of the whole education. In practice this means that student gets a small web hotel that s/he can use for supporting his/her studies.
            </p>
            <p>
              After sending the form an user account is created for the student and s/he gets an email message including information how to start with the server (e.x. username, password, addresses and instructions).
            </p>
            <p>
              Please note that the server is not meant for such use that is either unethical, inappropriate, against of good manners or irresponsible, and this kind of use leads to closing of an account.
            </p>
            <h3>Terms of use</h3>
            <p>
              I commit to responsible and appropriate use of server. Responsible use means, for example, that I take care of my user account (e.x. password) so that I am the only one who has the account information. Moreover I take care of updates of those applications I have installed and I use the server only for such purposes that support my studying.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
          <p><input type="checkbox" id="agree" name="agree"> I have read the terms above and agree to use the server in accordance with them</p>
        </div>
      </div>
      <!-- Submit button -->
      <div class="row">
        <div class="col-md-2 col-md-offset-4 col-sm-6">
          <button type="submit" class="btn btn-default">
            Submit
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
      this.content = '<h1>Virtual server terms of use</h1>' + this.content.html();
    }
  });
</script>
<!-- jQuery Validate -->
<script src="js/formvalidate.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/additional-methods.js"></script>
</body>
</html>
