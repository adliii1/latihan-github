<?php
include "./lib/koneksi.php";

$id = $_GET["id"];

$query = mysqli_query($connectDatabase, "SELECT * FROM makanan WHERE id = '$id'");

$data = mysqli_fetch_assoc($query);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $query_update = mysqli_query($connectDatabase, "UPDATE `makanan` SET `nama`='$nama',`harga`='$harga' WHERE id = '$id'");

    if ($query_update) {
        echo
            "<script>
            alert('data berhasil diupdate');
            window.location.href = 'view.php';
        </script>";
    } else {
        echo "Data gagal disimpan";
    }
}
?>

<form action="" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" value="<?= $data["nama"] ?>">
    <label for="harga">Harga :</label>
    <input type="number" id="harga" name="harga" value="<?= $data["harga"] ?>">

    <button type="submit">Simpan</button>
</form>