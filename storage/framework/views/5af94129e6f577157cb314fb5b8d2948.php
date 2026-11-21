

<?php $__env->startSection('title', 'Task List'); ?>

<?php $__env->startSection('content'); ?>
    <h2>All Tasks</h2>

    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="card">
            <h3><?php echo e($task->title); ?></h3>
            <p>Date: <?php echo e($task->task_date->format('F j, Y')); ?></p>
            <p>Status: <?php echo e(ucfirst($task->status)); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No tasks found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\jovin\tasks-for-today-laravel\resources\views/task-list.blade.php ENDPATH**/ ?>