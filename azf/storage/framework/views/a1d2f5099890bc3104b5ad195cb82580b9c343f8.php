<?php $__env->startSection('content'); ?>
    <?php echo Form::model($col,['route'=>['colonias.update',$col->id],'method'=>'PUT']); ?>

    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('id_edo', $states,$col->id_edo,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre de la Colonia:'); ?>

        <?php echo Form::text('nom_col',null,['class'=>'form-control','placeholder'=>'col_carpet']); ?>

    </div>
    <?php echo Form::submit('Editar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>


    <?php echo Form::open(['route'=>['colonias.destroy',$col->id],'method'=>'DELETE']); ?>

    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>