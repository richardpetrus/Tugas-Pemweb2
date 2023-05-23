<?php 
require('fungsi.php');
if(isset($_POST['kirim'])){
	define('DB','Rincian_buku.txt');

	if(!file_exists(DB)){
		saveTxt(DB,"kode buku|judul buku|pengarang|tahun terbit|jumlah halaman|penerbit|kategori|cover|".PHP_EOL,'a');
	}

	$Kode = $_GET['id'];
	$Kode = $_POST['Kode'];
	$Judul = $_POST['Judul'];
	$pengarang = $_POST['Pengarang'];
	$thn_terbit = $_POST['Tahun_terbit'];
	$jml_halaman = $_POST['jmlh_halaman'];
	$penerbit = $_POST['penerbit'];
	$kategori = $_POST['kategori'];
	$cover = $_POST['link'];
	$dataLast = edit($_GET['id']);
	$content = str_replace($dataLast,"$Kode|$Judul|$pengarang|$thn_terbit|$jml_halaman|$penerbit|$kategori|$cover|",file_get_contents(DB));
	saveTxt(DB,$content,'w');
	
    header('location:ubah.php' );
}

if(!empty($_GET['id'])){
	$rincian = edit($_GET['id']);
	$rincian_buku = explode('|',$rincian);
                                       
                                            $Kode = $rincian_buku[0];
                                            $Judul = $rincian_buku[1];
                                            $pengarang = $rincian_buku[2];
                                            $thn_terbit = $rincian_buku[3];
                                            $jml_halaman = $rincian_buku[4];
                                            $penerbit = $rincian_buku[5];
                                            $kategori = $rincian_buku[6];
                                            $cover = $rincian_buku[7];
	
}

function edit($id){
	$db = 'Rincian_buku.txt';
	$proses = @file($db, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	foreach ($proses as $rincian){
		$rincian_buku = explode('|',$rincian);
		$kode = $rincian_buku[0];
		if($kode==$id){
			$keluar = $rincian;
			break;
		}else{
			$keluar = null;
		}
		
	}
	
return $keluar;
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
                        <span class="title">Tampil Data</span>
                    </a>
                </li>
                <li>
                    <a href="tambah.php">
                        <span class="title">Tambah Data</span>
                    </a>
                </li>
                <li>
                    <a href="ubah.php">
                        <span class="title">Ubah Data</span>
                    </a>
                </li>
                <li>
                    <a href="hapus.php">
                        <span class="title">Hapus Data</span>
                    </a>
                </li>
            </ul>
                <h3>Tambah Data</h3>
                <form action="" method="POST">
                    <fieldset>
                        <legend>Form Data Buku</legend>
                        <table>
                            <tr>
                                <td>Kode Buku</td>
                                <td> : </td>
                                <td><input type="text" name="Kode" value="<?=$Kode;?>" required></td>
                            </tr>
                            <tr>
                                <td>Judul Buku</td>
                                <td> : </td>
                                <td><input type="text" name="Judul" value="<?=$Judul;?>" required></td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td> : </td>
                                <td><input type="text" name="Pengarang" value="<?=$pengarang;?>" required></td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td> : </td>
                                <td><input type="text" name="Tahun_terbit" value="<?=$thn_terbit;?>" required></td>
                            </tr>
                            <tr>
                                <td>Jumlah Halaman</td>
                                <td> : </td>
                                <td><input type="text" name="jmlh_halaman" value="<?=$jml_halaman;?>" required></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td> : </td>
                                <td><input type="text" name="penerbit" value="<?=$penerbit;?>" required></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td> : </td>
                                <td><input type="text" name="kategori" value="<?=$kategori;?>" required></td>
                            </tr>
                            <tr>
                                <td>Cover</td>
                                <td> : </td>
                                <td><input type="text" name="link" value="<?=$cover;?>" required></td>
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