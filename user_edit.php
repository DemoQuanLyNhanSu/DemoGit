<?php
include 'connect.php';
$sid= $_GET['sid']??'';

$edit_sql="select * from users where Email=?";
$stm=$conn->prepare($edit_sql);
$stm->execute([$sid]);
$user = $stm->fetch();
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
<h2>Form Sửa Thông Tin Người Dùng</h2> 
<form action="user_update.php" method="post">
    <input type="hidden" name="sid" id="" value="<?php echo $sid?>"> <br>
    <div class="form-group">
        <label>Email: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="email" id="" value="<?php echo $user['Email'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Password: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="pass" id="" value="<?php echo $user['Pass'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label>Name: </label>
        <div class="col-sm-12">   
            <input type="text" class="form-control" name="name" id="" value="<?php echo $user['Name'] ?>">
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
