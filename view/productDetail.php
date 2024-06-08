<?php
include "./includes/header.php";
?>
<h2>Trang chi tiet san pham</h2>

<div class="product">
    <h2><?php echo $product['name']; ?></h2>
    <b><?php echo $product['price']; ?></b>
    <i><?php echo $product['quanty']; ?></i>
</div>
<hr>

<?php
include "./includes/footer.php";
?>