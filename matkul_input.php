<h2>Input Matakuliah</h2>

<form action="matkul_proses.php" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="matkul_kode" required></td>
        </tr>
        <tr>
            <td>NAMA MATAKULIAH</td>
            <td><input type="text" name="matkul_nama" required></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td><input type="number" name="matkul_sks" min="1" max="127" required></td>
        </tr>
        <tr>
            <td>SEMESTER</td>
            <td><input type="number" name="matkul_semester" min="1" max="14" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
