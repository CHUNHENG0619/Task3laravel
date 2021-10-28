<html>
    <body>
    <head>
        <h1><br>View Records</br></h1>
        <style>
            h1{
                margin-left:850px;
            }
            body{
                background-color:lightgreen;
            }
            table{
                border: 5px solid;
                width:100%;
                text-align:center;
                border-collapse:collapse;
                margin:100px 100px 100px 100px;
            }
        </style>
    </head>    

    </body>
    <table border='1'>
        <tr>
        <td>Id</td>    
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Subject</td>
        <td>Message</td>
        <td>Operation</td>
        </tr>
        <?php $__currentLoopData = $dashboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th><?php echo e($data->id); ?></th>
            <th><?php echo e($data->name); ?></th>
            <th><?php echo e($data->email); ?></th>
            <th><?php echo e($data->phone); ?></th>
            <th><?php echo e($data->subject); ?></th>
            <th><?php echo e($data->message); ?></th>
            <th><a href="edit/<?php echo e($data->id); ?>">Edit</a>
                <a href="delete/<?php echo e($data->id); ?>">Delete</a>
            </th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</html><?php /**PATH C:\Laravel\form\resources\views/dashboard.blade.php ENDPATH**/ ?>