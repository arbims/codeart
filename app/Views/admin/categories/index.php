<?= $this->extend('layout/admin')?>

<?= $this->section('content') ?>

<a href="<?= url_to('Admin\CategoriesController::add') ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg> Add</a>
<br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $k => $v): ?>
            <tr>
                <td><?php echo $v->id ?></td>
                <td><?php echo $v->name ?></td>
                <td><?php echo $v->slug ?></td>
                <td><?= anchor(site_url('/admin/categories/delete/'.$v->id), 'Delete', ['onclick' => 'return confirm("Confirm Delete ?")', 'class' => 'btn btn-danger']) ?> -
          <?= anchor(site_url('/admin/categories/edit/'.$v->id),'Edit', ['class' => 'btn btn-success'])?></td></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection(); ?>