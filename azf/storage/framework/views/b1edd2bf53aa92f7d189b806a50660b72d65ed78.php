<div class="form-group">
    <?php echo Form::label('Nombre:'); ?>

    <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del Usuario']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('Correo:'); ?>

    <?php echo Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('Password:'); ?>

    <?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']); ?>

</div>

