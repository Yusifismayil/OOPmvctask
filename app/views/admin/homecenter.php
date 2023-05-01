<?php view('admin/partials/header')?>

<div class="container my-2">

    <form action="<?= url('/admin/homecenter') ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="title" value="<?=$HomeOne->title ?? '' ?>" class="form-control">
        <textarea name="text" class="form-control my-2"  id="" cols="30" rows="10" value=""><?=$HomeOne->text ?? '' ?></textarea>
    <?php
    if ($HomeOne->image ?? ''){
        
    ?>
        <img src="  <?=img($HomeOne->image ?? '') ?>" alt="">

    <?php }?>
        <input type="file" class="form-control my-2" name="image">
        <button class="btn btn-sm btn-primary">Save</button>
    </form>
    
</div>

<?php view('admin/partials/footer')?>