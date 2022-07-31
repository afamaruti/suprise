<?php
session_start();
// if(isset($_POST['password']) and isset($_POST['pwd']) or !empty($_POST['npk']) or !empty($_POST['pwd'])){
if(isset($_POST['password'])){
    $pwd = $_POST['password'];
    if($pwd == 'cut'){
        $_SESSION['sukses'] = 'Halo Cut!';  
        echo "<script>document.location = 'masuk.php'; </script>";     
    }else if($pwd == 'hilda'){
        $_SESSION['sukses'] = 'Halo Hilda!';  
        echo "<script>document.location = 'masuk.php'; </script>";     
    }else if($pwd == 'ditta'){
        $_SESSION['sukses'] = 'Halo Ditta!';  
        echo "<script>document.location = 'masuk.php'; </script>";     
    }else if($pwd == 'dwi'){
        $_SESSION['sukses'] = 'Halo Dwi!';  
        echo "<script>document.location = 'masuk.php'; </script>";     
    }else{
        header("location:index.php");
    }
}else{
    header("Location: index.php");
}
?>