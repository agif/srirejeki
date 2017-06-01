<?php
  include ("includes/db.php");
?>

<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--Detail Admin -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<!--pie-chart-->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">

</head> 
<body><br>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="navbar navbar-default">
        		<div class="container-fluid">
            		<div class="navbar-header">
                		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                    		<span  class="icon-bar"></span>
                    		<span  class="icon-bar"></span>
                    		<span  class="icon-bar"></span>
                		</button>
            		</div>
            		<div class="collapse navbar-collapse" id="mynavbar-content">
                		<ul class="nav navbar-nav">
                      <li><a href="index.php">Dashboard</a></li>
                    	<li><a href="all_product.php">View Product</a></li>
							        <li class="active"><a href="insert_product.php">Add Product</a></li>
                      <li><a href="insert_category.php">Add Category</a></li>
                		</ul>
            		</div>
        		</div>
    		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                         <!-- block -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">Tambah Barang</div>
        </div>
        <div class="block-content collapse in">
          <div class="span12">
            <form action="insert_product.php" method="post" enctype="multipart/form-data"> 
              <fieldset>
                <div class="control-group">
                  <label class="control-label">Nama </label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="namabarang" type="text" placeholder="Nama Barang" style="height:30px;" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Kategori</label>
                  <div class="controls">
                    <select name="id_kategori" style="width: 200px;">
                                            
                      <?php
                        $get_cats = "select * from kategori";
                        $run_cats = mysqli_query($con, $get_cats);
                        while($row_cats = mysqli_fetch_array($run_cats)){
                        $id_kategori = $row_cats['id_kategori'];
                        $nama_kategori = $row_cats['nama_kategori'];

                        echo "<option value='$id_kategori'>$nama_kategori</option>";
                        }
                      ?>                        
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Stok </label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="stok" type="text" placeholder="ex: 4" style="height:30px; width: 70px;" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Harga </label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="harga" type="text" placeholder="ex: 125000" style="height:30px; width: 200px;" required>
                  </div>
                </div>

                <!--<div class="control-group">
                  <label class="control-label">Ukuran </label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="size" type="text" placeholder="ex: S/M/L atau 39/40" style="height:30px; width: 200px;" required>
                  </div>
                </div>-->

                <!--<div class="control-group">
                  <label class="control-label">Warna </label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="warna" type="text" placeholder="ex: Merah" style="height:30px; width: 200px;" required>
                  </div>
                </div>-->

                <div class="control-group">
                  <label class="control-label">Gambar Barang </label>
                  <div class="controls">
                    <input type="file" name="gambarbrg" />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Detail </label>
                  <div class="controls">
                    <textarea class="input-xlarge textarea" name="detail" style="width: 70%; height: 300px;"></textarea>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" name="insert_post" value="Submit">Submit</button>
                  <button type="submit" class="btn" name="cancel" value="Cancel">Cancel</button>
                </div>
              </fieldset>
            </form>                     
          </div>
        </div>
			</div>
    </div>
	</div>
	
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
				<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										
										 <li id="menu-academico" ><a href="product.php"><i class="fa fa-file-text-o"></i> <span>Product</span></a></li>
									<li><a href="slider.php"><i class="lnr lnr-pencil"></i> <span>Slider</span></a></li>
									<li id="menu-academico" ><a href="order.php"><i class="fa fa-file-text-o"></i> <span>Order</span></a></li>
									<li id="menu-academico" ><a href="customer.php"><i class="lnr lnr-book"></i> <span>Customer</span></a></li>
									 <li><a href="admin.php"><i class="lnr lnr-envelope"></i> <span>Admin</span></a></li>
								  </ul>
								</div>
							  
							  </div>

							  </body>
</html>

<?php

  if(isset($_POST['insert_post'])){
    $namabarang    = $_POST['namabarang'];
    $id_kategori   = $_POST['id_kategori'];
    $stok          = $_POST['stok'];
    $harga         = $_POST['harga'];
    $detail        = $_POST['detail'];

    //getting the image from the field BRG
    $gambarbrg     = $_FILES['gambarbrg']['name'];
    $gambarbrg_tmp = $_FILES['gambarbrg']['tmp_name'];

    move_uploaded_file($gambarbrg_tmp, "product_images/gambarbrgs/$gambarbrg");

    $insert_product = "insert into produk(namabarang,id_kategori,stok,harga,gambarbrg,detail) values ('$namabarang','$id_kategori','$stok','$harga','$gambarbrg','$detail')";

    $run_product = mysqli_query($con, $insert_product);

    if ($run_product) {
      echo "<script>alert('Product has been inserted!')</script>";
      echo "<script>window.open('insert_product.php','_self')</script>";
    }else{
      echo "Failed insert!!!";
    }
  }

?>