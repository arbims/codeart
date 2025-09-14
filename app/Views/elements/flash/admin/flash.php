<?php if(session()->has('success')): ?>
<div class="alert alert-success">
    <?= session("success") ?><span class="close">X</span>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger">
    <?= session("error") ?><span class="close">X</span>
</div>
<?php endif; ?>