<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Nova Objetivo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nova Objetivo']); ?>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
            </div>

            <div class="mb-3" id="objectives">
                <label for="goal" class="form-label">Objetivos:</label>
                <?php if(old('goals')): ?>
                    <?php $__currentLoopData = old('goals'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="text" class="form-control mb-2" name="goals[]" value="<?php echo e($goal); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <input type="text" class="form-control mb-2" name="goals[]">
                <?php endif; ?>
            </div>
            <button type="button" class="btn btn-primary mb-3" onclick="addObjective()">Adicionar objetivo</button>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar</button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<script>
    function addObjective() {
        const objectives = document.querySelector('#objectives');
        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control mb-2');
        input.setAttribute('name', 'goals[]');
        objectives.appendChild(input);
    }
</script><?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/goals/create.blade.php ENDPATH**/ ?>