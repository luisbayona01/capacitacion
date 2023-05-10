<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $capacitaciones->nombre, ['class' => 'form-control' , 'placeholder' => 'Nombre','required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback">el nombre de la  capacitacion es  requerida</div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('descripcion')); ?>

            <?php echo e(Form::text('descripcion', $capacitaciones->descripcion, ['class' => 'form-control' , 'placeholder' => 'Descripcion','required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback"> la descripccion es requerida </div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_inicio')); ?>

            <?php echo e(Form::text('fecha_inicio', $capacitaciones->fecha_inicio, ['class' => 'form-control'  , 'id'=>'Fechaini', 'placeholder' => 'Fecha Inicio','required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback"> fecha  inicio es requerida</div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_fin')); ?>

            <?php echo e(Form::text('fecha_fin', $capacitaciones->fecha_fin, ['class' => 'form-control', 'id'=>'Fechafin','placeholder' =>'Fecha Fin', 'required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback">fecha  fin es requerida</div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('hora_inicio')); ?>


            <?php echo e(Form::text('hora_inicio', $capacitaciones->hora_inicio, ['class' => 'form-control' , 'id'=>'horaini', 'placeholder' => 'Hora Inicio','required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback"> la hora de inicio es  requerida </div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('hora_fin')); ?>


            <?php echo e(Form::text('hora_fin', $capacitaciones->hora_fin, ['class' => 'form-control' ,'id'=>'horafin', 'placeholder' => 'Hora Fin', 'required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback">hora final es requerida</div>'; ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('cupos_disponibles')); ?>

   
            <?php echo e(Form::text('cupos_disponibles', $capacitaciones->cupos_disponibles, ['class' => 'form-control' , 'placeholder' => 'Cupos Disponibles','required' => 'required'])); ?>

            <?php echo '<div class="invalid-feedback"> los cupos disponibles es requerido  </div>'; ?>

        </div>
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" onclick="validateForm()"><?php echo e(__('Submit')); ?></button>
    </div>
</div>

<script>


function validateForm() {


 var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
   var hora_inicio = $('#horaini').val();
    var hora_fin = $('#horafin').val();
 horain= hora_inicio.split(':');
hini=horain[0];
horafin=hora_fin.split(':');
hf=horafin[0];
if (hini<'10'||hf>'22'){
alert("La hora de inicio o de finalización no está dentro del rango válido (10am a 10pm).");
event.preventDefault();
  event.stopPropagation();
    return false;
}

        if (form.checkValidity() === false) {
        
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      var currentTime = new Date().getHours();




     
      }, false);
    });
  // Obtener la hora actual
 
  
  // Enviar el formulario si todo está validado
  return true;
}


   $('#Fechaini').datepicker({
            uiLibrary: 'bootstrap4',
              format: 'yyyy/mm/dd'  
        });

   $('#Fechafin').datepicker({
            uiLibrary: 'bootstrap4',
             format: 'yyyy/mm/dd' 
        });


  $('#horaini').timepicker({
            uiLibrary: 'bootstrap4'
        });
  $('#horafin').timepicker({
            uiLibrary: 'bootstrap4'
        });
</script><?php /**PATH D:\www\capacitaciones\resources\views/capacitaciones/form.blade.php ENDPATH**/ ?>