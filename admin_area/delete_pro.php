<?php

include("includes/db.php");

    if(isset($_GET['delete_pro'])){

        $delete_id  = $_GET['delete_pro'];

        $delete_pro = "DELETE FROM produk WHERE idbarang='$delete_id' ";

        $run_delete = mysqli_query($con, $delete_pro);

        if($run_delete){

            echo "<script>alert('Produk berhasil dihapus')</script>";
            echo "<script>window.open('index.php?all_product','_self')</script>";
        
        }
    }
?>