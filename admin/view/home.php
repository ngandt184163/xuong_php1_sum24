<?php
include "../includes/header.php";
checkAdmin();
?>


<h1>Trang ADMIN</h1>

<button><a href="?action=them">Them san pham</a></button>

<style>
    /* .product {
        color: red;
    } */
</style>


<table border="1">

    <tr>
        <td>id</td>
        <td>name</td>
        <td>price</td>
        <td>image</td>
        <td>des_c</td>
        <td>quanty</td>
        <td>category_id</td>
        <td>Sua</td>
        <td>Xoa</td>
    </tr>
    
    <!-- hien thi cac hang du lieu -->
     <?php
    foreach($products as $product) {
        echo '<tr>
        <td>'.$product['id'].'</td>
        <td>'.$product['name'].'</td>
        <td>'.$product['price'].'</td>
        <td><a href="?action=product_detail&id='.$product['id'].'"><img width=150 height=150 src="'.$product['image'].'"></a></td>
        <td>'.$product['des_c'].'</td>
        <td>'.$product['quanty'].'</td>
        <td>'.$product['category_id'].'</td>
        <td><a href="?action=sua&id='.$product['id'].'">Sua</a></td>
        <td><a href="?action=xoa&id='.$product['id'].'">Xoa</a></td>
    </tr>';
    }

    // ====================

    foreach($products as $product) {
        ?>
        <tr>
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td>image</td>
            <td><?php echo $product['des_c'] ?></td>
            <td><?php echo $product['quanty'] ?></td>
            <td><?php echo $product['category_id'] ?></td>
            <td><a href="?action=sua&id=<?php echo $product['id'] ?>">Sua</a></td>
        </tr>
        <?php
    }
     ?>
</table>


<?php
include "../includes/footer.php";
?>



