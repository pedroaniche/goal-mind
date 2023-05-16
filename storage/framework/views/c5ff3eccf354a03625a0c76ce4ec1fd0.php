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
        <div class="mb-5">
            <div class="mb-5">
                <label for="name" class="form-label">Objetivo:</label>
                <input type="text" autofocus id="name" name="name" class="form-control"
                    placeholder="nome do objetivo" value="<?php echo e(old('name')); ?>">
            </div>

            <div class="mb-3" id="tasks">
                <label for="task" class="form-label">Tarefas:</label>
                <?php if(old('tasks')): ?>
                    <?php $__currentLoopData = old('tasks'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa"
                                value="<?php echo e($task->name); ?>">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa">
                        <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                    </div>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" onclick="addField()">Adicionar tarefa</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn btn-dark mt-5">Cancelar</a>
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
    let checkboxLsit = [];

    function addField() {
        const fieldDiv = document.querySelector('#tasks');

        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control');
        input.setAttribute('name', 'tasks[]');
        input.setAttribute('placeholder', 'descrição da tarefa');

        const removeButton = document.createElement('button');
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('class', 'btn btn-outline-danger');
        removeButton.setAttribute('onclick', 'removeField(this)');
        removeButton.innerHTML = 'X';

        field.appendChild(input);
        field.appendChild(removeButton);
        fieldDiv.appendChild(field);
    }

    function removeField(button) {
        const field = button.parentNode;
        const fieldDiv = field.parentNode;        
        fieldDiv.removeChild(field);
    }
</script>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/goals/create.blade.php ENDPATH**/ ?>