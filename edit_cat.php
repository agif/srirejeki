<?php
  include ("includes/db.php");

  if(isset($_GET['edit_cat'])){

      $get_id = $_GET['edit_cat'];

      $get_pro = "SELECT * FROM produk WHERE idbarang='$get_id' ";

      $run_pro = mysqli_query($con, $get_pro);

      $i = 0;

      while($row_pro=mysqli_fetch_array($run_pro)){
            $pro_id    = $row_pro['idbarang'];
            $pro_title = $row_pro['namabarang'];
            $pro_id_cat = $row_pro['id_kategori'];
            $pro_stock = $row_pro['stok'];
            $pro_price = $row_pro['harga'];
            $pro_img = $row_pro['gambarbrg'];
            $pro_detail = $row_pro['detail'];

      $get_cat = "select * from kategori where id_kategori='$pro_id_cat' ";

            $run_cat = mysqli_query($con, $get_cat);

            $row_cat = mysqli_fetch_array($run_cat);

            $pro_id_cat     = $row_cat['id_kategori'];

            $category_title = $row_cat['nama_kategori'];

      $gambar_display = $row_cat['gambar_display'];
          
  }
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
		<div class="col-sm-offset-3 col-lg-3 col-lg-offset-2 main">
      <!-- block -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">Edit Kategori</div>
        </div>
        <div class="block-content collapse in">
          <div class="span12">
            <form action="" method="post" enctype="multipart/form-data"> 
              <fieldset>
                <div class="control-group">
                  <label class="control-label">Nama Kategori</label>
                  <div class="controls">
                    <input class="input-xlarge focused" name="nama_kategori" type="text" style="height:30px; width: 18%;" value="<?php echo $category_title; ?>" >
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Gambar Display Untuk Kategori </label>
                  <div class="controls">
                    <input type="file" name="gambar_display" /><img src="product_images/gambar_displays/<?php echo $gambar_display; ?>" width="15%" height="15%" />
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
</div>
</body>
</html>

<?php

if(isset($_POST['update_category'])){
    
    $update_id  = $cat_id;

    $id_kategori= $_POST['id_kategori'];
    $nama_kategori  = $_POST['nama_kategori'];
    
    //getting the image from the field gambar_display
    $gambar_display     = $_FILES['gambar_display']['name'];
    $gambar_display_tmp = $_FILES['gambar_display']['tmp_name'];

    move_uploaded_file($gambar_display_tmp, "product_images/gambar_displays/$gambardisplay");

    $update_product = "UPDATE kategori SET nama_kategori='$nama_kategori', gambar_display='$gambar_display' WHERE id_kategori='$update_id' ";

    $run_category = mysqli_query($con, $update_category);

    if($run_category){

      echo "<script>alert('Category has been updated!')</script>";
      echo "<script>window.open('insert.php?insert_category','_self')</script>";
    }
}

?>