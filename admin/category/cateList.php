<div class="row">
    <div class="row form-title">
        <h1>List of Category</h1>
    </div>
    <div class="row form-content">
        <div class="row mb10">

        </div>

        <div class="row mb10 formListCategory">
            <table>
                <tr>
                    <th></th>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th></th>
                </tr>
                <?php
                foreach ($cateList as $cate) {
                    $editCate = "index.php?act=editCate&id=$cate[id]";
                    $deleteCate = "index.php?act=deleteCate&id=$cate[id]";
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='' id=''></td>";
                    echo "<td>$cate[id]</td>";
                    echo "<td>$cate[name]</td>";
                    echo "<td><a href ='$editCate'><input type='button' value='Edit'><a href ='$deleteCate'><input type='button' value='Delete'></td>";
                    echo "</tr>";
                }

                ?>

            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Choose all">
            <input type="reset" value="Reject all choices">
            <input type="submit" value="Delete marked choices">
            <a href="index.php?act=addCategory">
                <input type="button" value="Add new Category">
            </a>
        </div>

    </div>
</div>