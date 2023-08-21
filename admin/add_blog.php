<?php

include 'func_blog.php';
//$ambil = query("SELECT*FROM kategori ORDER BY id_kategori ASC");


if (isset($_POST["submit"])) {
    if (simpan($_POST) > 0) {
        echo "
				<script>
				alert('Data Facility Successfully added');
				document.location.href='admin_blog.php';
				;
				</script> ";
    } else {
        echo "
				<script>
				alert('Data Facility failed to add');
				document.location.href='admin_blog.php';
				</script> ";

    }
}

?>

<?php
include "header.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-darkmary">Add a New Blog</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Name Of Writer" name="penulis">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Title of Content" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="summernote" class="form-label">Description</label>
                        <textarea class="form-control" id="summernote" rows="3" name="isi_blog"
                            ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Images</label>
                        <input class="form-control" type="file" id="formFile" name="gambar">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>
<!-- End of Main Content -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Summernote JS - CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function () {
        // $("#summernote").summernote();
        $('#summernote').summernote({
            placeholder: 'Type Here',
            height: 300
        });
        $('.dropdown-toggle').dropdown();
    });
</script>
<!-- //Summernote JS - CDN Link -->

