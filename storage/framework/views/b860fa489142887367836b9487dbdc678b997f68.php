<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>

        <form action="" method="post" action="<?php echo e(route('contact.store')); ?>">

    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control <?php echo e($errors->has('name') ? 'error' : ''); ?>" name="name" id="name">

        <!-- Error -->
        <?php if($errors->has('name')): ?>
        <div class="error">
            <?php echo e($errors->first('name')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control <?php echo e($errors->has('email') ? 'error' : ''); ?>" name="email" id="email">

        <?php if($errors->has('email')): ?>
        <div class="error">
            <?php echo e($errors->first('email')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control <?php echo e($errors->has('phone') ? 'error' : ''); ?>" name="phone" id="phone">

        <?php if($errors->has('phone')): ?>
        <div class="error">
            <?php echo e($errors->first('phone')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control <?php echo e($errors->has('subject') ? 'error' : ''); ?>" name="subject"
            id="subject">

        <?php if($errors->has('subject')): ?>
        <div class="error">
            <?php echo e($errors->first('subject')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control <?php echo e($errors->has('message') ? 'error' : ''); ?>" name="message" id="message"
            rows="4"></textarea>

        <?php if($errors->has('message')): ?>
        <div class="error">
            <?php echo e($errors->first('message')); ?>

        </div>
        <?php endif; ?>
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
    </div>
</body>

</html><?php /**PATH C:\Laravel\form\resources\views/contact.blade.php ENDPATH**/ ?>