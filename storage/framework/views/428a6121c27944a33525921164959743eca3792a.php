<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Capacitacione
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

              

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Crear')); ?> Capacitaciones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('capacitaciones.store')); ?>"  role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('capacitaciones.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\capacitaciones\resources\views/capacitaciones/create.blade.php ENDPATH**/ ?>