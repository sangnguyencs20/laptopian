<div class="row mb">
    <div class="boxtitle">
        Account
    </div>
    <div class="boxcontent login-form">
        <form action="#" method="post">
            <div class="row mb10">
                Username <br>
                <input type="text" name="user" id=""> <br>
            </div>
            <div class="row mb10">
                Password <br>
                <input type="password" name="pass" id=""> <br />
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" id=""> Remember me? <br>
            </div>
            <div class="row mb10">
                <input type="submit" value="Log in">
            </div>
            <li><a href="">Forget password?</a></li>
            <li><a href="">Register</a></li>
        </form>
    </div>
</div>


<div class="row mb">
    <div class="boxtitle">
        Category
    </div>
    <div class="boxcontentmid menu-vertical">
        <ul>
            <?php
            foreach ($categoryList as $category) {
                echo '<li><a href="index.php?act=productList&cateId=' . $category['id'] . '">' . $category['name'] . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="#" method="post">
            <input type="text" name="" id="">
        </form>
    </div>
</div>


<div class="row">
    <div class="boxtitle">
        Top 10 Products
    </div>
    <div class="row boxcontent">
        <?php
        foreach ($top10Product as $product) {
            echo '<div class="row mb10 top10">
                            <img src="./uploads/' . $product['img'] . '" alt="">
                            <a href="index.php?act=productdetail&id=' . $product['id'] . '">' . $product['name'] . '</a>
                        </div>';
        }
        ?>
    </div>
</div>