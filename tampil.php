<?php
include 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $cek = $db->db_num("SELECT * FROM tb_siswa");

    echo "jmldata" . $cek;

    ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($db->tampil_data("SELECT * FROM tb_siswa") as $x) {
            ?>


                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['nama_siswa']; ?></td>
                    <td><?php echo $x['alamat_siswa']; ?></td>
                    <td><?php echo $x['kelas_siswa']; ?></td>
                    <!-- <td>
                <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td> -->
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>