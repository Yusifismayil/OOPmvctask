<?php view('admin/partials/header')?>

    <div class="container my-2">

        <form action="<?= $blog ? url('/admin/blog/'.$blog->id) : url('/admin/blog') ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="title" value="<?=$blog->title ?? '' ?>" class="form-control">
            <input type="text" name="slag" value="<?=$blog->slag ?? '' ?>" class="form-control">
            <?php
            if ($blog->image ?? ''){

                ?>
                <img src="  <?=img($blog->image ?? '') ?>" alt="">

            <?php }?>
            <input type="file" class="form-control my-2" name="image">
            <button class="btn btn-sm btn-primary">Save</button>
        </form>

    </div>

<?php view('admin/partials/footer')?>