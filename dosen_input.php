<h2>Input Dosen</h2>

<form action="dosen_proses.php" method="post">
    <table>
        <tr>
            <td>NIP</td>
            <td><input type="text" name="dosen_nip" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="dosen_nama" required></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td><input type="text" name="dosen_golongan" placeholder="contoh: III/a"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
