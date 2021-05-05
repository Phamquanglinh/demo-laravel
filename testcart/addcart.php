<?php
require_once 'database.php';
session_start();
$_SESSION['cart'][$_POST['id']] = $_POST['count'];

foreach ($_SESSION['cart'] as $key => $value){
    $qr =  "Select * from cart where id='".$key."'";
    $result = mysqli_query($conn,$qr);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo '<div class="wrap">';
    echo '<p>'.$row['name'].'</p>';
    echo '<img src="'.$row['img'].'">' ;
    echo '<p>Quantity: '.$value.'</p>';
    echo '</div>';

}
?>

<style>
   .wrap{
       border: 1px solid;
   }
</style>
