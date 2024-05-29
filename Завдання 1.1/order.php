<!DOCTYPE html>
<html>
<head>
    <title>Підтвердження замовлення</title>
</head>
<body>
   <h2>Підтвердження замовлення</h2>
    <p>Ваше замовлення прийнято:</p>
    <?php 
    $furniture = $_POST['furniture'];
    $material = $_POST['material'];
    $quantity = $_POST['quantity'];

    echo "<p>Замовлено виріб: $furniture</p>";
    echo "<p>Матеріал: $material</p>";
    echo "<p>Кількість: $quantity</p>";
    ?>
</body>
</html>