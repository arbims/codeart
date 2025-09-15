<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card position-relative">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Categories </h6>
            </div>
            <div class="card-body">
                <?= form_open_multipart('admin/categories/edit/' . $category->id) ?>
                <?= form_hidden("_method", "PUT") ?>
                <div class="mb-3 row">
                    <?= form_label('name', 'name', ['class' => 'col-sm-2 col-form-label']) ?>
                    <div class="col-sm-6">
                        <?= form_input('name', old('name', $category->name), ['class' => "form-control " . errors_message_class(session('errors'), 'name') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'name') ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <?= form_label('slug', 'slug', ['class' => 'col-sm-2 col-form-label']) ?>
                    <div class="col-sm-6">
                        <?= form_input('slug', old('slug', $category->slug), ['class' => "form-control " . errors_message_class(session('errors'), 'slug') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'slug') ?>
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <div class="col-md-12"><button type="submit" class="btn btn-primary">edit</button></div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection(); ?>