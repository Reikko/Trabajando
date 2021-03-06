<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'fr.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('estate',$estados,null,['id'=>'estado_sel','class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Colonia:'); ?>

        <?php echo Form::select('id_col',['1'=>'Selecciona un Estado'],null,['id'=>'colony_sel','class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre del Fraccionamiento:'); ?>

        <?php echo Form::text('nom_frac',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del Fraccionamiento']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>