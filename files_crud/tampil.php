<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    
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
                <li>
                    <a href="hapus.php">
                        <span class="title">HAPUS</span>
                    </a>
                </li>
            </ul>
                <h3>TAMPILKAN DATA</h3>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Tahun terbit</th>
                                <th>Jumlah Halaman</th>
                                <th>Penerbit</th>
                                <th>Jenis</th>
                                <th>Cover</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- tampil -->
                            <?php
                                require('fungsi.php');
                                define('DB','Rincian_buku.txt');
                                if(!file_exists(DB)){
                                    saveTxt(DB, "kode buku|judul buku|pengarang|tahun terbit|jumlah halaman|penerbit|kategori|cover|".PHP_EOL, 'a');
                                }
                                $proses = @file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                $no = 1;
                                $a = 0;
                                foreach($proses as $rincian){
                                    if($a == 0){} else {
                                        $rincian_buku = explode('|',$rincian);
                                        $Kode = $rincian_buku[0];
                                        $Judul = $rincian_buku[1];
                                        $pengarang = $rincian_buku[2];
                                        $thn_terbit = $rincian_buku[3];
                                        $jml_halaman = $rincian_buku[4];
                                        $penerbit = $rincian_buku[5];
                                        $kategori = $rincian_buku[6];
                                        $cover = $rincian_buku[7];
                            ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$Kode;?></td>
                                <td><?=$Judul;?></td>
                                <td><?=$pengarang;?></td>
                                <td><?=$thn_terbit;?></td>
                                <td><?=$jml_halaman;?></td>
                                <td><?=$penerbit;?></td>
                                <td><?=$kategori;?></td>
                                <td>
                                    <a href="<?=$cover; ?>" target="_blank"><?=$cover;?></a>
                                </td>
                            </tr>
                            <?php 
                                $no++;
                                }
                                $a++;
                                } 
                            ?>
                        </tbody>
                    </table>
</body>
</html>
