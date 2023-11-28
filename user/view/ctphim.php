<!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <?php extract($ctphim) ?>
    <section class="details-banner bg_img" data-background="../admin/upload/<?php echo $avatar ?>">
   
    <div class="container">
   
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="../admin/upload/<?php echo $avatar ?>" alt="movie">                    
                    <a href="../admin/upload/video/<?php echo $traller ?>" class="video-popup">
                        <img src="assets/images/movie/video-button.png" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title"><?php echo $name ?></h3>               <!-- tên phim-->   
                    <a href="#0" class="button">Thể loại: <?php echo $nametl ?></a>   <!-- thể loại-->
                    
                    <div class="social-and-duration">
                        <div class="duration-area">
                        
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>Ngày khởi chiếu: <?php echo $ngaychieu ?></span><br> 
                                <i class="far fa-clock"></i><span>Thời lượng: <?php echo $thoi_luong ?> mins</span> 
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>

        </div>
      
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="#" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>
                    </a>
                </div>
                                                  
                <style>
                    .ml-20{
                        margin-left:20px;
                        float: left;
                    }
                    .ml-30{
                        margin-left:33px;
                        
                    }
                    .box{
                        width: 90px;
                        height:30px;
                        background:#3366FF;
                        color:Silver;
                        border: 1px solid black;
                        text-align:center;
                        border-radius:3px;
                    }
                    .mb-30{
                        margin-bottom:30px;
                    }
                </style>   
                <div class="top-side">
                    <div class="tab-item date-item mb-30">
                        <h6>Ngày chiếu: </h6>
                        <?php
                            $link='index.php?act=ctphim&id='.$_GET['id'].'&idngay=';
                            foreach($ngay as $day){
                                extract($day);
                                echo ' 
                                <a class="ml-20 box" href="'.$link.''.$id.'"> '.$ngay_chieu.'</a><br> ';
                            }
                        ?> 
                    </div>
                    <div class="tab-item date-item">
                        <h6>Giờ chiếu: </h6>
                        <?php
                            if(isset($_GET['idngay'])  ){
                                $id= $_GET['idngay'];                 
                                $gio=load_gio($id);                          
                                foreach($gio as $time){
                                extract($time);
                                echo '<a class="ml-20 box" href="">'.$gio_chieu.'</a>';
                                
                                } 
                            } 
                            else{
                                $id_phong="";
                            }                                                             
                        ?>
                    </div>
                </div>
                <div class="item date-item">
                    <?php
                        if(isset($_SESSION['user'])&& isset($_GET['idngay'])){
                           
                            echo '<a class="custom-button" href="index.php?act=phong&idphong='.$id_phong.'&idphim='.$_GET['id'].'">Đặt vé</a>';

                        }else{
                            echo '<a class="custom-button" href="index.php?act=dangnhap">Đặt vé</a>';
                        }
                    ?>

                </div>
            
            </div>
    </section>
       
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">Hình Ảnh</h3>
                        <div class="details-photos owl-carousel">
                            <div class="thumb">
                                <a href="../admin/upload/<?php echo $avatar ?>" class="img-pop">
                                <img src="../admin/upload/<?php echo $avatar ?>" alt="movie">    
                                </a>
                            </div>            
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    MÔ TẢ
                                </li>
                                <li>
                                   Bình luận <span></span>
                                </li>
                            </ul>
                            <div class="tab-area">
                                    <div class="tab-item active">
                                        <div class="item">
                                            <h5 class="sub-title"></h5>
                                        </div>
                                    <div>                      
                                        <?php echo $mota ?>        
                            </div>
                        </div>
                        <div class="tab-item">
                                <div class="movie-review-item">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function(){
                                    $("#binhluan").load("view/binhluan/binhluanform.php", {idphim: <?=$_GET['id']?>});
                                    });
                                </script>
                                <div class="row" id="binhluan"></div>  
                                </div>
                                                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
