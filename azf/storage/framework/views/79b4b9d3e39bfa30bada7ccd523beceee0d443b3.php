<?php $__env->startSection('fraccion'); ?>
    <?php echo Form::open(['route'=>'registro.store','method'=>'POST']); ?>


    <h3>Datos del Domicilio</h3>
    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('estado', ['S' => 'San Luis Potosí', 'Q' => 'Queretaro'], 'S' ,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Fraccionamiento:'); ?>

        <?php echo Form::select('Fr', ['L' => 'Los Almendros', 'J' => 'Juriquilla'], 'L',['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Calle:'); ?>

        <?php echo Form::select('calle', ['L' => 'Una calle', 'S' => 'Otra calle'], null ,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Numero Externo:'); ?>

        <?php echo Form::text('n_ext',null,['class'=>'form-control','placeholder'=>'Numero Externo']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Numero Interno:'); ?>

        <?php echo Form::text('n_int',null,['class'=>'form-control','placeholder'=>'Numero Interno']); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <h3>Datos del Cliente</h3>
        <div class="form-group">
            <?php echo Form::label('Nombre:'); ?>

            <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Apellido Paterno:'); ?>

            <?php echo Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Apellido Materno:'); ?>

            <?php echo Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Telefono'); ?>

            <?php echo Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']); ?>

        </div>

    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>