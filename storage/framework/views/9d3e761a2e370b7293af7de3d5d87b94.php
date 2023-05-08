<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Nova Categoria']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nova Categoria']); ?>
    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="row mb-3">
            <div class="col-6">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
            </div>

            <div class="col-6">
                <label for="goalName" class="form-label">Objetivo:</label>
                <input type="text" id="goalName" name="goalName" class="form-control" value="<?php echo e(old('goalName')); ?>">
            </div>

            <div class="col-12 mt-3">
                <label for="taskName" class="form-label">Tarefa:</label>
                <input type="text" id="taskName" name="taskName" class="form-control" value="<?php echo e(old('taskName')); ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/categories/create.blade.php ENDPATH**/ ?>