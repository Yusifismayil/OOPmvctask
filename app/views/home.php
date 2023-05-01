<?php view('partials/header');?>
<!-- +++++ Welcome Section +++++ -->
<div id="ww">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 centered">
                <img src="<?=img($data->image ?? '')?>" alt="Stanley">
                <h1><?= $data->title?? '';?></h1>
                <p><?= $data->text ?? '';?></p>
                <p><?= $data->text ?? '';?></p>

            </div><!-- /col-lg-8 -->
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /ww -->


<!-- +++++ Projects Section +++++ -->

<?php foreach ($blogs as $blog):?>

    <div class="container pt">
        <div class="row mt centered">
            <div class="col-lg-4">
                <a class="zoom green" href="<?=img($blog->image)?>"><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt="" /></a>
                <p><?=$blog->title;?></p>
            </div>

        </div><!-- /row -->

    </div><!-- /container -->

<?php endforeach;?>

<?php view('partials/footer');?>