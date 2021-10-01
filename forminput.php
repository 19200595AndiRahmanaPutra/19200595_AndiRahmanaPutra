<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('mahasiswa/proses');?>" method="post">
            <table>
                <tr>
                    <th colspan="3"> Form Input Mahasiswa</th>
                </tr>
                <tr>
                    <td colspan="3"> 
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nim" id="nim" placeholder="Input Nim Mahasiswa">
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Input Nama Mahasiswa">
                    </td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <th>:</th>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="">Pilih Program Studi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Sistem Informasi Akutansi">Sistem Informasi Akutansi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" name="Submit">
                        <input type="reset" name="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>