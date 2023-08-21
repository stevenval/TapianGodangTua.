<?php
include 'admin/func_blog.php';
$ambil = query("SELECT*FROM tb_blog ORDER BY id_blog DESC LIMIT 3 ");

?>


<?php
include "header.php";
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span><br>PT. Tapian Godang Tua</span></h2>
          <p data-aos="fade-up">STEEL FABRICATION & GENERAL CONTRACTOR</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Get Started Section ======= -->
  <section id="get-started" class="get-started section-bg">
    <div class="container">

      <div class="row justify-content-between gy-4">

        <div class="col-lg-6 d-flex align-items-center " data-aos="fade-up">
          <div class="content">
            <h3>We created this company profile to introduce our work, goals, and establish partnerships</h3>
            <p class="fs-4" align="justify">We developed this company profile with the aim and purpose of introducing
              our work and goals to potential customers and to broaden our networking to create a good cooperation and
              partnership with all the costumers.</p>
          </div>
        </div>

        <div class="col-lg-5" data-aos="fade">
          <img src="assets/img/gambar_luar.png" class="img-fluid mt-4 border border-black rounded-3" alt="Outdoor Area">

        </div>

      </div>

    </div>
  </section><!-- End Get Started Section -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Location & Area</h2>
        <p class="fw-bolder fs-5">PT. Tapian Godang Tua</p>
        <p>Jl. Raya Cilincing No.24, RT.11/RW.2, Cilincing, Kec. Cilincing - Jakarta Utara 14120</p>
      </div>
      <ul class="nav nav-tabs row  g-2 d-flex">

        <li class="nav-item col-6">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>Indoor Area</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-6">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>Outdoor Area</h4>
          </a><!-- End tab nav item -->
      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 pt-4 mt-lg-0 d-flex flex-column justify-content-start"
              data-aos="fade-up" data-aos-delay="100">
              <h3>INDOOR AREA</h3>
              <p class="fst-italic fs-4">
                TOTAL AREA INDOOR +- 1.500 M
              </p>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/gambar_dalam.png" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-start">
              <h3>OUTDOOR AREA</h3>
              <p class="fst-italic fs-4">
                TOTAL AREA OUTDOOR +- 2,5 HA
              </p>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/gambar_luar.png  " alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

      </div>

    </div>
  </section><!-- End Features Section -->






  <!-- ======= Constructions Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Facility</h2>

      </div>

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <a href="facility.php">
                  <div class="card-bg" style="background-image: url(assets/img/fas_1.png);"></div>
                </a>
              </div>
              <div class="col-xl-7 d-flex align-items-start">
                <div class="card-body">
                  <h4 class="card-title">HYDRAULIC FOUR ROLLER ROLLING MACHINE</h4>
                  <table>
                    <tr>
                      <td>
                        <p>Minimum Diameter Roll : 400 mm</p>
                        <p>Maximum Thickness : 16 mm</p>
                        <p>Maximum Length : 3000mm</p>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <a href="facility.php">
                  <div class="card-bg" style="background-image: url(assets/img/fas_2.png);"></div>
                </a>
              </div>
              <div class="col-xl-7 d-flex align-items-start">
                <div class="card-body">
                  <a href="facility.php">
                    <h4 class="card-title">HYDRAULIC SECTION BENDING MACHINE</h4>
                  </a>
                  <table>
                    <tr>
                      <td>Pipe</td>
                      <td> : </td>
                      <td> Max. 4 In</td>
                    </tr>
                    <tr>
                      <td>Angle</td>
                      <td> : </td>
                      <td> Max. L-100</td>
                    </tr>
                    <tr>
                      <td>UNP</td>
                      <td> : </td>
                      <td> Max.UNP-100</td>
                    </tr>
                    <tr>
                      <td>WF & HB</td>
                      <td> : </td>
                      <td> Max. WF & HB-100</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->


 <!-- ======= Our Service Section ======= -->
 <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Service</h2>

      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">


        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/bending.jpg"  width="400" height="200" alt="">
              <a href="services.php">
              <div class="portfolio-info">
                <h4>Our Service</h4>
                <p class="fs-4">Bending Plate</p>
                <a href="assets/img/bending.jpg" title="Bending Plate"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>                
              </div></a>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/rolling_pipe.jpg" class="img-fluid" alt="">
              <a href="services.php">
              <div class="portfolio-info">
                
                <h4>Our Service</h4>
                <p class="fs-4">Rolling Pipe</p>
                <a href="assets/img/rolling_pipe.jpg" title="Rolling Pipe"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                
              </div></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
             <img src="assets/img/rolling_plate.jpg" class="img-fluid" alt="">
             <a href="services.php">
              <div class="portfolio-info">
                <h4>Our Service</h4>
                <p class="fs-4">Rolling Plate</p>
                <a href="assets/img/rolling_plate.jpg" title="Rolling Plate 1"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                
              </div></a>
            </div>
          </div><!-- End Service Item -->

        </div><!-- End Service Container -->

      </div>

    </div>
  </section><!-- End Our Service Section -->




  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Projects</h2>
      
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">


        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/fabri.png" class="img-fluid" alt="">
              <a href="projects.php">
              <div class="portfolio-info">
                <h4>Our Projects</h4>
                <p>Fabrication</p>
                <a href="assets/img/fabri.png" title="Fabrication"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                
              </div></a>
            </div>
          </div><!-- End Projects Item -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/fabri_tank.png" class="img-fluid" alt="">
              <a href="projects.php">
              <div class="portfolio-info">
                <h4>Our Projects</h4>
                <p>Fabrication Transportation Tank</p>
                <a href="assets/img/fabri_tank.png" title="Fabrication Transportation Tank"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                
              </div></a>
            </div>
          </div><!-- End Projects Item -->
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/piping.jpg" height="300" alt="">
              <a href="projects.php">
              <div class="portfolio-info">
                <h4>Our Projects</h4>
                <p>Piping</p>
                <a href="assets/img/piping.jpg" title="Piping"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                
              </div></a>
            </div>
          </div><!-- End Projects Item -->

            





        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->




  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up"">

    
    
  <div class=" section-header">
      <h2>Recent Blog Posts</h2>
      <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
    </div>

    <div class="row gy-5 ">

      <?php $i = 1; ?>
      <?php foreach ($ambil as $row): ?>
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <!-- <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""> -->
              <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="img-fluid">
              <span class="post-date">
                <?php echo $row["waktu"]; ?>
              </span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">
                <?php echo $row["judul"]; ?>
              </h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">
                    <?php echo $row["penulis"]; ?>
                  </span>
                </div>

              </div>

              <p>
                <?php
                $isi = $row["isi_blog"];
                if (str_word_count($isi) > 50) {
                  echo substr($isi, 0, 200) . "...";
                } else {
                  echo "$isi";
                }
                ?>
              </p>

              <hr>

              <a href="blog-details.php?id=<?php echo $row["id_blog"] ?>" class="readmore stretched-link"><span>Read
                  More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->
        <?php $i++; ?>
      <?php endforeach; ?>




    </div><!-- End post item -->



    </div>

    </div>
  </section>
  <!-- End Recent Blog Posts Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>