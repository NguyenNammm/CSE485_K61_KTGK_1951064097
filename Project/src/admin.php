<?php
    
?>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Chương trình dự án KTTV BDKH</h5>
            <div>
                <a class="btn btn-primary" href="add.php">Thêm</a>
                <a class="btn btn-primary" href="delete.php">Xóa</a>
                <a class="btn btn-primary" href="update.php">Sửa</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã dự án</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Lĩnh vực</th>
                        <th scope="col">Nhiệm vụ</th>
                        <th scope="col">Cơ quan thực hiện</th>
                        <th scope="col">Tổng đầu tư</th>
                        <th scope="col">Người kí</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tập tin</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        
                        $conn = mysqli_connect('localhost','root','','htql_dltv');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                       
                        $sql = "SELECT maduan, tenduan, namthuchien, linhvuc, nhiemvu, coquanthuchien FROM duan";
                        $result = mysqli_query($conn,$sql);
                        
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['maduan']; ?></th>
                                    <td><?php echo $row['tenduan']; ?></td>
                                    <td><?php echo $row['namthuchien']; ?></td>
                                    <td><?php echo $row['linhvuc']; ?></td>
                                    <td><?php echo $row['nhiemvu']; ?></td>
                                    <td><?php echo $row['coquanthuchien']; ?></td>
                                    <td><a href="update_employee.php?id=<?php echo $row['ma_nhanvien']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_employee.php?id=<?php echo $row['ma_nhanvien']; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                    <?php
                            }
                        }
                        
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>

<?php
    
?>