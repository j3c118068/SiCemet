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
    <img src="aset/sicemet2.png">
  </div>
  <h2>Metodologi incremental</h2>
  
  <h3 class="acc">Alur Metodologi (Gambar)</h3>
  <div class="jelas cntr">
  <img src="aset/inc.png">
  </div>

  <h3 class="acc">Penjelasan</h3>
  <div class="jelas">
    <p>
    Incremental model adalah model pengembangan sistem pada software development berdasarkan requirement software yang dipecah menjadi beberapa fungsi atau bagian sehingga model pengenbangannya secara bertahap. Dengan menggunakan incremental model dapat membantu kita untuk mengurangi biaya sebelum mencapai level dari initial productivity dan mengakselerasi proses dari pembuatan suatu fungsi sistem.<br><br>

    1. Requirement: proses penentuan kebutuhan atau analisis kebutuhan.<br>
    2. Specification: proses spesifikasi dimana menggunakan analisis kebutuhan sebagai acuannya.<br>
    3. Architecture Design: perancangan software yang terbuka agar dapat diterapkan sistem pembangunan per-bagian pada tahapan selanjutnya.<br>
    4. Code: melakukan koding.<br>
    5. Test: melakukan testing dalam model ini.<br>

    </p>
  </div>

  <h3 class="acc">Kelebihan</h3>
  <div class="jelas">
    <p>
  1.	Merupakan model dengan manajemen yang sederhana<br>
  2.	Pengguna tidak perlu menunggu sampai seluruh sistem dikirim untuk mengambil keuntungan dari sistem tersebut.  Increment yang pertama sudah memenuhi persyaratan mereka yang paling kritis, sehingga perangkat lunak dapat segera digunakan.<br>
  3.	Resiko untuk kegagalan proyek secara keseluruhan lebih rendah. Walaupun masalah masih dapat ditemukan pada beberapa increment. Karena layanan dengan prioritas tertinggi diserahkan pertama dan increment berikutnya diintegrasikan dengannya, sangatlah penting bahwa layanan sistem yang paling penting mengalami pengujian yang ketat. Ini berarti bahwa pengguna akan memiliki kemungkinan kecil untuk memenuhi kegagalan perangkat lunak pada increment sistem yang paling bawah.<br>
  4.	Nilai penggunaan dapat ditentukan pada setiap increment sehingga fungsionalitas sistem disediakan lebih awal.<br>
  5.	Memiliki risiko lebih rendah terhadap keseluruhan pengembagan sistem,<br>
  6.	Prioritas tertinggi pada pelayanan sistem adalah yang paling diuji<br>

        </p>
  </div>

  <h3 class="acc">Kelemahan</h3>
  <div class="jelas">
    <p>
    1.	Kemungkinan tiap bagian tidak dapat diintegrasikan<br>
    2.	Dapat menjadi build and Fix Model, karena kemampuannya untuk selalu mendapat perubahan selama proses rekayasa berlangsung<br>
    3.	Harus Open Architecture<br>
    4.	Mungkin terjadi kesulitan untuk memetakan kebutuhan pengguna ke dalam rencana spesifikasi masing-masing hasil increment.<br>
    5.	Membutuhkan waktu yang relative lama untuk menghasilan product yang lengkap<br>

    </p>

    <p class="acc">Daftar Pustaka<p>
    <div class="jelas">
      <p>mulya, a., 2020. 5 Metode Penelitian - Alex Mulyana "1141177004070." 5 Metode Penelitian Rekayasa Perangkat Lunak, [online] Available at: <a href="https://sites.google.com/a/student.unsika.ac.id/alex-mulyana-11070/assignments/5metodepenelitian/5-metode-penelitian-rekayasa-perangkat-lunak">https://sites.google.com/a/student.unsika.ac.id/alex-mulyana-11070/assignments/5metodepenelitian/5-metode-penelitian-rekayasa-perangkat-lunak</a>
      </p><br>
    </div>

  </div>
    <div class="kanan">
        <div class="tombol">
            <input type="submit" onclick="kembali()" name="cekin" value="Kembali Ke list">
            
        </div>
    </div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
      function kembali() {
        window.history.back();
      }
    </script>
</body>
</html>