<?php 

$servername = "localhost";
$username = "root";
$passwordserver = "";
$dbname = "gida_toptanci";

$conn = mysqli_connect($servername,$username,$passwordserver,$dbname);


$urunAdi = $_POST["selectAdi"];
$kategori = $_POST["selectKategori"];
$urunAdet = $_POST["urunAdet"];
$urunFiyat = $_POST["urunFiyat"];
$toplamFiyat = $urunAdet * $urunFiyat;


// --------- Urun satis ----------

$insertSqlSorgu = "INSERT INTO satislar (urun_adi, kategori, urun_adet, urun_fiyat, toplam_fiyat) VALUES ('$urunAdi','$kategori','$urunAdet','$urunFiyat','$toplamFiyat')";
$satissql = "UPDATE urunler SET stok_miktari = stok_miktari - '$urunAdet' WHERE urun_adi = '$urunAdi'";

if(isset($_POST["satisYapButton"])){
    mysqli_query($conn,$insertSqlSorgu);
    mysqli_query($conn,$satissql);
    header("Location: http://localhost/Gida-Toptanci-Uygulama/urun_satis.php");
}else{
    echo "urun satis basariz.";
}




?>