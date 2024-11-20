<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
<h1>Contact Us</h1>
<form action="<?php echo e(route('contact.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="company">Company:</label>
    <input type="text" name="company"><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" required><br>

    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
<?php /**PATH C:\GitHub\HerkulPipe\resources\views\contact.blade.php ENDPATH**/ ?>