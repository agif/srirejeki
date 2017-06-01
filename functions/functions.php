<?php
	$con = mysqli_connect("localhost", "root","","db_srirezeki");

	if (mysqli_connect_error()){
		echo "Koneksi Tidak Stabil: " . mysqli_connect_error();
	}

	function getNamaKategori(){
		global $con;
		$get_cats  = "select * from kategori";
		$run_cats  = mysqli_query($con, $get_cats);

		while($row_cats    = mysqli_fetch_array($run_cats)){
			$id_kategori   = $row_cats['id_kategori'];
			$nama_kategori = $row_cats['nama_kategori'];
			$gambar_display= $row_cats['gambar_display'];

			// echo $nama_kategori;
			echo "	
					<div class='col-xs-4' style='margin-top:25px;'>
						<div class='top-row-col1 text-center'>
							<h2>$nama_kategori</h2>
							<img class='r-img img-responsive text-center' src='admin_area/product_images/gambar_displays/$gambar_display' title='$nama_kategori' style='width: 350px; height:330px;'/>
							<a href='viewpages.php?id_kategori=$id_kategori '><span><img class='img-responsive' src='admin_area/product_images/gambar_displays/$gambar_display' title='$nama_kategori' style='width: 250px; height:230px;'/></span></a>
							<h4>TOTAL</h4>
							<label>8 PRODUCTS</label>
							<a class='r-list-w' href='viewpages.php?id_kategori=$id_kategori '><img src='images/list-icon.png' /></a>
						</div>
					</div>
				
			";
		}
	}

	function getImgCats(){
		global $con;
		$get_cats = "select * from kategori";
		$run_cats = mysqli_query($con, $get_cats);
		while($row_cats  = mysqli_fetch_array($run_cats)){
			$id_kategori = $row_cats['id_kategori'];
			$img_kategori    = $row_cats['img_kategori'];

			echo "<li><a href='#'>$img_kategori</a></li>";
		}
	}


	function getViewPages(){

	if(isset($_GET['id_kategori'])){
		$cat = $_GET['id_kategori'];
		global $con;
		$get_cat_pro = "select * from produk where id_kategori='$cat' ";
		$run_cat_pro = mysqli_query($con, $get_cat_pro);
		$count_cats  = mysqli_num_rows($run_cat_pro);

		if($count_cats==0){
		echo "<h2>Maaf produk pada kategori ini kosong</h2>";
		
		exit();
		}else{
		
		while ($row_pro=mysqli_fetch_array($run_cat_pro)) {
			$pro_id       = $row_pro['idbarang'];
			$pro_title    = $row_pro['namabarang'];
			$id_kategori      = $row_pro['id_kategori'];
			$pro_stock    = $row_pro['stok'];
			$pro_price    = $row_pro['harga'];
			$money        = number_format($pro_price,0, ',','.');
			$pro_brg      = $row_pro['gambarbrg'];
			$pro_detail   = $row_pro['detail'];

			echo "		
					<div class='col-lg-3 special-products-grid text-center'>
						<h5></h5>

						<a style='text-decoration:none;'><h3 class='h3-responsive'>$pro_title</h3></a>
						<a class='product-here' href='single-page.php'><img src='admin_area/product_images/gambarbrgs/$pro_brg' title='product-name' class='img-responsive' style='padding-left:10%; padding-right:10%; margin-top: 5%; width: 200px; height: 200px;'/></a>
						<a href='details.php?pro_id=$pro_id '>Details</a>
						<a class='product-btn' href='viewpages.php?add_cart=$pro_id' ><h4><span><small>Rp. $money</small></span><small>Ambil</small></h4></a>
					</div>
				";
			}
		}
	}
}



	function getPro(){

		if(!isset($_GET['kategori'])){
			if(!isset($_GET['brand'])){
		global $con;
		$get_pro = "select * from produk order by RAND() LIMIT 0,6";
		$run_pro = mysqli_query($con, $get_pro);

		while ($row_pro=mysqli_fetch_array($run_pro)) {
			$pro_id       = $row_pro['idbarang'];
			$pro_title    = $row_pro['namabarang'];
			$pro_cat      = $row_pro['id_kategori'];
			// $pro_name_cat = $row_pro['nama_kategori'];
			// $pro_id_brand = $row_pro['id_brand'];
			$pro_stock    = $row_pro['stok'];
			$pro_price    = $row_pro['harga'];
			$money        = number_format($pro_price,0, ',','.');
			// $pro_size     = $row_pro['size'];
			// $pro_warna    = $row_pro['warna'];
			$pro_brg      = $row_pro['gambarbrg'];
			// $pro_gb_brand = $row_pro['gambarbrand'];
			$pro_detail   = $row_pro['detail'];

			echo "		
					<div class='col-lg-3 special-products-grid text-center'>
						<a class='product-here' href='single-page.php'><img src='admin_area/product_images/gambarbrgs/$pro_brg' title='product-name' class='img-responsive' style='padding-left:10%; padding-right:10%; margin-top: 5%; width: 200px; height: 100px;'/></a>
						<a style='text-decoration:none;'><h4 class='h4-responsive'>$pro_title</h4></a>
						<a href='details.php?pro_id=$pro_id '>Details</a>
						<a class='product-btn' href='viewpages.php?pro_id=$pro_id '><h4><span><small>Rp. $money</small></span><small>GET NOW</small></h4></a>
					</div>
			";
				}
			}
		}
	}

	function getNameCat(){
		if(isset($_GET['id_kategori'])){
		$cat = $_GET['id_kategori'];
		global $con;
        $get_cat_pro = "select * from kategori where id_kategori='$cat' ";
		$run_cat_pro = mysqli_query($con, $get_cat_pro);
		$count_cats  = mysqli_num_rows($run_cat_pro);
		
		while ($row_pro=mysqli_fetch_array($run_cat_pro)){
        $id_kategori = $row_pro['id_kategori'];
        $nama_kategori = $row_pro['nama_kategori'];

        echo "$nama_kategori";
        }
	}
	}

	function getDetails(){
		if(isset($_GET['pro_id'])){
        $idbarang = $_GET['pro_id'];
		global $con; 
        $get_pro  = "select * from produk where idbarang='$idbarang' ";
		$run_pro  = mysqli_query($con, $get_pro);

		while ($row_pro=mysqli_fetch_array($run_pro)) {
			$idbarang       = $row_pro['idbarang'];
			$namabarang    = $row_pro['namabarang'];
			$id_kategori      = $row_pro['id_kategori'];
			$stock    = $row_pro['stok'];
			$harga    = $row_pro['harga'];
			$money        = number_format($harga,0, ',','.');
			$gambarbrg      = $row_pro['gambarbrg'];
			$detail   = $row_pro['detail'];

			echo "	
					<div class='container'>
            <div class='row'>
                <div class='col-lg-6 col-md-6'>
                    <div class=''>
                        <img src='admin_area/product_images/gambarbrgs/$gambarbrg' title='product-name' class='img-responsive' style='width: 100%; height:100%;'/>
                    </div>
                </div>
                
                <div class='col-lg-6 col-md-6'>
                    <div class=''>
                        <h2 class='h2-responsive'><big>$namabarang</big></h2></br>
                        <h4>Harga  : Rp. $money</h4> </br>
						<p>Deskripsi : $detail</p></br>
						<a class='' href='cart.php' style='color:red;'><h4>Lihat keranjang belanja anda</h4></a>
                        <a href='viewpages.php?id_kategori=$id_kategori '>Kembali</a>
                    </div>
                </div>
            </div>
        </div>
			";
		}}
	}

	function getIp(){
		$ip = $_SERVER['REMOTE_ADDR'];

		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		return $ip;
	}

	function cart(){
		if(isset($_GET['add_cart'])){
			
			global $con;

			$ip        = getIp();
			
			$pro_id    = $_GET['add_cart'];

			$check_cart = "SELECT * FROM cart WHERE p_id='$pro_id' AND ip_add='$ip' ";

			$run_check = mysqli_query($con, $check_cart);

			if(mysqli_num_rows($run_check)>0){
				echo "";
			}else{
				$insert_cart = "INSERT INTO cart (p_id,ip_add) VALUES ('$pro_id','$ip') ";

				$run_cart    = mysqli_query($con, $insert_cart); 

				echo "<script>alert('Produk berhasil ditambahkan ke dalam keranjang belanja!')</script>";
				// echo "<script>window.location.reload()</script>";
				// echo "<script>window.open=history.go(-1);</script>";
				// echo "<meta http-equiv='refresh' content='0.3'>";

				// echo "<a href onClick="window.open('windows.html', 'newWnd', 'width=500,height=400'); return false;">Coba ini</a>";
				echo "<script>window.open('index.php','_self')</script>";
			}
		}
	}

	function total_items(){
		if(isset($_GET['add_cart'])){
			global $con;

			$ip = getIp();

			$get_items   = "SELECT * FROM cart WHERE ip_add='$ip' ";

			$run_items   = mysqli_query($con, $get_items);

			$count_items = mysqli_num_rows($run_items);
		}else{

			global $con;
			
			$ip = getIp();

			$get_items   = "SELECT * FROM cart WHERE ip_add='$ip' ";

			$run_items   = mysqli_query($con, $get_items);

			$count_items = mysqli_num_rows($run_items);
		}

		echo $count_items;
	}

	function total_price(){

		$total = 0;
		
		global $con;

		$ip        = getIp();

		$sel_price = "SELECT * FROM cart WHERE ip_add='$ip' ";

		$run_price = mysqli_query($con, $sel_price);

		while($p_price=mysqli_fetch_array($run_price)){

			$pro_id    = $p_price['p_id'];

			$pro_price = "SELECT * FROM produk WHERE idbarang='$pro_id' ";

			$run_pro_price = mysqli_query($con, $pro_price);

			while($pp_price = mysqli_fetch_array($run_pro_price)){
				$harga = array($pp_price['harga']);

				$values = array_sum($harga);

				$total +=$values;
			}
		}

		echo "Rp. " . number_format($total,0, ',','.');
		
	}
?>