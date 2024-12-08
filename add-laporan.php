<?php
	include 'koneksi.php';
        
    $nama = $_POST['nama'];
    $fasilitas = $_POST['fasilitas'];
    $pilihan_tempat = $_POST['pilihan_tempat'];
    $fasilitas_rusak = $_POST['fasilitas_rusak'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];
			$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
			$nama_file = $_FILES['file']['name'];
			$x = explode('.', $nama_file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5044070){
					move_uploaded_file($file_tmp, 'file/'.$nama_file);
					$query = mysqli_query($conn,"INSERT INTO laporan(nama, fasilitas, pilihan_tempat, fasilitas_rusak, alamat, foto, keterangan)
                    VALUES('$nama','$fasilitas', '$pilihan_tempat','$fasilitas_rusak','$alamat','$nama_file','$keterangan')");
					if($query){
            echo
            "<script>
            alert('Laporan Anda Berhasil Ditambahkan');
            document.location.href = 'index.php';
            </script>
            ";
					}else{
						echo
            "<script>
            alert('Laporan Gagal Ditambahkan');
            document.location.href = 'index.php';
            </script>
            ";
					}
				}else{
					echo
            "<script>
            alert('Ukuran Gambar terlalu besar');
            document.location.href = 'index.php';
            </script>
            ";
				}
			}else{
				echo
            "<script>
            alert('Ekstensi gambar yang diupload tidak diperbolehkan');
            document.location.href = 'index.php';
            </script>
            ";
			}
		
		
?>