<?php $__env->startSection('template_title'); ?>
    Capacitacione
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Capacitacione')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('capacitaciones.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('nueva capacitacion')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>id</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Hora Inicio</th>
										<th>Hora Fin</th>
										<th>Cupos Disponibles</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $capacitaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacitacione): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($capacitacione->id); ?></td>
                                            
											<td><?php echo e($capacitacione->nombre); ?></td>
											<td><?php echo e($capacitacione->descripcion); ?></td>
											<td><?php echo e($capacitacione->fecha_inicio); ?></td>
											<td><?php echo e($capacitacione->fecha_fin); ?></td>
											<td><?php echo e($capacitacione->hora_inicio); ?></td>
											<td><?php echo e($capacitacione->hora_fin); ?></td>
											<td><?php echo e($capacitacione->cupos_disponibles); ?></td>
										

                                            <td>
                                                <form action="<?php echo e(route('capacitaciones.destroy',$capacitacione->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('capacitaciones.show',$capacitacione->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Show')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('capacitaciones.edit',$capacitacione->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\capacitaciones\resources\views/capacitaciones/index.blade.php ENDPATH**/ ?>