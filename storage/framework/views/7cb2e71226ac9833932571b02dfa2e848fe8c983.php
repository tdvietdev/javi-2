<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.roles.title'); ?></h3>
    
    <?php echo Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('name', 'Name*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('permission', 'Permissions', ['class' => 'control-label']); ?>

                    <?php echo Form::select('permission[]', $permissions, old('permission') ? old('permission') : $role->permissions()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('permission')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('permission')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>