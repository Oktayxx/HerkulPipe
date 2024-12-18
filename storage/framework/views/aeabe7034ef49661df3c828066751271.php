<?php $__env->startSection('auth_header', __('adminlte::adminlte.verify_message')); ?>

<?php $__env->startSection('auth_body'); ?>

    <?php if(session('resent')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(__('adminlte::adminlte.verify_email_sent')); ?>

        </div>
    <?php endif; ?>

    <?php echo e(__('adminlte::adminlte.verify_check_your_email')); ?>

    <?php echo e(__('adminlte::adminlte.verify_if_not_recieved')); ?>,

    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
            <?php echo e(__('adminlte::adminlte.verify_request_another')); ?>

        </button>.
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::auth.auth-page', ['auth_type' => 'login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\GitHub\HerkulPipe\vendor\jeroennoten\laravel-adminlte\resources\views\auth\verify.blade.php ENDPATH**/ ?>