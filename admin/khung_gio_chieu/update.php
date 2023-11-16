<?php
    if(is_array($kg)){
        extract($kg);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Cập nhật khung giờ</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khung giờ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="index.php?act=update_khunggio" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group m-t-20">
                                        <label for="hue-demo">Mã giờ</label>
                                        <input type="text" id="magio" class="form-control demo" name="magio" value="<?php if(isset($id)&&($id!="")) echo $id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="hue-demo">Tên giờ</label>
                                        <input type="text"  class="form-control demo" name="tengio" value="<?php if(isset($gio_bat_dau)&&($gio_bat_dau!="")) echo $gio_bat_dau; ?>">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            <a href="index.php?act=list_khunggio"><button type="" class="btn btn-info">Danh sách</button></a>
                        </form>
                    </div>
                </div>

            </div>
