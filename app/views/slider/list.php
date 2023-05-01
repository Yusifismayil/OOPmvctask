<table border="1">
    <tr>
        <th>id</th>
        <th>img</th>
        <th>action</th>
    </tr>
    <tbody>
    <?php
    foreach ($sliders as $slider):
        ?>
        <tr>
            <th><?= $slider['id'] ?></th>
            <th><img src="<?= img($slider['image']) ?>" alt=""></th>
            <th><?= $slider['type'] ?></th>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>