<?php

$matkul = new App\Matakuliah;
$rows = $matkul->tampil();

?>

<h2>Matakuliah</h2>

<a href="index.php?hal=matkul_input" class="btn">Input Matakuliah</a>

<table>
    <tr>
        <th>NO</th>
        <th>KODE</th>
        <th>NAMA MATAKULIAH</th>
        <th>SKS</th>
        <th>SEMESTER</th>
        <th>AKSI</th>
    </tr>
    <?php $no = 1; foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($row['matkul_kode']); ?></td>
        <td><?php echo htmlspecialchars($row['matkul_nama']); ?></td>
        <td><?php echo $row['matkul_sks']; ?></td>
        <td><?php echo $row['matkul_semester']; ?></td>
        <td>
            <div class="d-flex gap-2">
                <a href="index.php?hal=matkul_edit&id=<?php echo $row['matkul_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="matkul_proses.php?action=delete&id=<?php echo $row['matkul_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>
