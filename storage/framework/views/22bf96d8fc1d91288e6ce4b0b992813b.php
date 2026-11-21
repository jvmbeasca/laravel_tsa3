<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Today’s Tasks</h2>
    <p><?php echo e(today()->format('F j, Y')); ?></p>

    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="card">
            <h3><?php echo e($task->title); ?></h3>
            <p class="status">Status: <?php echo e(ucfirst($task->status)); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No tasks scheduled for today.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\jovin\tasks-for-today-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>