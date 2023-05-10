<?php $__env->startSection('template_title'); ?>
    Inscripcione
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('capacitaciones')); ?>

                            </span>

                         
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
                                        
                                        
										<th>nombre</th>
										<th>descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $inscripciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inscripcione): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
											<td><?php echo e($inscripcione->nombre); ?></td>
											<td><?php echo e($inscripcione->descripcion); ?></td>
                                             <?php if(is_null($inscripcione->capacitacion_id)): ?>
                                                 <td>
                                                       
                                               <form action="<?php echo e(route('saveinscripcion')); ?>" method="POST">
                                                 <input type="hidden" name='capacitacion_id' value=<?php echo e($inscripcione->idcapacitacion); ?>>
                                                    <?php echo csrf_field(); ?>
                                                 
                                                    <button type="submit" class="btn btn-info btn-sm">inscribir</button>
                                                </form>
                                            </td>
                                          <?php else: ?>
   <td>
                                           <form action="<?php echo e(route('deleteinscripcion')); ?>" method="POST" name="form2">
                                                 <input type="hidden" name='id' value=<?php echo e($inscripcione->id); ?>>
                                                    <?php echo csrf_field(); ?>
                                                 
                                                    <button type="submit" class="btn btn-danger btn-sm">eliminar inscripcion</button>
                                                </form>
                                            </td>
                                             <?php endif; ?>
                                            
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\capacitaciones\resources\views/inscripciones/index.blade.php ENDPATH**/ ?>