<div class="row">
    <div class="row form-title">
        <h1>Add new category</h1>
    </div>

    <div class="row form-content">
        <form action="index.php?act=addCategory" method="post">
            <div class="row mb10">
                Category ID <br>
                <input type="text" name="cateId" id="" disabled>
            </div>

            <div class="row mb10">
                Category name <br>
                <input type="text" name="cateName" id="">
                
            </div>

            <div class="row mb10">
                <input type="submit" name="addNewCate" value="Add new">
                <input type="reset" value="Retype">
                <a href="index.php?act=cateList">
                    <input type="button" value="List of Category">
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