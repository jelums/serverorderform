<?php

// If the values are posted, insert them into the database.
$data = array();

$firstnameErr = $surnameErr = $accountErr = $classErr = $messageErr = $termsErr = "";
$firstname = $surname = $account = $class = $successMessage = "";
$errors = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (empty($_POST["firstname"])) {
      $firstnameErr =
      '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Etunimi vaaditaan
      </div>';
      $errors = 1;

    } else {
      $firstname = test_input($_POST["firstname"]);
      // check if firstname only contains letters, numbers and whitespace
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$firstname)) {
        $firstnameErr =
        '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Vain kirjaimet,numerot ja välilyönnit ovat sallittuja
        </div>';
        $errors = 1;
      }
    }

    if (empty($_POST["surname"])) {
      $surnameErr =
      '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Sukunimi vaaditaan
      </div>';
      $errors = 1;
    } else {
      $surname = test_input($_POST["surname"]);
      // check if surname only contains letters, numbers and whitespace
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$surname)) {
        $surnameErr =
        '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Vain kirjaimet,numerot ja välilyönnit ovat sallittuja
        </div>';
        $errors = 1;

      }
    }

    if (empty($_POST["account"])) {
      $accountErr =
      '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Syötä opiskelijatunnus muodossa A1ABCD12
      </div>';
      $errors = 1;

    } else {
      $account = test_input($_POST["account"]);
      // check if account is in correct format
      if (!preg_match("/^[a-zA-Z0-9]*$/",$account)) {
        $accountErr =
        '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Syötä opiskelijatunnus muodossa A1ABCD12
        </div>';
        $errors = 1;

      }
    }

    if (empty($_POST["class"])) {
      $classErr =
      '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Syötä ryhmätunnuksesi muodossa ABC1AB
      </div>';
      $errors = 1;

    } else {
      $class = test_input($_POST["class"]);
      // check if class is in correct format
      if (!preg_match("/^[a-zA-Z0-9]*$/",$class)) {
        $classErr =
        '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Syötä ryhmätunnuksesi muodossa ABC1AB
        </div>';
        $errors = 1;

      }
    }
      if(empty($_POST['agree']))
      {
        $termsErr =
        '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Sinun tulee hyväksyä käyttöehdot
        </div>';
        $errors = 1;
      }


    if($errors == 0)
    {
      $successMessage ='
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12" role="alert">
          <div class="alert alert-success" role="alert">
            <h4 align="center">Hakemus lähetetty onnistuneesti</h4>
          </div>
        </div>
      </div>'; // IF no errors set successMessage
    }

    if($errors > 0)
    {
      return false;
    }


  query("INSERT INTO user(account, email, firstname, surname, class, status, isadmin) VALUES(:account, :email, :firstname, :surname, :class, 0, 0)",
        array('account'   => $account,
              'firstname' => $firstname,
              'surname'   => $surname,
              'class'     => $class,
              'email'     => $account),
              $conn);

              $conn = null;
}
