<!DOCTYPE html>
<?php
	include ("includes/db.php");
?>
<html>
<head>
	<title>Inserting Product</title>
</head>
<body bgcolor="skyblue">
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="1000" border="2" bgcolor="orange">
			<tr align="center">
				<td colspan="7">
					<h2>Insert New Post Here</h2>
				</td>
			</tr>

			<tr>
				<td align="right"><b>Nama Barang: </b></td>
				<td><input type="text" name="namabarang" required /></td>
			</tr>

			<tr>
				<td align="right"><b>Kategori: </b></td>
				<td>
					<select name="id_kategori">
						<option style="width: 120px;" >Pilih Kategori</option>
					
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
				</td>
			</tr>

			<tr>
				<td align="right"><b>Stok: </b></td>
				<td>
					<input type="text" name="stok" required />
				</td>
			</tr>

			<tr>
				<td align="right"><b>Harga: </b></td>
				<td>
					<input type="text" name="harga" required />
				</td>
			</tr>

			<tr>
				<td align="right"><b>Ukuran: </b></td>
				<td>
					<select name="size">
						<option style="width: 120px;" value="XS">XS</option>
						<option style="width: 120px;" value="S">S</option>
						<option style="width: 120px;" value="M">M</option>
						<option style="width: 120px;" value="L">L</option>
						<option style="width: 120px;" value="XL">XL</option>
					
					</select>
				</td>
			</tr>

			<tr>
				<td align="right"><b>Gambar brg: </b></td>
				<td><input type="file" name="gambarbrg" /></td>
			</tr>

			<tr>
				<td align="right"><b>Gambar detail: </b></td>
				<td><input type="file" name="gambardetail" /></td>
			</tr>

			<tr>
				<td align="right"><b>Detail: </b></td>
				<td>
					<textarea name="detail" cols="30" rows="15"></textarea>
				</td>
			</tr>

			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now" /></td>
			</tr>
		</table>
	</form>

	<!-- Javascript -->
	<script type="text/javascript" src="../js/jquery-1.10.2.min.js" ></script> 
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>

<?php

	if(isset($_POST['insert_post'])){
		$namabarang    = $_POST['namabarang'];
		$id_kategori   = $_POST['id_kategori'];
		$nama_kategori = $nama_kategori;
		$stok          = $_POST['stok'];
		$harga         = $_POST['harga'];
		$size          = $_POST['size'];
		$warna         = $_POST['warna'];
		
		$detail        = $_POST['detail'];

		//getting the image from the field BRG
		$gambarbrg     = $_FILES['gambarbrg']['name'];
		$gambarbrg_tmp = $_FILES['gambarbrg']['tmp_name'];

		move_uploaded_file($gambarbrg_tmp, "gambarbrgs/$gambarbrg");

		//getting the image from the field DETAIL
		$gambardetail     = $_FILES['gambardetail']['name'];
		$gambardetail_tmp = $_FILES['gambardetail']['tmp_name'];

		move_uploaded_file($gambardetail_tmp, "gambardetails/$gambardetail");

		$insert_product = "insert into produk(namabarang,id_kategori,nama_kategori,stok,harga,size,warna,gambarbrg,gambardetail,detail) values ('$namabarang','$id_kategori','$nama_kategori','$stok','$harga','$size','$warna','$gambarbrg','$gambardetail','$detail')";

		$insert_pro = mysqli_query($con, $insert_product);

		if ($insert_pro) {
			echo "<script>alert('Product has been inserted!')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}else{
			echo "Failed insert!!!";
		}
	}

?>