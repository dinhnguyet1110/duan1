<?php
    if(is_array($lich)){
        extract($lich);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Cập nhật lịch chiếu</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">LỊCH CHIẾU</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="index.php?act=update_lichchieu" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="hue-demo">ID lịch chiếu</label>
                                        <input type="text" id="tengio" class="form-control demo" name="ngaychieu"  value="<?=$id?>">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 m-t-15">Phim</label><br>
                                        <div class="col-md-12">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="idphim">                                       
                                                <?php
                                                    foreach($listphim as $phim){                                 
                                                        if($idphim==$phim['id']){
                                                        echo '<option value="'.$phim['id'].'" selected>'.$phim['name'].'</option>';
                                                        }else{
                                                            echo '<option value="'.$phim['id'].'">'.$phim['name'].'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="hue-demo">Ngày chiếu</label>
                                        <input type="text" id="tengio" class="form-control demo" name="ngaychieu"  value="<?=$ngay_chieu?>">
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 m-t-15">Giờ Chiếu</label><br>
                                        <div class="col-md-12">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="idgio">                                       
                                                <?php
                                                    foreach($listkhunggio as $gio){                                 
                                                        if($idgio==$gio['id']){
                                                        echo '<option value="'.$gio['id'].'" selected>'.$gio['gio_bat_dau'].'</option>';
                                                        }else{
                                                            echo '<option value="'.$gio['id'].'">'.$gio['gio_bat_dau'].'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            
                            <a href="index.php?act=list_lichchieu"><input type="button" class="btn btn-info" value="Danh sách" name="list_lichchieu"></a> 
                            <?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                            ?>             
                        </form>
                    </div>
                </div>

            </div>
