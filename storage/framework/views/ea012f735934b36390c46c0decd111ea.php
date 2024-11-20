<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>
</head>
<body>
<h1>Контактная форма</h1>

<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>

<form action="/contact" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>

    <label for="company">Компания:</label>
    <input type="text" id="company" name="company" required>

    <label for="phone">Телефон:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="product_id">ID продукта:</label>
    <input type="number" id="product_id" name="product_id" required>

    <button type="submit">Отправить</button>
</form>
</body>
</html>
<?php /**PATH C:\GitHub\HerkulPipe\resources\views/welcome.blade.php ENDPATH**/ ?>