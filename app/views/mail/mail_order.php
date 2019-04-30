<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Кол-во</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <tr style="background: #f9f9f9;">
                <th style="padding: 8px; border: 1px solid #ddd;"><?= $item['title']; ?></th>
                <th style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty']; ?></th>
                <th style="padding: 8px; border: 1px solid #ddd;"><?= $item['price']; ?></th>
                <th style="padding: 8px; border: 1px solid #ddd;"><?= $item['price'] * $item['qty']; ?></th>
            </tr>
        <?php endforeach; ?>
        <tr style="background: #f9f9f9;">
            <th colspan="3" style="padding: 8px; border: 1px solid #ddd;">Итого:</th>
            <th style="padding: 8px; border: 1px solid #ddd;"><?= $_SESSION['cart.qty']; ?></th>
        </tr>
        <tr style="background: #f9f9f9;">
            <th colspan="3" style="padding: 8px; border: 1px solid #ddd;">На сумму:</th>
            <th style="padding: 8px; border: 1px solid #ddd;"><?= $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum']
                . "{$_SESSION['cart.currency']['symbol_right']}"; ?></th>
        </tr>
        </tbody>
    </table>
</body>
</html>
