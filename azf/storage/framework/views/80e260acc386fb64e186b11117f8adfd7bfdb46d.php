<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <th>Estado</th>
        <th>Id</th>
        <th>Nombre</th>
        </thead>
        <?php foreach($fracs as $frac): ?>
            <tbody>
            <td><?php echo e($frac->edo_id); ?></td>
            <td><?php echo e($frac->id); ?></td>
            <td><?php echo e($frac->nom_fracc); ?></td>
            <td>
                <?php echo link_to_route('fr.edit', $title = 'Editar', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>