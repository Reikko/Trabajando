<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-condensed table-hover">
        <thead>
        <th>ID</th>
        <th>COLONIA</th>
        <th>FRACCIONAMIENTO</th>
        <th>Editar</th>
        <th>Ver</th>
        </thead>
        <?php foreach($fracs as $frac): ?>
            <tbody>
            <td><?php echo e($frac->id); ?></td>
            <td><?php echo e($frac->nom_col); ?></td>
            <td><?php echo e($frac->nom_frac); ?></td>
            <td>
                <?php echo link_to_route('fr.edit', $title = 'Editar', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('fr.show', $title = 'Ver', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>