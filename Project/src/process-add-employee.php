<?php
    
    if(isset($_POST['tenduan'])){
        $tenduan = $_POST['tenduan'];
    }

    $namthucchien = $_POST['namthuchien'];
    $linhvuc = $_POST['linhvuc'];
    $nhiemvu = $_POST['nhiemvu'];
    $coquanthuchien = $_POST['coquanthuchien'];
    

    
    $conn = mysqli_connect('localhost','root','','htql_dltv');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO duan ( tenduan, namthuchien, linhvuc, nhiemvu, coquanthuchien) VALUES ('$tenduan','$namthucchien','$linhvu','$nhiemvu',' $coquanthuchien')";
    
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); 
    }else{
        header("location: admin.php");
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>