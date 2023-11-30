        <style>
        .mt{
            margin-top:50px;
        }
    </style>
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title mt">Lịch sử đặt vé </h5>
                        <div class="card">
                            <table class="table">
                            <tr>
                                
                                <th>Mã hóa đơn</th>
                                <th>Tên khách hàng</th>
                                <th>Tên phim</th>
                                <th>Ngày chiếu</th>
                                <th>Giờ chiếu</th>
                                <th>Ngày đặt</th>
                                <th>Phòng</th>
                                <th>Vị trí ghế</th>
                                <th>Combo bỏng nước</th>   
                                <th>Giá combo bỏng nước</th>                            
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                            <?php foreach($loadbill as $bill) ?>
                            <?php extract($bill) ?>
                            <tr>
                                
                                
                                <td><?=$id?></td>
                                <td><?=$user?></td>
                                <td><?=$ten_phim?></td>
                                <td><?=$ngaychieu?></td>
                                <td><?=$gio?></td>
                                <td><?=$ngay_dat?></td>
                                <td><?=$phong?></td>
                                <td><?=$ghe?></td>
                                <td><?=$combo?></td>
                                <td><?=$giacombo?></td>
                                <td><?=$tongtien?></td>
                                <td><?=$thanhtoan?></td>
                            </tr>
                                                      
                            </table>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>