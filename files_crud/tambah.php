<?php 
require('fungsi.php');
if(isset($_POST['kirim'])){
	define('DB','Rincian_buku.txt');
	if(!file_exists(DB)){
		saveTxt(DB,"kode buku|judul buku|pengarang|tahun terbit|jumlah halaman|penerbit|kategori|cover|".PHP_EOL,'a');
	}
	$proses = @file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$kode = $_POST['Kode'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$tahun_terbit = $_POST['Tahun_terbit'];
	$jmlh_halaman = $_POST['jmlh_halaman'];
	$penerbit = $_POST['Penerbit'];
	$jenis_buku = $_POST['kategori'];
	$cover = $_POST['link'];
	saveTxt(DB,"$kode|$judul|$pengarang|$tahun_terbit|$jmlh_halaman|$penerbit|$jenis_buku|$cover|".PHP_EOL,'a');
    echo "sucsess";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    
</head>
<body>
    <h1>DATA BUKU</h1>
            <ul>
                <li>
                    <a href="tampil.php">
                        <span class="title">TAMPILKAN DATA</span>
                    </a>
                </li>
                <li>
                    <a href="tambah.php">
                        <span class="title">TAMBAHKAN DATA</span>
                    </a>
                </li>
                <li>
                    <a href="ubah.php">
                        <span class="title">UPDATE DATA</span>
                    </a>
                </li>
                <li>a
                    <a href="hapus.php">
                        <span class="title">HAPUS</span>
                    </a>
                </li>
            </ul>
            <h3>TAMBAHKAN DATA</h3>
                <form action="" method="POST">
                    <fieldset>
                        <legend>Form</legend>
                        <table>
                            <tr>
                                <td>Kode</td>
                                <td> : </td>
                                <td><input type="text" name="Kode" required></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td> : </td>
                                <td><input type="text" name="judul" required></td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td> : </td>
                                <td><input type="text" name="pengarang" required></td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td> : </td>
                                <td><input type="text" name="Tahun_terbit" required></td>
                            </tr>
                            <tr>
                                <td>Jmlh Halaman</td>
                                <td> : </td>
                                <td><input type="text" name="jmlh_halaman" required></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td> : </td>
                                <td><input type="text" name="Penerbit" required></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td> : </td>
                                <td><input type="text" name="kategori" required></td>
                            </tr>
                            <tr>
                                <td>cover</td>
                                <td> : </td>
                                <td><input type="text" name="link" required></td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Simpan" name="kirim">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
                
</body>
</html>