<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 17:10:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>NTN Ceminas</title>


</head>

<body>
 <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index-2.html">
                        <img src="assets/images/logo/logo2.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" class="active">Trang chủ</a>                     
                    </li>
                    <li>
                        <a>Thể loại</a>
                        <ul class="submenu" name="idtl">
                            <?php foreach ($listtheloai as $tl) : ?>
                                <?php extract($tl) ?>
                            <li>
                                <?php $linktl="index.php?act=phim&idtl=".$id; 
                                 echo  '<a href="'.$linktl.'">'.$name.'</a>'; ?>
                            </li>
                            <?php endforeach ?> 
                                                  
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Sự kiện</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li>
                                <a href="event-details.html">Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html">Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html">Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html">Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
<!--Trạng thái phim-->          <a href="#0">Phim</a>
                        <ul class="submenu">
                            <li>
                                <a href="about.html">Phim đang chiếu</a>
                            </li>
                            <li>
                                <a href="apps-download.html">Phim sắp ra mắt</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Giới thiệu</a>
                       
                    </li>
                    <li>
                        <a href="contact.html">Liên hệ</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="sign-up.html">Đăng nhập</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>