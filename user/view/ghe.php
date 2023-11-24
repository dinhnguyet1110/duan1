<?php
$tenServer = "localhost";
$tenDangNhap = "root";
$matKhau = "";
$tenCSDL = "duan11";

// Tạo kết nối
$conn = new mysqli($tenServer, $tenDangNhap, $matKhau, $tenCSDL);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy thông tin về ghế từ cơ sở dữ liệu
$truyVan = "SELECT * FROM ghe";
$ketQua = $conn->query($truyVan);

// Mảng lưu trữ trạng thái ghế và giá tiền
$trangThaiGhe = [];

// Kiểm tra nếu có kết quả
if ($ketQua->num_rows > 0) {
    while ($dong = $ketQua->fetch_assoc()) {
        $trangThaiGhe[$dong['ten_ghe']] = [
            'trang_thai' => $dong['trang_thai'],
            'gia' => $dong['gia']
        ];
    }
}

// Đóng kết nối
$conn->close();
$soDoGhe = [
    ['A1', 'A2', 'A3', 'A4', 'A5'],
    ['B1', 'B2', 'B3', 'B4', 'B5'],
    ['C1', 'C2', 'C3', 'C4', 'C5'],
    ['D1', 'D2', 'D3', 'D4', 'D5'],
    ['E1', 'E2', 'E3', 'E4', 'E5'],
    ['F1', 'F2', 'F3', 'F4', 'F5'],
    ['G1', 'G2', 'G3', 'G4', 'G5'],
    ['H1', 'H2', 'H3', 'H4', 'H5']
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sơ đồ Ghế</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        .seat-container {
            width: 60%;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 5px; /* Giảm khoảng cách giữa các ghế */
            padding: 10px 50px;
        }

        .seat {
            width: 50px; /* Giảm kích thước của ghế */
            height: 50px;
            border: 2px solid #ddd;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color:black;
            font-size: 0.8em; /* Giảm kích thước chữ */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .seat.occupied {
            background-color: #c0c0c0;
            cursor: not-allowed;
        }

        .seat.selected {
            background-color: #ff0000;
            color: #fff;
            border: 2px solid #ff0000;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 20px 50px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        #selected-seats {
        margin-top: 10px;
        font-size: 1.2em;
        color: #ff0000; /* Màu đỏ */
        }

        #total-price {
            margin-top: 10px;
            font-size: 1.3em;
            font-weight: bold;
            color: #ff0000; /* Màu đỏ */
        }    
    </style>

<body class="bg-one">
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="assets/images/banner/banner04.jpg">
        <div class="container bg-one">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h4 class="title" >Chọn ghế </h4>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container  bg-one" >
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>
                    </a>
                </div>
                <div class="item date-item">

                </div>
                <div class="item">
                   
                </div>
            </div>
        </div>
    </section>

    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container  bg-one">
            <div class="screen-area">
                <h4 class="screen">Màn hình</h4>
                <div class="screen-thumb">
                    <img src="assets/images/movie/screen-thumb.png" alt="movie">
                </div>
                <!-- <form action="index.php?act=datve" method="post"> -->
                    <div class="seat-container">
                        <?php
                            foreach ($soDoGhe as $row) {
                                foreach ($row as $tenGhe) {
                                    $trangThai = $trangThaiGhe[$tenGhe]['trang_thai'];
                                    $gia = $trangThaiGhe[$tenGhe]['gia'];
                                    $seatClass = ($trangThai == 'trong') ? 'seat' : 'seat occupied';
                                    echo '<div class="' . $seatClass . '" data-seat="' . $tenGhe . '" data-price="' . $gia . '">' . $tenGhe . '</div>';
                                }
                            }
                        ?>
                    </div>
                    
                    <br>
            <div class="movie-facility padding-bottom padding-top">
                <form action="" method="post">
                    <div class="container col-lg-6 mt-50">               
                        <div class="col-lg-10 ">
                            <div class="booking-summery bg-one">
                                <h4 class="title">Vé</h4>
                                <ul>
                                    <li>
                                        <h6 class="subtitle">Tên phim<span>Bóng đè</span></h6>
                                        <h6 class="subtitle">Ngày chiếu</span></span></h6>
                                        <h6 class="subtitle">Giờ chiếu</span></span></h6>
                                        <h6 class="subtitle">Phòng chiếu</span></span></h6>
                                        <h6 class="subtitle">Ngày đặt vé</span></span></h6>
                                    </li>
                                    <li>
                                        <!-- <h6 class="subtitle"><span>Số vé</span><span>01</span></h6> -->
                                        <h5 id="selected-seats"><span>Vị trí ghế</span><span></span></h5>
                                
                                    </li>
                                    <li>
                                    <!-- <div id="selected-seats"></div> -->
                                    <div id="total-price">Tổng tiền: 0 VNĐ</div>
                                    </li>
                                </ul>
                                <ul>
                            
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                </form>
            </div>
    </div>
                    <a href="index.php?act=datve"><input type="submit" value="Đặt vé"></a>
                    
                <!-- </form> -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                    var seats = document.querySelectorAll('.seat');
                    var selectedSeats = [];
                    var totalPriceElement = document.getElementById('total-price');
                    var selectedSeatsElement = document.getElementById('selected-seats');

                    seats.forEach(function(seat) {
                        seat.addEventListener('click', function() {
                            if (!seat.classList.contains('occupied')) {
                                seat.classList.toggle('selected');
                                updateSelectedSeats();
                                updateTotalPrice();
                            }
                        });
                    });

                    function updateSelectedSeats() {
                        selectedSeats = Array.from(document.querySelectorAll('.seat.selected'));
                        updateSelectedSeatsElement();
                    }

                    function updateSelectedSeatsElement() {
                        selectedSeatsElement.innerHTML = 'Vị trí ghế đã chọn: ';
                        var seatNames = selectedSeats.map(function(selectedSeat) {
                            return selectedSeat.getAttribute('data-seat');
                        });
                        selectedSeatsElement.innerHTML += seatNames.join(', ');
                    }

                    function updateTotalPrice() {
                        var totalPrice = 0;
                        selectedSeats.forEach(function(selectedSeat) {
                            totalPrice += parseFloat(selectedSeat.getAttribute('data-price'));
                        });
                        totalPriceElement.textContent = 'Tổng tiền: ' + totalPrice.toLocaleString('vi-VN') + ' VNĐ';
                    }
                    });
                </script>
                    
            </div>

            
        </div>
    </div>
    <style>
 .mt-50{
    margin-top:50px;
 }
</style>

</body>
</html>