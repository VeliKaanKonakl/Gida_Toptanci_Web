<?php 

$servername = "localhost";
$username = "root";
$passwordserver = "";
$dbname = "gida_toptanci";

$conn = mysqli_connect($servername,$username,$passwordserver,$dbname);


$urunAdi = $_POST["urunAdi"];
$kategori = $_POST["urunKategori"];
$urunAdet = $_POST["urunAdet"];
$urunFiyat = $_POST["urunFiyat"];
$toplamFiyat = $_POST["toplamFiyat"];


// --------- Urun Ekleme ----------

$insertSqlSorgu = "INSERT INTO satislar (urun_adi, kategori, urun_adet, urun_fiyat, toplam_fiyat) VALUES ('$urunAdi','$kategori','$urunAdet','$urunFiyat','$toplamFiyat')";

if(isset($_POST["satisYapButton"])){
    mysqli_query($conn,$insertSqlSorgu);
    echo "urun basariyla satildi";
}else{
    echo "urun ekleme basariz.";
}

$satissql = "UPDATE urunler SET stok_miktari = stok_miktari - '$urunAdet' WHERE urun_adi = '$urunAdi'";
mysqli_query($conn,$satissql);

?>