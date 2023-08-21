<?php

include_once 'func_messege.php';
$id=$_GET["id"];
$data = query("SELECT * FROM tb_messege WHERE id_pesan = $id")[0];
?>


<?php
include 'header.php';
?>


<div class="container-fluid">
<div class="position-relative">
  <div class="position-absolute top-0 end-0">
    <p class="fs-4">Waktu Masuk : <?php echo $data["tanggal"]?></p>
  </div>
</div>
<br> <br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Pengirim</label>
  <input type="email" class="form-control" id="exampleFormControlInput1"  value="<?php echo $data["nama_pengirim"]?> " disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Pengirin</label>
  <input type="email" class="form-control" id="exampleFormControlInput1"  value="<?php echo $data["email"]?>" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Subjek Pesan</label>
  <input type="email" class="form-control" id="exampleFormControlInput1"  value="<?php echo $data["subjek"]?>" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Pesan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" " disabled><?php echo $data["pesan"]?></textarea>
</div>
</div>

