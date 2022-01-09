<?php
    
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm</h5>
       
        <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="tenduan">Tên dự án</label>
                <input type="text" class="form-control" id="tenduan" name="tenduan" placeholder="Nhập tên dự án">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="namthuchien">Năm thực hiện</label>
                <input type="text" class="form-control" id="namthuchien" name="namthuchien" placeholder="Nhập năm thực hiện">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="linhvuc">Lĩnh vực</label>
                <input type="text" class="form-control" id="linhvuc" name="linhvuc" placeholder="Nhập lĩnh vực">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="nhiemvu">Nhiệm vụ</label>
                <input type="text" class="form-control" id="nhiemvu" name="nhiemvu" placeholder="Nhập nhiệm vụ">
                
            </div>
            <div class="form-group">
                <label for="coquanthuchien">Cơ quan thực hiện</label>
                <input type="text6" class="form-control" id="coquanthuchien" name="coquanthuchien" placeholder="Nhập cơ quan thục hiện">
               
            </div>
            
                   
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

