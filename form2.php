
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/eaf34ca0ca.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>SiCeMet</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body class="tengah">
<div class="form">
  <div class="tgh">
    <a href="index.php"><img src="aset/sicemet2.png"></a>
  </div>
  <h2>Metodologi Yang paling cocok untuk proyek anda</h2>
  
<table class="table">
  <thead>
    <tr>
      <th class="teks" scope="col">No.</th>
      <th class="teks" scope="col">Nama Metodologi</th>
      <th class="teks" scope="col">Aksi</th>
    </tr>
  </thead>
</table>

<?php

  include "decl_class.php";

  foreach($methods as $mtd) {
    if ($mtd->methReqs == $answer[0]) {
      $mtd->methPoints +=1;
    }
    if ($mtd->methComps == $answer[1]) {
      $mtd->methPoints +=1;
    }
    if ($mtd->methTime == $answer[2]) {
      $mtd->methPoints +=1;
    }
    if ($mtd->methTeams == $answer[3]) {
      $mtd->methPoints +=1;
    }
    if ($mtd->methSkills == $answer[4]) {
      $mtd->methPoints +=1;
    }
    if ($mtd->methClient == $answer[5]) {
      $mtd->methPoints +=1;
    }
  }

  $match = array();

  foreach($methods as $mtd) {
    if($mtd->methPoints >= 3) {
      $match[] = $mtd;
      
    }
  }
  rsort($match);

?>

<ul>

  <?php
  $i = 0;
    foreach ($match as $cck) {
      $i+=1;
  ?>

  <li>
    <span class="metode" style="color:#fff;"><?php echo $i.'. ';?></span>
    <span class="metode" style="color:#fff;"><?php echo $cck->methName;?></span>
    <span class="det"><a href="<?php echo $cck->methLink;?>"><input type="submit" name="detail" value="Detail"></a></span>
  </li>

  <?php
    }
  ?>


</ul>

<div class="txt cntr">
  <a href="form.php">Ulangi</a>
</div>


</div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>