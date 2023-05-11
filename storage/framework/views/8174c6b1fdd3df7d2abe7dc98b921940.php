<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Categorias']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Categorias']); ?>
    <?php if(isset($message)): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <ul class="list-unstyled border-box" role="list">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->first || $loop->iteration % 5 === 1): ?>
                <div class="row mt-3 d-flex justify-content-center flex-wrap flex-row-reverse" role="group">
            <?php endif; ?>

            <div class="col-md-2 mb-3" role="listitem">
                <li class="border rounded p-3 text-center col-md-12 border-box">

                    <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="text-decoration-none text-dark">
                        <?php echo e($category->name); ?>

                    </a>

                    <div class="d-flex justify-content-between mt-5">
                        <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-primary btn-sm">
                            E
                        </a>

                        <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm">
                                X
                            </button>
                        </form>
                    </div>
                </li>
            </div>

            <?php if($loop->iteration % 5 === 0 || $loop->last): ?>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-dark mt-5">Adicionar</a>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/categories/index.blade.php ENDPATH**/ ?>