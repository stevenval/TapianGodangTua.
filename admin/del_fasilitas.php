<?php 

include 'func_fasilitas.php';

$id = $_GET["id"];


if (hapus ($id)) {
	echo "

		<script>
			alert('data berhasil di hapus');
			document.location.href = 'admin_fasilitas.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di hapus');
			document.location.href = 'admin_fasilitas.php';
		</script>

		";
}

 ?>
