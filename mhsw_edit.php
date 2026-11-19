<?php

$id = $_GET['id'];
$mhsw = new App\Mahasiswa();

$row = $mhsw->edit($id);
?>

<h2>Edit Mahasiswa</h2>

<form action="mhsw_proses.php" method="post">
    <input type="hidden" name="mhsw_id" value="<?php echo $row['mhsw_id']; ?>">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="mhsw_nim" value="<?php echo $row['mhsw_nim']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="mhsw_nama" value="<?php echo $row['mhsw_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="mhsw_alamat" id="" cols="30" rows="10"><?php echo $row['mhsw_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
