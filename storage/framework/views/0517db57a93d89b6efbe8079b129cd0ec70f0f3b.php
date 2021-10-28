<h1><br>Update Records</br></h1>

<form action="/edit" method="POST">
<?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($data['id']); ?>">
    Name:<input type="text" name="name" value="<?php echo e($data['name']); ?>"><br><br>
    Email:<input type="text" name="email" value="<?php echo e($data['email']); ?>"><br><br>
    Phone:<input type="text" name="phone" value="<?php echo e($data['phone']); ?>"><br><br>
    Subject:<input type="text" name="subject" value="<?php echo e($data['subject']); ?>"><br><br>
    Message:<input type="text" name="message" value="<?php echo e($data['message']); ?>"><br><br><br><br>
    <button type="submit">Update</button>
</form><?php /**PATH C:\Laravel\form\resources\views/edit.blade.php ENDPATH**/ ?>