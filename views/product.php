<div class="row mb">
    <div class="leftbox mr">
        <div class="row mb">
            <?php
                extract($productList);
            ?>
            <div class="boxtitle"><?=$cateName?></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($productList as $product) {
                    if ($i % 3 == 2) {
                        $mr = "";
                    } else {
                        $mr  = "mr";
                    }
                    echo '<div class="boxproduct ' . $mr . '">
                                    <div class="row img">
                                        <a href="index.php?act=productdetail&id=' . $product['id'] . '">
                                        <img src="./uploads/' . $product['img'] . '" alt="">
        
                                        </a>
                                    </div>
                                    <div class = "namePrice">
                                    <a href="index.php?act=productdetail&id=' . $product['id'] . '">' . $product['name'] . '</a>
                                        <p>' . $product['price'] . 'đ</p>
                                    </div>
                                    </div>';
                    $i += 1;
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