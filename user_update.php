<?php
include 'connect.php';
$email=$_POST['email']??'';
if($email==''){
    header('location:user.php'); exit;
}
$pass=$_POST['pass']??'';
$name=$_POST['name']??'';
$id=$_POST['sid']??'';

$sql="update users set Email=?,Pass=?,Name=? where Email=?";

$arrParam=[$email,$pass,$name,$id];
$stm=$conn->prepare($sql);
$stm->execute($arrParam);
$n=$stm->rowCount();
?>
<script>
    alert('Đã sửa <?php echo $n ?> dòng');
    window.location='user.php';
</script>