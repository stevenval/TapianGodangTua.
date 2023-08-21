<?php
include 'admin/func_blog.php';
$id = $_GET["id"];
$data = query("SELECT * FROM tb_blog WHERE id_blog = $id")[0];
?>

<?php
include 'header.php';
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog Details</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Blog Details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container " data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">
        <div class="position-relative">
          <div class="col-lg-8 position-relative top-50 start-50 translate-middle ">

            <article class="blog-details">

              <div class="post-img">
                <img src="<?php echo "admin/imgs/" . $data['gambar']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <?php echo $data["judul"]; ?>
              </h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"><?php echo $data["penulis"]; ?></i> </li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"><?php echo $data["waktu"]; ?></i></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                <?php echo $data["isi_blog"]; ?>
                </p>
 
              </div><!-- End post content -->



            </article><!-- End blog post -->

          </div>
        </div>

      </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->

<?php
include 'footer.php';
?>