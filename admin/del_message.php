<?php 

include 'func_messege.php';

$id = $_GET["id"];


if (hapus ($id)) {
	echo "

		<script>
			alert('data berhasil di hapus');
			document.location.href = 'admin_messege.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di hapus');
			document.location.href = 'admin_messege.php';
		</script>

		";
}

 ?>
