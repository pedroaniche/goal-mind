<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Tarefas de \''.e($goal->name).'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tarefas de \''.e($goal->name).'\'']); ?>
    <?php if(isset($message)): ?>
        <div class="alert alert-success"><?php echo e($message); ?></div>
    <?php endif; ?>

    <ul class="list-group">
        <?php $__currentLoopData = $goal->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <form action="<?php echo e(route('categories.goals.tasks.update', [$category->id, $goal->id, $task->id])); ?>"
                        method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <label for="checked" class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="checked" name="checked"
                                onchange="this.form.submit()" <?php if($task->checked): ?> checked <?php endif; ?>>
                        </label>
                    </form>

                    <div class="ms-3">
                        <?php echo e($task->description); ?>

                    </div>
                </div>

                <form action="<?php echo e(route('categories.goals.tasks.destroy', [$category->id, $goal->id, $task->id])); ?>"
                    method="POST" class="ms-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="d-flex justify-content-start align-items-center">
        <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/goals/show.blade.php ENDPATH**/ ?>