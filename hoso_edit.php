<?php
include 'connect.php';
$id= $_GET['id']??'';

$edit_sql="select * from hoso where MaNV=?";
$stm=$conn->prepare($edit_sql);
$stm->execute([$id]);
$profile = $stm->fetch();


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
<h2>Form Sửa Hồ Sơ</h2>
<form action="hoso_update.php" method="post">
    <input type="hidden" name="id" id="" value="<?php echo $id?>"> <br>
    <div class="form-group">
        <label>Mã nhân viên: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="manv" id="" value="<?php echo $profile['MaNV'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Chứng chỉ ngoại ngữ: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="ccnn" id="" value="<?php echo $profile['ChungChiTA'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Thời gian làm việc: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="tglv" id="" value="<?php echo $profile['ThoiGianLamViec'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Tình trạng: </label>
        <div class="col-sm-12">
            <select class="form-control" name="tinhtrang" id="">
                <option value="Đang làm việc">Đang làm việc</option>
                <option value="Đã nghỉ việc">Đã nghỉ việc</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 offset-sm-5">
            <input type="submit" class="btn btn-primary" value="Cập nhật thông tin">
        </div>
    </div>
    
</form>
</body>
</html>
