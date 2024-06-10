<?php
include 'connect.php';
$sid= $_GET['sid']??'';

$sql="delete from users where Email = ?";
$stm=$conn->prepare($sql);
$stm->execute([$sid]);
?>
<script>
    alert('Đã xóa thành công');
    window.location='user.php';
</script>