<?php $__env->startSection('template_title'); ?>
    <?php echo e($capacitaciones->name ?? "{{ __('Show') capacitaciones"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> capacitaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('capacitaciones.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($capacitaciones->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <?php echo e($capacitaciones->descripcion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            <?php echo e($capacitaciones->fecha_inicio); ?>

                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            <?php echo e($capacitaciones->fecha_fin); ?>

                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            <?php echo e($capacitaciones->hora_inicio); ?>

                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            <?php echo e($capacitaciones->hora_fin); ?>

                        </div>
                        <div class="form-group">
                            <strong>Cupos Disponibles:</strong>
                            <?php echo e($capacitaciones->cupos_disponibles); ?>

                        </div>
                   

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\capacitaciones\resources\views/capacitaciones/show.blade.php ENDPATH**/ ?>