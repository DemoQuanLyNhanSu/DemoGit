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
$luong=$_POST['luong']??'';

$sql="insert into nhanvien(Manv,Hoten,NgaySinh,QueQuan,GioiTinh,DanToc,SDT,Image,MaPH,MaCV,Matdhv,BacLuong)
values(?,?,?,?,?,?,?,?,?,?,?,?)";

$arrParam=[$manv,$hoten,$ngaysinh,$quequan,$gioitinh,$dantoc,$dt,$img,$maph,$macv,$matdhv,$luong];
$stm=$conn->prepare($sql);
$stm->execute($arrParam);
$n=$stm->rowCount();
move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");

$sql2 = "insert into hoso(MaNV,MaTDHV,MaCV) values(?,?,?)";
$arrParamhs=[$manv,$matdhv,$macv];
$stmt2 = $conn->prepare($sql2);
$stmt2->execute($arrParamhs);
?>
<script>
    alert('Đã thêm <?php echo $n ?> dong');
    window.location='employee.php';
</script>