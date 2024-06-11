<form action="?action=store" method="POST" enctype='multipart/form-data'>
    ten: <input type="text" name='name'><br>
    gia: <input type="text" name="price"><br>
    anh: <input type="file" name="anh"><br>
    mo ta: <input type="text" name="des_c"><br>
    so luong: <input type="number" min="1" name="quanty"><br>
    danh muc: <select name="category_id" id=""><br>
        <?php
        foreach ($categories as $item) {
            ?>
            <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
            <?php
        }
        ?>
    </select><br>

    <input type="submit" name="them" value="them san pham">

</form>