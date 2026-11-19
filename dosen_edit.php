<?php

$id = $_GET['id'];
$dosen = new App\Dosen();

$row = $dosen->edit($id);
?>

<h2>Edit Dosen</h2>

<form action="dosen_proses.php" method="post">
    <input type="hidden" name="dosen_id" value="<?php echo $row['dosen_id']; ?>">
    <table>
        <tr>
            <td>NIP</td>
            <td><input type="text" name="dosen_nip" value="<?php echo htmlspecialchars($row['dosen_nip']); ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="dosen_nama" value="<?php echo htmlspecialchars($row['dosen_nama']); ?>" required></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td><input type="text" name="dosen_golongan" value="<?php echo htmlspecialchars($row['dosen_golongan'] ?? ''); ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
