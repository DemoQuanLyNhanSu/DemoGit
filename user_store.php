<?php
include 'connect.php';
$email=$_POST['email']??'';
if($email==''){
    header('location:user.php'); exit;
}
$pass=$_POST['pass']??'';
$name=$_POST['name']??'';

$sql="insert into users values(?,?,?)";

$arrParam=[$email,$pass,$name];
$stm=$conn->prepare($sql);
$stm->execute($arrParam);
$n=$stm->rowCount();
?>
<script>
    alert('Đã thêm <?php echo $n ?> dong');
    window.location='user.php';
</script>