<?php
    if(is_array($phim)){
        extract($phim);
    }
    $hinhpath="../upload/".$avatar;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
        }else{
            $hinh ="Không có hình";
        }
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <form action="index.php?act=update_phim" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                        <div class="form-group row">
                                <label class="col-md-3 m-t-15">Thể loại phim</label><br>
                                <div class="col-md-9">
                                <select name="idtl">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listtheloai as $theloai){
                                    
                                    if($idtl==$theloai['id']){
                                    echo '<option value="'.$theloai['id'].'" selected>'.$theloai['name'].'</option>';
                                    }else{
                                        echo '<option value="'.$theloai['id'].'">'.$theloai['name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                                </div>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="tenphim">Tên Phim</label>
                                <input type="text" id="tenphim" class="form-control demo" name="tenphim"value="<?=$name?>" required>
                            </div>
                            <div class="form-group">
                                <label for="motaphim">Mô Tả</label>
                                <textarea id="motaphim" class="form-control demo" name="motaphim" required><?=$mota?></textarea>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="thoiluong">Thời lượng</label>
                                <input type="text" id="thoiuong" class="form-control demo" name="thoiluong" value="<?=$thoi_luong?>" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="hinh">Hình</label>
                                <input type="file" name="hinh">
                            </div>
                            <div class="form-group m-t-20">
                                <label for="tenphim">Ngày khởi chiếu </label>
                                <input type="text" id="ngaykchieu" class="form-control demo" name="ngaykchieu" value="<?=$ngaychieu?>" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="trailer">Trailer</label>
                                <input type="text" id="trailer" class="form-control demo" name="trailer" value="<?=$traller?>" required>
                            </div>
                            <div class="form-group m-t-20">
                                <label for="trangthai">Trạng thái</label>
                                <input type="text" id="trangthai" class="form-control demo" name="trangthai" value="<?=$status?>" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="btn btn-success" name="capnhap" value="Cập nhập">
                    <input type="reset" class="btn btn-primary" name="nhaplai" value="Nhập lại">

                    <a href="index.php?act=list_phim">
                        <input type="button" class="btn btn-info" value="Danh sách" name="list_phim">
                    </a>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>