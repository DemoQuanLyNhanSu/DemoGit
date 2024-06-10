<?php
include 'connect.php';
$manv=$_POST['manv']??'';
if($manv==''){
    header('location:employee.php'); exit;
}
$hoten=$_POST['hoten']??'';
$ngaysinh=$_POST['ngay']??'';
$quequan=$_POST['quequan']??'';
$gioitinh=$_POST['gioitinh']??'';
$dantoc=$_POST['dantoc']??'';
$dt=$_POST['đt']??'';
$img=$_FILES['img']['name'];
$maph=$_POST['MaPH']??'';
$macv=$_POST['MaCV']??'';
$matdhv=$_POST['Matdhv']??'';
$id=$_POST['sid']??'';

$sql="update nhanvien set Manv=?,Hoten=?,NgaySinh=?,QueQuan=?,GioiTinh=?,DanToc=?,SDT=?,Image=?,MaPH=?,MaCV=?,Matdhv=?
where Manv=?";

$arrParam=[$manv,$hoten,$ngaysinh,$quequan,$gioitinh,$dantoc,$dt,$img,$maph,$macv,$matdhv,$id];
$stm=$conn->prepare($sql);
$stm->execute($arrParam);
$n=$stm->rowCount();
move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");

$sql2 = "update hoso set MaNV=?,MaTDHV=?,MaCV=? where MaNV=?";
$arrParamhs=[$manv,$matdhv,$macv,$id];
$stmt2 = $conn->prepare($sql2);
$stmt2->execute($arrParamhs);

?>
<script>
    alert('Đã sửa <?php echo $n ?> dòng');
    window.location='employee.php';
</script>