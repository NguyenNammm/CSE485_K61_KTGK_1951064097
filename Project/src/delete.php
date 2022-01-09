<?php
    
    $maduan = $_GET['id'];

  
    $conn = mysqli_connect('localhost','root','','htql_dltv');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "DELETE FROM duan WHERE maduan = '$maduan'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php");
    }else{
        header("location: error.php");
    }

    
    mysqli_close($conn);
?>