<html>
<head>
     <title>Form Input Matakuliah</title>
</head>
<body bgcolor="yellow">

    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>"
method="post">
     <table>
         <tr>
        <th colspan="3">
         <h1> Form Input Data Mata Kuliah </h1>
        </th>
        </tr>
        <tr>
        <td colspan="3"
         <hr>
     </td>
     </tr>
    <tr>
        <th>Kode MTK</th>
        <th>:</th>
        <td>
    <input type="text" name="kode" id="kode" placeholder="Masukkan Kode MTK">
     </td>
</tr>
     <tr>
         <th>Nama MTK</th>
        <td>:</td>
         <td>
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama MTK">
     </td>
     </tr>
     <tr>
         <th>SKS</th>
        <td>:</td>
        <td>
            <select name="sks" id="sks">
            <option value="">Pilih SKS</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
         </select>
         </td>
         </tr>
     <tr>
         <td colspan="3" align="center">
         <input type="submit" value="Submit">
    </td>
     </tr>
 </table>
 </form>
 </center>
</body>
</html>
