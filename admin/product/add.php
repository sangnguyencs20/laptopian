<div class="row">
    <div class="row form-title">
        <h1>Add new product</h1>
    </div>

    <div class="row form-content">
        <form action="index.php?act=addProduct" method="post" enctype="multipart/form-data">
            <!-- enctype for img upload -->
            <div class="row mb10">
                Category <br>
                <select name="cateId">
                    <?php
                    foreach ($cateList as $cate) {
                        echo "<option value='$cate[id]'>$cate[name]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="row mb10">
                Product name <br>
                <input type="text" name="productName" id="">

            </div>

            <div class="row mb10">
                Price <br>
                <input type="text" name="price" id="">
            </div>

            <div class="row mb10">
                Image <br>
                <input type="file" name="img" id="">
            </div>

            <div class="row mb10">
                Description <br>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>


            <div class="row mb10">
                <input type="submit" name="addNewProduct" value="Add new">
                <input type="reset" value="Retype">
                <a href="index.php?act=productList">
                    <input type="button" value="List of Product">
                </a>
            </div>
            <?php
            if (isset($noti) && ($noti)) {
                echo $noti;
            }
            ?>
        </form>
    </div>
</div>
</div>