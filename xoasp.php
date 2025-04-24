<?php




require'config.php';
if (isset($_GET['id'])){

$id = $_GET['id'];


    }
$sql="DELETE FROM products WHERE id='$id'; ";
$sql2="ALTER TABLE products AUTO_INCREMENT=1;";
if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql2)){
    echo "xoa thanh cong";
}
else{
    echo "xoa that bai " . mysqli_error($conn);
}
if($id ==true){
    header('Location : themsanpham.php');
}
?>
