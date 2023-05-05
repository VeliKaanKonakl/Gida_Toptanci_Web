<?php 

$servername = "localhost";
$username = "root";
$passwordserver = "";
$dbname = "gida_toptanci";

$conn = mysqli_connect($servername,$username,$passwordserver,$dbname);


$urunAdi = $_POST["urunAdi"];
$kategori = $_POST["kategori"];
$stokAdet = $_POST["stokAdet"];
$urunFiyat = $_POST["urunFiyat"];

// --------- Urun Ekleme ----------
$insertSqlSorgu = "INSERT INTO urunler (urun_adi, kategori, stok_miktari, satis_fiyati) VALUES ('$urunAdi','$kategori','$stokAdet','$urunFiyat')";
// --------- Urun Guncelleme ----------
$updateSqlSorgu = "UPDATE urunler SET  urun_adi = '$urunAdi', kategori = '$kategori', stok_miktari = '$stokAdet', satis_fiyati = '$urunFiyat' WHERE urun_adi = '$urunAdi'";
// --------- Silme Ekleme ----------
$deleteSqlSorgu = "DELETE FROM urunler WHERE urun_adi = '$urunAdi' AND kategori = '$kategori'";

if(isset($_POST["urunEkleButton"])){
    mysqli_query($conn,$insertSqlSorgu);
    echo "urun basariyla eklendi";
}else if(isset($_POST["urunGuncelleButton"])){
    mysqli_query($conn,$updateSqlSorgu);
    echo "urun guncelleme basarili";
}else if(isset($_POST["urunSilButton"])){
    mysqli_query($conn,$deleteSqlSorgu);
    echo "urun silme basarili";
}else{
    echo "islem basariz.";
}

?>