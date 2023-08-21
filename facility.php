<?php
include 'admin/func_fasilitas.php';
$ambil = query("SELECT*FROM tb_fasilitas ORDER BY id_fasilitas ASC");
?>


<?php
include "header.php";
?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Facility</h2>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Facility</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
            <?php $i = 1; ?>
     <?php foreach ($ambil as $row): ?>
                <div class="col-lg-6 col-md-8 " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        
                            <div class="img">
                                <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" width="400" height="200">
                            </div>
                            <!-- <p style="hidden">
                                <?php echo $i; ?>
                            </p> -->
                            <h3>
                                <?php echo $row["nama_fasilitas"]; ?>
                            </h3>
                            <p>
                                <?php echo nl2br($row["keterangan"]); ?>
                            </p>
                            


                    </div>

                </div><!-- End Service Item -->
                <?php $i++; ?>
                        <?php endforeach; ?>

                

            </div>

        </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include "footer.php";
?>