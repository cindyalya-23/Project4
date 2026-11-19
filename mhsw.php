<?php

$mhsw = new App\Mahasiswa;
$rows = $mhsw->tampil();

?>

<h2>Mahasiswa</h2>

<a href="index.php?hal=mhsw_input" class="btn">Input Mahasiswa</a>

<table>
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['mhsw_id']; ?></td>
        <td><?php echo $row['mhsw_nim']; ?></td>
        <td><?php echo $row['mhsw_nama']; ?></td>
        <td><?php echo $row['mhsw_alamat']; ?></td>
        <td>
            <div class="d-flex gap-2">
                <a href="index.php?hal=mhsw_edit&id=<?php echo $row['mhsw_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="mhsw_proses.php?action=delete&id=<?php echo $row['mhsw_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>
