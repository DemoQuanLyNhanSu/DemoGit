<?php
include 'connect.php';
$sql="select * from phongban";
$stm=$conn->query($sql);
$pb=$stm->fetchAll(PDO::FETCH_OBJ);

$sql="select * from chucvu";
$stm=$conn->query($sql);
$cv=$stm->fetchAll(PDO::FETCH_OBJ);

$sql="select * from trinhdohv";
$stm=$conn->query($sql);
$tdhv=$stm->fetchAll(PDO::FETCH_OBJ);

$sql="select * from luong";
$stm=$conn->query($sql);
$luong=$stm->fetchAll(PDO::FETCH_OBJ);
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
<h2>Thêm nhân viên</h2>
<form action="employee_store.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Mã nhân viên:</label>
            <input type="text" class="form-control col-sm-10" name="manv" id="" placeholder="Nhập mã nhân viên">
        </div>
        <div class="col-sm-6">
            <label>Họ và tên:</label>
            <input type="text" class="form-control" name="hoten" id="" placeholder="Nhập họ và tên nhân viên">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Ngày sinh:</label>
            <input type="date" class="form-control col-sm-10" name="ngay" id="" placeholder="Chọn ngày sinh">
        </div>
        <div class="col-sm-6">
            <label>Quê quán:</label>
            <input type="text" class="form-control" name="quequan" id="" placeholder="Nhập quê quán">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">Giới tính:</label>
            <select class="form-control col-sm-10" name="gioitinh" id="" placeholder="Chọn giới tính">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label>Dân tộc:</label>
            <select class="form-control" name="dantoc" id="" placeholder="Chọn dân tộc">
                <option value="Kinh">Kinh</option>
                <option value="Dao">Dao</option>
                <option value="Mường">Mường</option>
                <option value="H'mông">H'mông</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-sm-2">SDT:</label>
            <input type="text" class="form-control col-sm-10" name="đt" id="" placeholder="Nhập số điện thoại">
        </div>
        <div class="col-sm-6">
            <label>Hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="" >
        </div>
    </div>
    <div class="form-group">
        <label>Phòng ban: </label>
        <div class="col-sm-12">
            <select class="form-control" name="MaPH" id="" placeholder="Chọn phòng ban">
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
                
            <select class="form-control"name="MaCV" id="" placeholder="Chọn chức vụ">
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
            <select class="form-control" name="Matdhv" id="" placeholder="Chọn trình độ học vấn">
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
        <label>Bậc lương: </label>
        <div class="col-sm-12">   
            <select class="form-control" name="luong" id="" placeholder="Chọn bậc lương">
                <?php
                    foreach($luong as $item){
                    ?>
                        <option value="<?php echo $item->BacLuong ?>"> <?php echo $item->BacLuong ?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 offset-sm-5">
            <input type="submit" class="btn btn-primary" value="Thêm nhân viên">
        </div>
    </div>
</form>
</body>
</html>
