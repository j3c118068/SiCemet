<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  <h2>Kenali Proyek Anda</h2>
<form action="form2.php" method="POST">
  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput">Kebutuhan Awal</label>
    <br/>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="kebAwal" id="inlineRadio1" value="1" required>
    <label class="form-check-label" for="inlineRadio1">Dapat Dijelaskan</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kebAwal" id="inlineRadio2" value="2" required>
  <label class="form-check-label" for="inlineRadio2">Belum Jelas</label>
</div>
  </div>

  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput2">Kompleksitas</label>
    <br/>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kompleks" id="inlineRadio3" value="1" required>
        <label class="form-check-label" for="inlineRadio3">Sederhana</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kompleks" id="inlineRadio4" value="2K" required>
        <label class="form-check-label" for="inlineRadio4">Kompleks</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kompleks" id="inlineRadio5" value="3" required>
        <label class="form-check-label" for="inlineRadio5">Sangat Kompleks</label>
    </div>
  </div>

  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput2">Waktu Delivery</label>
    <br/>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="delivery" id="inlineRadio6" value="1" required>
        <label class="form-check-label" for="inlineRadio6"> < 1 bulan</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="delivery" id="inlineRadio7" value="2" required>
        <label class="form-check-label" for="inlineRadio7">1-3 bulan</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="delivery" id="inlineRadio8" value="3" required>
        <label class="form-check-label" for="inlineRadio8">4-6 bulan</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="delivery" id="inlineRadio9" value="4" required>
        <label class="form-check-label" for="inlineRadio9">6-12 bulan</label>
    </div>
  </div>

  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput">Jumlah Tim (SDM)</label>
    <br/>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="SDM" id="inlineRadio10" value="1" required>
        <label class="form-check-label" for="inlineRadio10">< 12 orang</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="SDM" id="inlineRadio11" value="2" required>
        <label class="form-check-label" for="inlineRadio11">> 12 orang</label>
    </div>
  </div>

  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput2">Ketrampilan Tim</label>
    <br/>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio12" value="1" required>
        <label class="form-check-label" for="inlineRadio12">Berpengalaman</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio13" value="2" required>
        <label class="form-check-label" for="inlineRadio13">Campuran</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ketrampilan" id="inlineRadio14" value="3" required>
        <label class="form-check-label" for="inlineRadio14">Tidak Berpengalaman</label>
    </div>
  </div>

  <div class="form-group">
    <label class="kuning" for="formGroupExampleInput">Klien Terlibat Langsung</label>
    <br/>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="klien" id="inlineRadio15" value="1" required>
        <label class="form-check-label" for="inlineRadio15">Terlibat</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="klien" id="inlineRadio16" value="2" required>
        <label class="form-check-label" for="inlineRadio16">Tidak Terlibat</label>
    </div>
  </div>
  <br/>
  <div class="tgh">
    <div class="tombol">
        <input type="submit" name="cek">
    </div>
    <br/>
      <div class="tombol">
        <input type="reset" name="bersih" value="Bersihkan">
      </div>
</div>
</form>

</div>

<?php
  if (isset($_GET['cek'])) {
    if(isset($_GET['radioo']))
    {
    echo "<span>You have selected :<b> ".$_GET['radioo']."</b></span>";
    }
    else{ echo "<span>Please choose any radio button.</span>";}
    }
    ?>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
