

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Developer Profile</h2>

    <?php if($user): ?>
        <article class="card">
            <p><strong>Username:</strong> jvmbeasca</p>
            <p><strong>Full name:</strong> John Vincent Beasca</p>
            <p><strong>Email:</strong> jmbeasca@fit.edu.ph</p>
        </article>
    <?php else: ?>
        <p>No user profile found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\jovin\tasks-for-today-laravel\resources\views/profile.blade.php ENDPATH**/ ?>