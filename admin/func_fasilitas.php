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
    
	$nama_fasilitas=$data['nama_fasilitas'];
	$keterangan=$data['keterangan'];

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query="INSERT INTO tb_fasilitas (id_fasilitas,nama_fasilitas,keterangan,gambar)
			 values 
			 ('','$nama_fasilitas','$keterangan','$gambar')";

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
    $nama_fasilitas =htmlspecialchars($data["nama_fasilitas"]);
    $keterangan =htmlspecialchars($data["keterangan"]);
    $gambar = upload();
	if (!$gambar) {
		return false;
	}

    $query = "UPDATE tb_fasilitas SET
    nama_fasilitas='$nama_fasilitas',
    keterangan='$keterangan',
    gambar='$gambar'
    WHERE id_fasilitas = $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_fasilitas where id_fasilitas = $id");


	return mysqli_affected_rows($koneksi);
}


