<?php
include 'connect.php';
$sid= $_GET['sid']??'';

$edit_sql="select * from nhanvien,luong where Manv=? and nhanvien.BacLuong=luong.BacLuong";
$stm=$conn->prepare($edit_sql);
$stm->execute([$sid]);
$employee = $stm->fetch();

$result="";
$SNL = isset($_POST['SNL']) ? $_POST['SNL'] : null;
$TPC = isset($_POST['TPC']) ? $_POST['TPC'] : null;
$LCB=$_POST['LCB']??'';
$HSL=$_POST['HSL']??'';
$PC=$_POST['PC']??'';
// Kiểm tra nếu có giá trị từ form, sử dụng giá trị từ form
if ($SNL !== null && $TPC !== null) {
    // Xử lý tính toán khi có cả giá trị từ CSDL và từ form
    $result = ((float)$LCB*(float)$HSL*(int)$SNL)+((float)$PC*(float)$TPC); 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/bootstrap.min.css">
</head>
<style>
    h2{
        text-align:center;
    }

</style>
<body>
<h2>Tính Lương Nhân Viên</h2>
<form action="tinhluong.php" method="post">
    <input type="hidden" name="sid" id="" value="<?php echo $sid?>"> <br>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Mã nhân viên:</label>
            <input type="text" class="form-control col-sm-10" name="manv" id="" value="<?php echo $employee['Manv'] ?>">
        </div>
        <div class="col-sm-6">
            <label>Họ và tên:</label>
            <input type="text" class="form-control" name="hoten" id="" value="<?php echo $employee['Hoten'] ?>">
        </div>
    </div>  
    <div class="form-group row">
        <div class="col-sm-4">
            <label>Lương cơ bản: </label>
            <input type="text" class="form-control" name="LCB" id="" value="<?php echo $employee['LCB'] ?>">
        </div>
        <div class="col-sm-4">
            <label>Hệ số lương:</label>
            <input type="text" class="form-control" name="HSL" id="" value="<?php echo $employee['HeSoLuong'] ?>">
        </div>
        <div class="col-sm-4">
            <label>Số ngày làm</label>
            <input type="text" class="form-control" name="SNL">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Hệ số phụ cấp: </label>
            <input type="text" class="form-control col-sm-10" name="PC" id="" value="<?php echo $employee['HeSoPhuCap'] ?>">
        </div>
        <div class="col-sm-6">
            <label>Tiền phụ cấp</label>
            <input type="text" class="form-control" name="TPC" id="">
        </div>
    </div>
   
    <div class="form-group">
        <label>Thành tiền </label>
        <input type="text" class="form-control" id="" value="<?php echo htmlspecialchars($result)?>" readonly>
    </div>
    <div class="form-group">
        <div class="col-sm-12 offset-sm-5">
            <input type="submit" class="btn btn-primary" value="Tính lương">
        </div>
    </div>
   
</form>
<p>Result: <?php echo isset($result) ? $result : 'N/A'; ?></p>
</body>
</html>

