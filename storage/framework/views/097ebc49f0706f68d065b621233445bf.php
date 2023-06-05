



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome User </title>
</head>
<body>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li> <h1> <?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?> </h1> </li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
</body>
</html><?php /**PATH C:\Users\Mark\webapp\resources\views/students/index.blade.php ENDPATH**/ ?>