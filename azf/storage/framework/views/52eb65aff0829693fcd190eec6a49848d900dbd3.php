<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>ID_Estado</th>
        <th>Colonia</th>
        </thead>
        <?php foreach($colonias as $coloni): ?>
            <tbody>
            <td><?php echo e($coloni->id); ?></td>
            <td><?php echo e($coloni->id_edo); ?></td>
            <td><?php echo e($coloni->nom_col); ?></td>
            <td>
                <?php echo link_to_route('colonia.edit', $title = 'Editar', $parameters = $coloni->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>