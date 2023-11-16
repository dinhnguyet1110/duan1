<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bảng danh sách Lịch chiếu</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản trị</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lịch chiếu</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="table">
                            <tr>
                                <th></th>
                                <th>ID lịch chiếu</th>
                                <th>Ngày chiếu</th>
                                <th>ID phim</th>
                                <th>ID khung giờ</th>
                                <th>Thao tác</th>
                            </tr>                                                             
                            <?php
                                foreach($listlichchieu as $lichchieu){
                                    extract($lichchieu);   
                                    $sualich="index.php?act=sualich&id=".$id;                              
                                    $xoalich="index.php?act=xoalich&id=".$id;
                                    echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$ngay_chieu.'</td>
                                        <td>'.$idphim.'</td>
                                        <td>'.$idgio.'</td>
                                        <td><a href="'.$sualich.'"><input type="button" class="btn btn-cyan btn-sm" value="Sửa" ></a>
                                        <a onclick="'."return confirm('Bạn có muốn xóa?')".'" href="'.$xoalich.'"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
                                    </tr>
                                    ';
                                }
                            ?>
                            </table>
                        </div>
                        <div class="card-body">
                            <a href="index.php?act=add_lichchieu"><input type="button"class="btn btn-success" value="Nhập thêm"></a>
                            
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
