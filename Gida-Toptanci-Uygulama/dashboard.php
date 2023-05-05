<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <link rel="stylesheet" href="css/dashboard.css">
     <title>Dashboard</title>
</head>

<body>
     <section id="sidebar">
          <a href="#" class="brand">
               <i class='bx bxs-dashboard'></i>
               <span class="text">Dashboard</span>
          </a>
          <ul class="side-menu top">
               <li class="active">
                    <a href="dashboard.php">
                         <i class='bx bxs-dashboard'></i>
                         <span class="text">Dashboard</span>
                    </a>
               </li>
               <li>
                    <a href="ürün_kontrol.html">
                         <i class='bx bxs-shopping-bag-alt'></i>
                         <span class="text">Ürün Kontrol</span>
                    </a>
               </li>
               <li>
                    <a href="stok_kontrol.php">
                         <i class='bx bxs-doughnut-chart'></i>
                         <span class="text">Stok Kontrol</span>
                    </a>
               </li>
               <li>
                    <a href="ürün_satis.html">
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
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
               <i class='bx bxs-moon'></i>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
          <main>
               <div class="head-title">
                    <div class="left">
                         <h1>Dashboard</h1>
                         <ul class="breadcrumb">
                              <li>
                                   <a href="#">Dashboard</a>
                              </li>
                              <li><i class='bx bx-chevron-right'></i></li>
                              <li>
                                   <a class="active" href="#">Home</a>
                              </li>
                         </ul>
                    </div>
               </div>

               <ul class="box-info">
                    <li>
                         <i class='bx bxs-package' ></i>
                         <span class="text">
                              <?php 
                                        $servername = "localhost";
                                        $username = "root";
                                        $passwordserver = "";
                                        $dbname = "gida_toptanci";
                                   
                                        $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);
                                   
                                        $toplamurunsql = "SELECT COUNT(*) as total FROM urunler";
                                        $result = mysqli_query($conn,$toplamurunsql);

                                        if($result->num_rows > 0 ){
                                             while($row = $result->fetch_assoc()){
                                                  $toplamurun = $row["total"];
                                                  echo "<h3>".$toplamurun."</h3>";
                                             }
                                        }       
                              ?>
                              <p>Toplam Ürün</p>
                         </span>
                    </li>
                    <li>
                         <i class='bx bxs-cart'></i>
                         <span class="text">
                               <?php 
                                        $servername = "localhost";
                                        $username = "root";
                                        $passwordserver = "";
                                        $dbname = "gida_toptanci";
                                   
                                        $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);
                                   
                                        $toplamurunsql = "SELECT COUNT(*) as total FROM satislar";
                                        $result = mysqli_query($conn,$toplamurunsql);

                                        if($result->num_rows > 0 ){
                                             while($row = $result->fetch_assoc()){
                                                  $toplamurun = $row["total"];
                                                  echo "<h3>".$toplamurun."</h3>";
                                             }
                                        }       
                                   ?>
                              <p>Satılan Ürün</p>
                         </span>
                    </li>
                    <li>
                         <i class='bx bxs-group'></i>
                         <span class="text">
                                   <?php 
                                        $servername = "localhost";
                                        $username = "root";
                                        $passwordserver = "";
                                        $dbname = "gida_toptanci";
                                   
                                        $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);
                                   
                                        $toplamurunsql = "SELECT COUNT(*) as total FROM kullanicilar";
                                        $result = mysqli_query($conn,$toplamurunsql);

                                        if($result->num_rows > 0 ){
                                             while($row = $result->fetch_assoc()){
                                                  $toplamurun = $row["total"];
                                                  echo "<h3>".$toplamurun."</h3>";
                                             }
                                        }       
                                   ?>
                              <p>Kullanıcılar</p>
                         </span>
                    </li>
                    <li>
                         <i class='bx bxs-badge-dollar' ></i>
                         <span class="text">
                              <?php 
                                        $servername = "localhost";
                                        $username = "root";
                                        $passwordserver = "";
                                        $dbname = "gida_toptanci";
                                   
                                        $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);
                                   
                                        $toplamurunsql = "SELECT SUM(toplam_fiyat) as sumtotal FROM satislar";
                                        $result = mysqli_query($conn,$toplamurunsql);

                                        if($result->num_rows > 0 ){
                                             while($row = $result->fetch_assoc()){
                                                  $toplamurun = $row["sumtotal"];
                                                  echo "<h3>".$toplamurun.",0 $</h3>";
                                             }
                                        }       
                                   ?>
                              <p>Toplam Bakiye</p>
                         </span>
                    </li>
               </ul>
               <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Son Satışlar</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Urun Adi</th>
								<th>Kategori</th>
								<th>Adet</th>
                                        <th>Satis Fiyati</th>
                                        <th>Satis Toplam Tutari</th>
							</tr>
						</thead>
						<tbody>
                                   <?php 
                                   
                                        $servername = "localhost";
                                        $username = "root";
                                        $passwordserver = "";
                                        $dbname = "gida_toptanci";

                                        $conn = mysqli_connect($servername,$username,$passwordserver,$dbname);

                                        $stoklistsql = "SELECT * FROM satislar";
                                        $result = mysqli_query($conn,$stoklistsql);

                                        if(mysqli_num_rows($result) > 0){
                                             while($row = mysqli_fetch_assoc($result)){
                                                  echo "<tr>";
                                                  echo "<td>".$row["urun_adi"]."</td>";
                                                  echo "<td>".$row["kategori"]."</td>";
                                                  echo "<td>".$row["urun_adet"]."</td>";
                                                  echo "<td>".$row["urun_fiyat"]." $</td>";
                                                  echo "<td>".$row["toplam_fiyat"]." $</td>";
                                                  echo "</tr>";
                                              }
                                        }
                                   ?>
							<!--<tr>
								<td>Çikolata</td>
								<td><span class="status completed">Atıştırmalık</span></td>
                                        <td>120</td>
                                        <td>1,25$</td>
                                        <td>150,0$</td>
							</tr> -->
						</tbody>
					</table>
				</div>
                    <!-- kaldirilsin -->
              <div class="to-do">
                    <canvas id="myChart"></canvas>
                    </div>

               </div>
          </main>
     </section>

     <script src="js/dashboard.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>