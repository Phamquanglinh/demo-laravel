<?php
$host = 'localhost';
$user ='root';
$password ='';
$database= 'cart-test';

if($conn=mysqli_connect($host,$user,$password,$database)){

}else{
    echo $conn->error;
}
