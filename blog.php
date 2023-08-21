<?php
include 'admin/func_blog.php';
$ambil = query("SELECT*FROM tb_blog ORDER BY id_blog DESC  ");
?>


<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">

        <?php $i = 1; ?>
        <?php foreach ($ambil as $row): ?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <!-- <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""> -->
                <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="img-fluid"> 
                <span class="post-date"><?php echo $row["waktu"]; ?></span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"><?php echo $row["judul"]; ?></h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2"><?php echo $row["penulis"]; ?></span>
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

                <a href="blog-details.php?id=<?php echo $row["id_blog"] ?>" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->
          <?php $i++; ?>
        <?php endforeach; ?>

        


      </div><!-- End blog posts list -->



    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>

