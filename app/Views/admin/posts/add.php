<?= $this->extend('layout/admin')?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">

        <div class="card position-relative">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
            </div>
            <div class="card-body">
                <?= form_open_multipart('admin/posts/add', ['class' => 'form-horizontal']) ?>
                <div class="mb-3 row">
                    <div class="col-sm-6">
                        <?= form_label('name', 'name', ['class' => 'col-form-label']) ?>
                        <?= form_input('name', old('name', ''), ['class' => "form-control " . errors_message_class(session('errors'), 'name') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'name') ?>
                    </div>
                    <div class="col-sm-6">
                        <?= form_label('slug', 'slug', ['class' => 'col-form-label']) ?>
                        <?= form_input('slug', old('slug', ''), ['class' => "form-control " . errors_message_class(session('errors'), 'slug') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'slug') ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6">
                        <?= form_label('image', 'image', ['class' => 'col-form-label']) ?>
                        <?= form_upload('image', old('image', ''), ['class' => "form-control " . errors_message_class(session('errors'), 'image') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'image') ?>
                    </div>
                    <div class="col-md-4">
                        <?= form_label('technologies', 'technologies_ids', ['class' => 'col-form-label']) ?>
                        <?= form_multiselect('technologies_ids[]', $post->technologies_list(), [], ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'select-state']); ?>
                        <?= errors_message(session('errors'), 'technologies_ids') ?>
                    </div>
                </div>

                <div class="fmb-3 row">
                    <div class="col-sm-12">
                        <?= form_label('content', 'content', ['class' => 'col-form-label']) ?>
                        <div class="form-group"> 
                            <?= form_textarea('content', old('content', ''), ['class' => "form-control " . errors_message_class(session('errors'), 'content') . "", 'label' => false]) ?>
                        <?= errors_message(session('errors'), 'content') ?>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-6">
                        <?= form_label('type', 'type', ['class' => 'col-form-label']) ?>
                        <?= form_dropdown('type',  [1 => "article", 2 => "tutoriel"], [], ['class' => 'form-control']); ?>
                        <?= errors_message(session('errors'), 'type') ?>
                    </div>
                    <div class="col-sm-6">
                        <?= form_label('Category', 'category_id', ['class' => 'col-form-label']) ?>
                        <?= form_dropdown('category_id', $post->caregories_list(), [], ['class' => 'form-control']); ?>
                    </div>
                </div>


                <hr>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection(); ?>