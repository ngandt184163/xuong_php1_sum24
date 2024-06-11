<form action="?action=update&id=<?php echo $product['id']; ?>" method="POST" enctype='multipart/form-data'>
    ten: <input type="text" name='name' value="<?php echo $product['name']; ?>"><br>
    gia: <input type="text" name="price" value="<?php echo $product['price']; ?>"><br>
    anh: <input type="file" name="anh"><br>
    <img width=150 height=150 src="<?php echo $product['image']; ?>" alt="">
    mo ta: <input type="text" name="des_c" value="<?php echo $product['des_c']; ?>"><br>
    so luong: <input type="number" min="1" name="quanty" value="<?php echo $product['quanty']; ?>"><br>
    danh muc: <select name="category_id" id=""><br>
        <?php
        foreach ($categories as $item) {
            ?>
            <option <?php if($item['id'] == $product['category_id']) echo 'selected' ?> value="<?php echo $item['id'] ?>">
            <?php echo $item['name'] ?></option>
            <?php
        }
        ?>
    </select><br>

    <input type="submit" name="sua" value="sua san pham">

</form>