<?php
$koneksi=mysqli_connect("localhost","root","","tapian_godang");

function query($query){
    global $koneksi;
	
	$ambil=mysqli_query($koneksi,$query);
	$row=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}
	return $rows;
}


function simpan($data){
	global $koneksi;
   
   $penulis=$data['penulis'];
   $judul=$data['judul'];
   $isi_blog=$data['isi_blog'];
   $waktu= date("d/m/Y");

   $gambar = upload();
	if (!$gambar) {
		return false;
	}
  

   $query="INSERT INTO tb_blog(id_blog,penulis,waktu,judul,isi_blog,gambar)
			values 
			('','$penulis','$waktu','$judul','$isi_blog','$gambar')";

   mysqli_query($koneksi, $query);

   return mysqli_affected_rows($koneksi);

}
function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
//cek apakah tidak ada gambar yg di upload
	if ($error === 4) {
		echo " <script>
		alert ('pilih gambar dahulu');
		</script>";
		return false;
	}

//cek apakah yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end ($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo " <script>
		alert ('yang anda upload bukan gambar');
		</script>";
		return false;
	}

// cek jika ukuran terlalu besar
	if ($ukuranFile > 10000000) {
		echo " <script>
		alert ('ukuran terlalu besar, ganti yang lain atau rubah ukuran');
		</script>";
		return false;
	}

//jika upload lolos
//generate nama gambar baru

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.= $ekstensiGambar;


	move_uploaded_file($tmpName, 'imgs/'.$namaFileBaru);

	return $namaFileBaru;


}


function ubah($data){
    global $koneksi;

    $id =$data["id"];
    $penulis =htmlspecialchars($data["penulis"]);
    $judul =htmlspecialchars($data["judul"]);
    $isi_blog =htmlspecialchars($data["isi_blog"]);
    $waktu= date("d/m/Y");

    $gambar = upload();
	if (!$gambar) {
		return false;
	}

    $query = "UPDATE tb_blog SET
    penulis='$penulis',
    judul='$judul',
    isi_blog='$isi_blog',
    waktu='$waktu',
    gambar='$gambar'
    WHERE id_blog = $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_blog where id_blog = $id");


	return mysqli_affected_rows($koneksi);
}

