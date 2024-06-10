<?php
include 'connect.php';
$manv=$_POST['manv']??'';
if($manv==''){
    header('location:hoso.php'); exit;
}
$ccnn=$_POST['ccnn']??'';
$tglv=$_POST['tglv']??'';
$tinhtrang=$_POST['tinhtrang']??'';
$id=$_POST['id']??'';

$sql="update hoso set MaNV=?,ChungChiTA=?,ThoiGianLamViec=?,TinhTrang=? where MaNV=?";

$arrParam=[$manv,$ccnn,$tglv,$tinhtrang,$id];
$stm=$conn->prepare($sql);
$stm->execute($arrParam);
$n=$stm->rowCount();
?>
<script>
    alert('Đã sửa <?php echo $n ?> dòng');
    window.location='hoso.php';
</script>