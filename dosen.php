<?php

$dosen = new App\Dosen;
$rows = $dosen->tampil();

?>

<h2>Dosen</h2>

<a href="index.php?hal=dosen_input" class="btn">Input Dosen</a>

<table>
    <tr>
        <th>NO</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>GOLONGAN</th>
        <th>AKSI</th>
    </tr>
    <?php $no = 1; foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($row['dosen_nip']); ?></td>
        <td><?php echo htmlspecialchars($row['dosen_nama']); ?></td>
        <td><?php echo htmlspecialchars($row['dosen_golongan'] ?? ''); ?></td>
        <td>
            <div class="d-flex gap-2">
                <a href="index.php?hal=dosen_edit&id=<?php echo $row['dosen_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="dosen_proses.php?action=delete&id=<?php echo $row['dosen_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>
