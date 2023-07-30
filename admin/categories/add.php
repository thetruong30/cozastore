<div class="container mt-2">
    <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="form-group my-3">
            <label for="">Category</label> <br>
            <input class="form-control" type="text" name="cate_name" value="<?= $cate_name ?? '' ?>">
            <span style="color:red">
                    <?= $errors['cate_name'] ?? '' ?>
                </span>
        </div>  
        
        <div class="form-group my-3">
            <label for="">Category Image</label> <br>
            <input class="form-control" type="file" name="cate_img" >
            <input type="hidden" name="cate_img" value="<?= $cate_img ?? '' ?>">
            <span style="color:red">
                    <?= $errors['cate_img'] ?? '' ?>
                </span>
        </div>   
        <div class="col mb10 mt">
            <input class="" type="submit" name="btn_insert" value="ADD">
            <input class="" type="reset" value="RESET">
            <a href="index.php?act=listcategory"><input type="button" value="LIST"></a>
        </div>
    </form>
</div>