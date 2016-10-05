<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Operacion</th>
        </thead>
        <?php foreach($clients as $client): ?>
            <tbody>
            <td><?php echo e($client->nombre); ?></td>
            <td><?php echo e($client->email); ?></td>
            <td>
                <?php echo link_to_route('usuario.edit', $title = 'Editar', $parameters = $client->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>