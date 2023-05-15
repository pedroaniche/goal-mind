<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => ''.e($goal->name).': Tarefas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($goal->name).': Tarefas']); ?>
    <?php if(isset($message)): ?>
        <div class="alert alert-success"><?php echo e($message); ?></div>
    <?php endif; ?>

    <ul class="list-group">
        <?php $__currentLoopData = $goal->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <form action="<?php echo e(route('categories.goals.tasks.update', [$category->id, $goal->id, $task->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <label for="checked" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checked" name="checked" onchange="this.form.submit()" <?php echo e($task->checked ? 'checked' : ''); ?>>
                    </label>
                    <?php echo e($task->name); ?>

                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('categories.goals.index', $category->id)); ?>" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
        <a href="<?php echo e(route('categories.goals.tasks.create', [$category->id, $goal->id])); ?>" class="btn btn-dark mt-5">Adicionar</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/tasks/index.blade.php ENDPATH**/ ?>