<?php view('admin/partials/header')?>

<div class="container">
    <a class="btn btn-sm btn-primary my-2" href="<?= url('/admin/blog/create') ?>">Add blog</a>
    <table class="table">
       <thead>
       <tr>
            <th>id</th>
            <th>title</th>
            <th>slag</th>
            <th>edit</th>
            <th>delete</th>
       </tr>
       </thead>
        <tbody>
        <?php foreach ($blogs as $blog):?>
            <tr>
                <td><?= $blog->id; ?></td>
                <td><?= $blog->title; ?></td>
                <td><?= $blog->slag; ?></td>
                <td>
                    <a href="<?= url('/admin/blog/' .$blog->id) ?>">Edit</a>
                </td>
                <td>
                    <form action="<?= url('/admin/blog-delete/'.$blog->id) ?> "method="POST">
                        <button class="btn btn-danger btn-sm">delete</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php view('admin/partials/footer')?>
