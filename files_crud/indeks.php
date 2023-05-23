<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    
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
                <li>
                    <a href="hapus.php">
                        <span class="title">HAPUS</span>
                    </a>
                </li>
            </ul>
            <?php
                $file1 = "Rincian_buku.txt";
                $tampil = file($file1);
                $jumlah = count($tampil);
            ?>
            <?php echo "Jumlah data = ".$jumlah-2; ?>
            </main>
</body>
</html>