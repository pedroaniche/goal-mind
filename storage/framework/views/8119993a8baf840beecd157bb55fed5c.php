<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Categoria '.e($category->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Categoria '.e($category->name).'']); ?>
    <?php if(isset($message)): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <ul class="list-group">
        <?php $__currentLoopData = $category->goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($goal->name); ?>


                <span class="d-flex">
                    <a href="" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="" method="POST" class="ms-2">
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

    <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
        <a href="{{}}" class="btn btn-dark mt-5">Adicionar</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/categories/show.blade.php ENDPATH**/ ?>