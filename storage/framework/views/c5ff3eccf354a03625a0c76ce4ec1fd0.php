<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Novo Objetivo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Novo Objetivo']); ?>
    <form action="<?php echo e(route('categories.goals.store', $category->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
            </div>

            <div class="mb-3" id="tasks">
                <label for="task" class="form-label">Tarefas:</label>
                <?php if(old('tasks')): ?>
                    <?php $__currentLoopData = old('tasks'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="text" class="form-control mb-2" name="tasks[]" value="<?php echo e($task); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <input type="text" class="form-control mb-2" name="tasks[]">
                <?php endif; ?>
            </div>
            <button type="button" class="btn btn-primary mb-3" onclick="addTask()">Adicionar tarefa</button>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('categories.goals.index', $category->id)); ?>" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<script>
    function addTask() {
        const tasks = document.querySelector('#tasks');
        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control mb-2');
        input.setAttribute('name', 'tasks[]');
        tasks.appendChild(input);
        console.log(tasks);
    }
</script><?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/goals/create.blade.php ENDPATH**/ ?>