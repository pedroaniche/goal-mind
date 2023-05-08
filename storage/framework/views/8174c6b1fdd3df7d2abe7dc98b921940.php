<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Categorias']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Categorias']); ?>
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-dark mb-2">Adicionar</a>

    <?php if(isset($message)): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <ul class="list-group">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="<?php echo e(route('goals.index', $category->id)); ?>">
                    <?php echo e($category->name); ?>

                </a>

                <span class="d-flex">
                    <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" class="ms-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/categories/index.blade.php ENDPATH**/ ?>