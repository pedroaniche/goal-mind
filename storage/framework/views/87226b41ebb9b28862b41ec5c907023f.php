<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Editar \''.$category->name.'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Editar \''.$category->name.'\'']); ?>
    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-5">
            <div class="mb-5">
                <label for="name" class="form-label">Categoria:</label>
                <?php if(old('name')): ?>
                    <input type="text" autofocus id="name" name="name" class="form-control"
                        value="<?php echo e(old('name')); ?>" placeholder="nome da categoria">
                <?php else: ?>
                    <input type="text" autofocus id="name" name="name" class="form-control"
                        value="<?php echo e($category->name); ?>" placeholder="nome da categoria">
                <?php endif; ?>
            </div>

            <div class="mb-3" id="goals">
                <label for="goal" class="form-label">Objetivos:</label>
                <?php if(old('goals')): ?>
                    <?php $__currentLoopData = old('goals'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="goals[]" value="<?php echo e($goal); ?>"
                                placeholder="nome do objetivo">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $category->goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="goals[]" value="<?php echo e($goal->name); ?>"
                                placeholder="nome do objetivo">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" onclick="addField()">Adicionar objetivo</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-dark mt-5">Cancelar</a>
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
    function addField() {
        const fieldsList = document.querySelector('#goals');
        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control');
        input.setAttribute('name', 'goals[]');
        input.setAttribute('placeholder', 'nome do objetivo');

        const removeButton = document.createElement('button');
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('class', 'btn btn-outline-danger');
        removeButton.setAttribute('onclick', 'removeField(this)');
        removeButton.innerHTML = 'X';

        field.appendChild(input);
        field.appendChild(removeButton);
        fieldsList.appendChild(field);
    }

    function removeField(button) {
        const field = button.parentNode;
        const fieldsList = field.parentNode;
        fieldsList.removeChild(field);
    }
</script>
<?php /**PATH /Users/colaborador/Documents/goal-mind/resources/views/categories/edit.blade.php ENDPATH**/ ?>