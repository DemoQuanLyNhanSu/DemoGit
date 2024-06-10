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
<h2>Thêm người dùng</h2>
<form action="user_store.php" method="post"">
    <div class="form-group">    
        <div class="col-sm-12">
            <label>Mã nhân viên:</label>
            <input type="text" class="form-control" name="email" id="" placeholder="Nhập Email">
        </div>
    </div>
    <div class="form-group">    
        <div class="col-sm-12">
            <label>Password</label>
            <input type="text" class="form-control" name="pass" id="" placeholder="Nhập password">
        </div>
    </div>
    <div class="form-group">    
        <div class="col-sm-12">
            <label>Name: </label>
            <input type="text" class="form-control" name="name" id="" placeholder="Nhập name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 offset-sm-5">
            <input type="submit" class="btn btn-primary" value="Thêm user">
        </div>
    </div>
</form>
</body>
</html>
