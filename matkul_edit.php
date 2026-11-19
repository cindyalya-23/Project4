<?php

$id = $_GET['id'];
$matkul = new App\Matakuliah();

$row = $matkul->edit($id);
?>

<h2>Edit Matakuliah</h2>

<form action="matkul_proses.php" method="post">
    <input type="hidden" name="matkul_id" value="<?php echo $row['matkul_id']; ?>">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="matkul_kode" value="<?php echo htmlspecialchars($row['matkul_kode']); ?>" required></td>
        </tr>
        <tr>
            <td>NAMA MATAKULIAH</td>
            <td><input type="text" name="matkul_nama" value="<?php echo htmlspecialchars($row['matkul_nama']); ?>" required></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td><input type="number" name="matkul_sks" value="<?php echo $row['matkul_sks']; ?>" min="1" max="127" required></td>
        </tr>
        <tr>
            <td>SEMESTER</td>
            <td><input type="number" name="matkul_semester" value="<?php echo $row['matkul_semester']; ?>" min="1" max="14" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
