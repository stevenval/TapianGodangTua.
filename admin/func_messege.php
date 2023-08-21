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

function query1($query){
    global $koneksi;
	
	$ambil=mysqli_query($koneksi,$query);
	$row=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}
	return $rows;
}
function query2($query){
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
   
   $nama_pengirim=$data['nama_pengirim'];
   $email=$data['email'];
   $subjek=$data['subjek'];
   $pesan=$data['pesan'];
   $tanggal= date("d/m/Y H:i:s");

  

   $query="INSERT INTO tb_messege(id_pesan,nama_pengirim,email,subjek,pesan,tanggal)
			values 
			('','$nama_pengirim','$email','$subjek','$pesan','$tanggal')";

   mysqli_query($koneksi, $query);

   return mysqli_affected_rows($koneksi);

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
	mysqli_query($koneksi, "DELETE FROM tb_messege where id_pesan = $id");


	return mysqli_affected_rows($koneksi);
}
