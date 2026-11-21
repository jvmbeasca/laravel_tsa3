<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> | Tasks for Today</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        header {
            background: #263b5a;
            color: white;
            padding: 18px 8%;
        }

        header h1 {
            margin: 0 0 12px;
        }

        nav a {
            color: white;
            margin-right: 18px;
            text-decoration: none;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 18px;
        }

        .card {
            background: white;
            padding: 18px;
            margin: 12px 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px #00000012;
        }

        .date, .status {
            color: #566;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tasks for Today</h1>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Welcome</a>
            <a href="<?php echo e(route('tasks.index')); ?>">Task List</a>
            <a href="<?php echo e(route('profile')); ?>">Profile</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\Users\jovin\tasks-for-today-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>