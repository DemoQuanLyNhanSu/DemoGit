<?php
include 'connect.php';
    

    if(!isset($_SESSION)) session_start();
    $u = isset($_POST['u'])?trim($_POST['u']):'';
    $p = isset($_POST['p'])?$_POST['p']:'';

    $sql = "SELECT * FROM admin WHERE Username=? AND Password=?";
    $arrParam=[$u,$p];
    $stm=$conn->prepare($sql);
    $stm->execute($arrParam);

    $sql1 = "SELECT * FROM users WHERE Name=? AND Pass=?";
    $stmus=$conn->prepare($sql1);
    $stmus->execute($arrParam);


    if($stm->rowCount() > 0)
    {
        $_SESSION['dangnhap']=$u;
        header('location:admin.php');
        exit;
    }
    if($stmus->rowCount()>0){
        $_SESSION['dangnhap']=$u;
        header('location:employee.php');
        exit;
    }
    else{
        ?>
        <?php
        <script></script>
        alert('Ten đang nhap hoac mat khau khong dung');
        header('location:index.php');
    }
    
    
    
    ?>
    
    <script>
    alert('jo');
    window.location='user.php';
</script>  
