<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => ''.e($task->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($task->name).'']); ?>

    <div class="container d-flex justify-content-center align-items-center vh-50">
        <div class="square-box">
            <?php if($task->description): ?>
                <?php echo e($task->description); ?>

            <?php else: ?>
                Sem descrição
            <?php endif; ?>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('categories.goals.tasks.index', [$category->id, $goal->id])); ?>"
            class="btn btn-secondary mt-5">
            &#x2190; Voltar
        </a>
        <a href="<?php echo e(route('categories.goals.tasks.edit', [$category->id, $goal->id, $task->id])); ?>" class="btn btn-primary mt-5">
            Editar
        </a>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/tasks/show.blade.php ENDPATH**/ ?>