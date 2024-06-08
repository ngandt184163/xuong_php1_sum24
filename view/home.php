<?php
include "./includes/header.php";
?>


<h1>Trang chu chua ds san pham</h1>

<style>
    /* .product {
        color: red;
    } */
</style>

<div class="list-product">
    <!-- danh sach san pham duoc luu trong $products -->
    <?php 
        foreach($products as $product){
            ?>
            <div class="product">
                <h2><a href="?action=product_detail&id=<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a></h2>
                <b><?php echo $product['price']; ?></b>
                <i><?php echo $product['quanty']; ?></i>
            </div>
            <hr>
            <?php
        }
    ?>
    
</div>


<?php
include "./includes/footer.php";
?>