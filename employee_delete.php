<?php
include 'connect.php';
$sid= $_GET['sid']??'';

$sql="delete from nhanvien where Manv = ?";
$stm=$conn->prepare($sql);
$stm->execute([$sid]);


?>
<script>
    alert('Đã xóa thành công');
    window.location='employee.php';
</script>
