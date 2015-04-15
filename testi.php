QUERYN OSA
$results = $stmt->fetchAll();
return $results ? $results : false;

<?php
$user = get('user', $conn);

if ( $user ) {
  foreach($user as $user) {
    echo
    "<h4>{$user['id']}</h4>";
  }
} else {
  echo 'Ei uusia tilauksia';
}
?>

<?php if ( $rows ) : ?>
  <?php print_r($rows)?>
  <div id="card">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h4>ORDER ID <?= $rows['id'];?></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <strong>Etunimi</strong> <?= $rows['frontname'];?>
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
<?php endif; ?>
