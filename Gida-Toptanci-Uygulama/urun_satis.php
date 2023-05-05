<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <link rel="stylesheet" href="css/ürün_satis.css">
     <title>Ürün Satış</title>
</head>

<body>
     <section id="sidebar">
          <a href="#" class="brand">
               <i class='bx bxs-dashboard'></i>
               <span class="text">Dashboard</span>
          </a>
          <ul class="side-menu top">
               <li>
                    <a href="dashboard.php">
                         <i class='bx bxs-dashboard'></i>
                         <span class="text">Dashboard</span>
                    </a>
               </li>
               <li>
                    <a href="stok_kontrol.php">
                         <i class='bx bxs-doughnut-chart'></i>
                         <span class="text">Stok Kontrol</span>
                    </a>
               </li>
               <li>
                    <a href="urun_kontrol.html">
                         <i class='bx bxs-shopping-bag-alt'></i>
                         <span class="text">Ürün Kontrol</span>
                    </a>
               </li>
               <li class="active">
                    <a href="urun_satis.php">
                         <i class='bx bxs-cart'></i>
                         <span class="text">Ürün Satış</span>
                    </a>
               </li>
          </ul>
          <ul class="side-menu">
               <li>
                    <a href="index.html" class="logout">
                         <i class='bx bxs-log-out-circle'></i>
                         <span class="text">Logout</span>
                    </a>
               </li>
          </ul>
     </section>
     <section id="content">
          <nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				<div class="form-input">
					<!-- <input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
				</div>
			</form>
               <!-- <i class='bx bxs-moon'></i>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
		</nav>
          <main>
               <div class="head-title">
                    <div class="left">
                         <h1>Ürün Satış</h1>
                         <ul class="breadcrumb">
                              <li>
                                   <a href="#">Dashboard</a>
                              </li>
                              <li><i class='bx bx-chevron-right'></i></li>
                              <li>
                                   <a class="active" href="#">Ürün Satış</a>
                              </li>
                         </ul>
                    </div>
               </div>
               <div class="table-data">
				<div class="order">
                         <div class="container">
                              <h1>Ürün Satış Sayfası</h1>
                              <form action="./php/satiscrud.php" method="POST">

                              <div class="form-group">
                                  <label for="urunAdi">Ürün Adı</label>
                                  <select id="select_urunadi" name="selectAdi">
                                  <?php 
                                   
                                   $servername = "localhost";
                                   $username = "root";
                                   $passwordserver = "";
                                   $dbname = "gida_toptanci";

                                   $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);

                                   $stoklistsql = "SELECT * FROM urunler";
                                   $result = mysqli_query($conn,$stoklistsql);

                                   if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                             echo "<option value='".$row["urun_adi"]."'>".$row["urun_adi"]."</option>";
                                        }
                                   }
                                   ?>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <label for="urunFiyati">Kategori</label>
                                   <style>
                                        select{
                                             padding: 10px;
                                             border: none;
                                             border-radius: 5px;
                                             width: 100%;
                                             box-sizing: border-box;
                                        }
                                   </style>
                                   <select name="selectKategori" id="select_kategori">
                                   <?php 
                                   
                                   $servername = "localhost";
                                   $username = "root";
                                   $passwordserver = "";
                                   $dbname = "gida_toptanci";

                                   $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);

                                   $stoklistsql = "SELECT DISTINCT kategori FROM urunler";
                                   $result = mysqli_query($conn,$stoklistsql);

                                   if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                             echo "<option value='".$row["kategori"]."'>".$row["kategori"]."</option>";
                                        }
                                   }
                                   ?>
                                   </select>
                                 </div>
                                <div class="form-group">
                                  <label for="urunAdeti">Ürün Adeti</label>
                                  <input type="text" id="urunAdeti" name="urunAdet" required>
                                </div>
                                <div class="form-group">
                                  <label for="urunFiyati">Ürün Fiyatı</label>
                                  <input type="text" id="urunFiyati" name="urunFiyat" required>
                                </div>
                                <button type="submit" id="satisYapButton" name="satisYapButton">Satış Yap</button>
                              </form>
                            </div>
				<!-- </div>
               </div> -->
          </main>
     </section>
     <script src="js/urun_satis.js">     </script>
</body>
</html>