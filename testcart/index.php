<?php
require_once 'database.php';
$qr = 'select * from cart';
$product = mysqli_query($conn,$qr);
    while ($row = mysqli_fetch_array($product,MYSQLI_ASSOC)){
        echo '<div style="padding-bottom: 12px">';
        echo '<img src="'.$row['img'].'">';
        echo '<p>'.$row['name'].'</p>';
        echo '<p>'.$row['price'].'</p>';
        echo '<p>Quantity</p>';
        echo '<form action="addcart.php" method="post">';
        echo '<input id="'.$row['id'].'"type="number" name="count">';
        echo '<button name="id" value="'.$row['id'].'">Add cart</button>';
        echo '</form>';
        echo '</div>';

    }

?>

