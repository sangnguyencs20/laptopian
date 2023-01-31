<div class="row mb">
    <div class="leftbox mr">
        <div class="row mb">
            <?php
            extract($productDetail);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php
                $img_path = "./uploads/" . $img;
                echo '<div class ="row mb productDetailImg"><img src="' . $img_path . '" alt=""></div>';
                echo $description;
                ?>
            </div>
        </div>

        <div class="row mb">
            <div class="boxtitle">Product Detail</div>
            <div class="row boxcontent">

            </div>
        </div>


        <div class="row mb">
            <div class="boxtitle">Similar Product</div>
            <div class="row boxcontent">
                <?php
                foreach ($sameCateProduct as $product) {
                    extract($product);
                    echo '<div >
                                <a href="index.php?act=productdetail&id=' . $id . '">' . $name . '</a>
                                </div>';
                }
                ?>
            </div>
        </div>


    </div>



    <div class="rightbox">
        <?php
        include 'rightbox.php'
        ?>
    </div>
</div>