<form action="<?php echo e($action); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if($update): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-control"
            <?php if(isset($name)): ?>
                value="<?php echo e($name); ?>"
            <?php endif; ?>>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/components/categories/form.blade.php ENDPATH**/ ?>