<?php

include 'admin/func_messege.php';


if (isset($_POST["submit"])) {
  if (simpan($_POST) > 0) {
    echo "
				<script>
				alert('Data Project Successfully added');
				document.location.href='contact.php';
				;
				</script> ";
  } else {
    echo "
				<script>
				alert('Data Project failed to add');
				document.location.href='contact.php';
				</script> ";

  }
}

?>

<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Contact</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Our Address</h3>
            <p style="text-align-center">Jl. Raya Cilincing No.24, RT.11/RW.2, Cilincing, Kec. Cilincing,<br> Jkt Utara,
              Daerah Khusus Ibukota Jakarta 14120</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p class="fs-5">tapiangodangtua@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p class="fs-5">021 2240 5264</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-6 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1920863236824!2d106.92790317385608!3d-6.104817159873816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a213f7a21e573%3A0x4484ea8b555b562b!2sPT.%20Tapian%20Godang%20Tua!5e0!3m2!1sid!2sid!4v1688146251503!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="col-lg-6">
          <!-- <form method="POST" action="" class="php-email-form">
            <div class="row gy-4">
              <div class="col-lg-6 form-group">
                <input type="text" name="nama_pengirim" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>  
           
          </form> -->
          <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Your Name" name="nama_pengirim">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Your Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Purpose Of Message" name="subjek">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pesan</label>
                    <textarea class="form-control" name="pesan" rows="3" placeholder="Message"></textarea>
                   
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="submit" name="submit">Submit</button>
                </div>
                </form>
            </div>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>