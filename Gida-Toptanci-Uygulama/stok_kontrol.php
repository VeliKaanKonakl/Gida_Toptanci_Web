<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <link rel="stylesheet" href="css/stok_kontrol.css">
     <title>Stok Kontrol</title>
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
                    <a href="ürün_kontrol.html">
                         <i class='bx bxs-shopping-bag-alt'></i>
                         <span class="text">Ürün Kontrol</span>
                    </a>
               </li>
               <li class="active">
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
			<a href="#" class="nav-link">Categories</a>
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
                         <h1>Stok Kontrol</h1>
                         <ul class="breadcrumb">
                              <li>
                                   <a href="#">Dashboard</a>
                              </li>
                              <li><i class='bx bx-chevron-right'></i></li>
                              <li>
                                   <a class="active" href="#">Stok Kontrol</a>
                              </li>
                         </ul>
                    </div>
               </div>
               <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Stok Kontrol</h3>
					</div>
                         <table>
						<thead>
							<tr>
                                        <th>Urun ID</th>
								<th>Urun Adi</th>
								<th>Kategori</th>
								<th>Stok</th>
                                        <th>Satis Fiyati</th>
							</tr>
						</thead>
						<tbody>
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
                                                  echo "<tr>";
                                                  echo "<td>".$row["urun_id"]."</td>";
                                                  echo "<td>".$row["urun_adi"]."</td>";
                                                  echo "<td>".$row["kategori"]."</td>";
                                                  echo "<td>".$row["stok_miktari"]."</td>";
                                                  echo "<td>".$row["satis_fiyati"]." $</td>";
                                                  echo "</tr>";
                                             }
                                        }
                                   ?>
							<!-- <tr>
                                        <td>1</td>
								<td>Çikolata</td>
								<td><span class="status completed">Atıştırmalık</span></td>
                                        <td>1.450</td>
                                        <td>1,25$</td>

							</tr> -->
						</tbody>
					</table>
				</div>
               </div>
          </main>
     </section>

     <script src="js/stok_kontrol.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>