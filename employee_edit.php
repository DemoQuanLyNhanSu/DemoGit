<?php
include 'connect.php';
$sid= $_GET['sid']??'';

$edit_sql="select * from nhanvien where Manv=?";
$stm=$conn->prepare($edit_sql);
$stm->execute([$sid]);
$employee = $stm->fetch();

$sql="select * from phongban";
$stm=$conn->query($sql);
$pb=$stm->fetchAll(PDO::FETCH_OBJ);

$sql="select * from chucvu";
$stm=$conn->query($sql);
$cv=$stm->fetchAll(PDO::FETCH_OBJ);

$sql="select * from trinhdohv";
$stm=$conn->query($sql);
$tdhv=$stm->fetchAll(PDO::FETCH_OBJ);


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
<h2>Form Sửa Nhân Viên</h2>
<form action="employee_update.php" method="post" enctype="multipart/form-data">
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
        <div class="col-sm-6">
            <label class="col-sm-2">Ngày sinh:</label>
            <input type="date" class="form-control col-sm-10" name="ngay" id="" value="<?php echo $employee['NgaySinh'] ?>">
        </div>
        <div class="col-sm-6">
            <label>Quê quán:</label>
            <input type="text" class="form-control" name="quequan" id="" value="<?php echo $employee['QueQuan'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Giới tính:</label>
            <input type="text" class="form-control col-sm-10" name="gioitinh" id="" value="<?php echo $employee['GioiTinh'] ?>">
        </div>
        <div class="col-sm-6">
            <label>Dân tộc:</label>
            <input type="text" class="form-control" name="dantoc" id="" value="<?php echo $employee['DanToc'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">SDT:</label>
            <input type="text" class="form-control col-sm-10" name="đt" id="" value="<?php echo $employee['SDT'] ?>">
        </div>
        <div class="col-sm-6">
            <label>Hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="" value="<?php echo $employee['Image'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Phòng ban: </label>
        <div class="col-sm-12">
            <select class="form-control" name="MaPH" id="" value="<?php echo $pb['MaPH'] ?>">
            <?php
                foreach($pb as $item){
                ?>
                    <option value="<?php echo $item->MaPH ?>"> <?php echo $item->TenPH ?></option>
                <?php
                }
            ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label>Chức vụ: </label>
        <div class="col-sm-12">
                
            <select class="form-control"name="MaCV" id="" value="<?php echo $cv['MaCV'] ?>">
            <?php
                foreach($cv as $item){
                ?>
                    <option value="<?php echo $item->MaCV ?>"> <?php echo $item->TenCV ?></option>
                <?php
                }
            ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label>Trình độ học vấn: </label>
        <div class="col-sm-12">   
            <select class="form-control" name="Matdhv" id="" value="<?php echo $tdhv['Matdhv'] ?>">
                <?php
                    foreach($tdhv as $item){
                    ?>
                        <option value="<?php echo $item->Matdhv ?>"> <?php echo $item->TenTD ?></option>
                    <?php
                    }
                ?>
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
