<?php
include 'connect.php';
$id= $_GET['id']??'';

$edit_sql="select * from nhanvien,phongban,chucvu,trinhdohv where Manv=? and nhanvien.MaPH=phongban.MaPH and
nhanvien.MaCV=chucvu.MaCV and nhanvien.Matdhv=trinhdohv.Matdhv";
$stm=$conn->prepare($edit_sql);
$stm->execute([$id]);
$employee = $stm->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/bootstrap.min.css">
</head>
<style>
    img {
        width: 400px;
        height: 450px;
        padding-top: 0px;
    }

    h3 {
        padding-top: 0px;
    }
    td {
        padding-right: 20px;
        padding-top: 0px;
    }
    h2{
        text-align: center;
    }
    col-9{
        padding-left:20px;
    }
</style>
<body>
<h2>Chi tiết nhân viên</h2>
<row justify-content-center align-items-center>
    <col-12>
        <table>
            <tr>
                <td>
                    <col-3>
                        <img src="/img/<?php echo $employee['Image'] ?>" />
                    </col-3>
                </td>
                <td>
                    <col-9>
                        <h3><b>Tên nhân viên: <?php echo $employee['Hoten'] ?></b><br /></h3>
                        <h5>Ngày sinh: <?php echo $employee['NgaySinh']; ?><br /></h5>
                        <h5>Quê quán: <?php echo $employee['QueQuan']; ?><br /></h5>
                        <h5>Giới tính: <?php echo $employee['GioiTinh']; ?><br /></h5>
                        <h5>Dân tộc: <?php echo $employee['DanToc']; ?><br /></h5>
                        <h5>Liên hệ: <?php echo $employee['SDT']; ?><br /></h5>
                        <h5>Phòng ban: <?php echo $employee['TenPH']; ?><br /></h5>
                        <h5>Chức vụ: <?php echo $employee['TenCV']; ?><br /></h5>
                        <h5>Trình độ học vấn: <?php echo $employee['TenTD']; ?><br /></h5>
                    </col-9>
                </td>
            </tr>
        </table>
    </col-12>
</row>
</body>
</html>
