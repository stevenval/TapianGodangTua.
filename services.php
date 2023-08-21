<?php
include 'admin/func_service.php';
$ambil = query("SELECT*FROM tb_service ORDER BY id_service ASC");
?>


<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">



        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php $i = 1; ?>
          <?php foreach ($ambil as $row): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <figure class="figure">
                  <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="figure-img img-fluid rounded" alt="...">
                </figure>
                <div class="portfolio-info">
                  <h4>List Of Services</h4>
                  <p class="fs-4">
                    <?php echo $row["nama_service"]; ?>
                  </p>
                  <a href="<?php echo "admin/imgs/" . $row['gambar']; ?>" title=" <?php echo $row["nama_service"]; ?>"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>


                </div>
              </div>
            </div><!-- End Projects Item -->
            <?php $i++; ?>
          <?php endforeach; ?>


        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>