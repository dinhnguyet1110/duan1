<?php
session_start();

    include '../admin/view/layout/header.php';
    include "../admin/models/theloai.php";
    include "../admin/models/pdo.php";
    include "../admin/models/phim.php";
    include "../admin/models/khunggiochieu.php";
    include "../admin/models/lichchieu.php";
    include "../admin/models/taikhoan.php";
    include "../admin/models/phong.php";
    include "../admin/models/binhluan.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            // quản lý thể loại phim
            case 'list_theloai':
                $listtheloai = loadall_theloai();
                include "../admin/the_loai/list.php";
                break;
            case 'add_theloai':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_theloai($tenloai);
                }  
                include "../admin/the_loai/add.php";
                break;
            case 'xoatl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_theloai($_GET['id']);
                }
                $listtheloai = loadall_theloai();
                include "../admin/the_loai/list.php";
                break;
            case 'suatl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $tl=loadone_theloai($_GET['id']);
                }
                include "../admin/the_loai/update.php";
                break;
            case 'update_theloai':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_theloai($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }  
                $listtheloai = loadall_theloai();
                include "../admin/the_loai/list.php";
            break;
            // quản lý phim
            case 'add_phim':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    // Thu thập dữ liệu từ form
                    $idtl = $_POST['idtl'];
                    $tenphim = $_POST['tenphim'];
                    $motaphim = $_POST['motaphim'];
                    $thoiluong = $_POST['thoiluong'];
                    $ngaykchieu = $_POST['ngaykchieu'];
                    // $trailer = $_POST['trailer'];
                    $trangthai = $_POST['trangthai'];
                    if(isset($_FILES['hinh'])) {
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../admin/upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    } else {
                        // Xử lý trường hợp không có ảnh được tải lên.
                        $hinh = "";
                    }
                    if(isset($_FILES['trailer'])) {
                        $trailer=$_FILES['trailer']['name'];
                        $target_dir1 = "../admin/upload/video/";
                        $target_file1= $target_dir1 . basename($_FILES["trailer"]["name"]);
                        move_uploaded_file($_FILES["trailer"]["tmp_name"], $target_file1);
                    } else {
                        // Xử lý trường hợp không có ảnh được tải lên.
                        $traller = "";
                    }
                    insert_phim($tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai, $idtl);
                    $thongbao="Thêm thành công";
                }
                $listtheloai = loadall_theloai();
                include "../admin/phim/add.php";
                break;
            case 'list_phim':
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $idtl=$_POST['idtl'];
                    }else{
                        $kyw='';
                        $idtl=0;
                    }
                    $listtheloai = loadall_theloai();
                    $listphim = loadall_phim($kyw,$idtl);
                    $tentl=load_ten_theloai($idtl);
                    include "../admin/phim/list.php";
                    break;
            case 'xoaphim':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_phim($_GET['id']);
                }
                $listphim = loadall_phim('',0);
                include "../admin/phim/list.php";
                break;
            case 'suaphim':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $phim=loadone_phim($_GET['id']);
                }
                $listtheloai = loadall_theloai(); 
                include "../admin/phim/update.php";
                break;    
            case 'update_phim':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    // Thu thập dữ liệu từ form
                    $idtl=$_POST['idtl'];
                    $id=$_POST['id'];
                    $tenphim = $_POST['tenphim'];
                    $motaphim = $_POST['motaphim'];
                    $thoiluong = $_POST['thoiluong'];
                    $ngaykchieu = $_POST['ngaykchieu'];
                    // $trailer = $_POST['trailer'];
                    $trangthai = $_POST['trangthai'];
                    if(isset($_FILES['hinh'])) {
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../admin/upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    } else {
                        // Xử lý trường hợp không có ảnh được tải lên.
                        $hinh = "";
                    }
                    if(isset($_FILES['trailer'])) {
                        $trailer=$_FILES['trailer']['name'];
                        $target_dir = "../admin/upload/video/";
                        $target_file = $target_dir . basename($_FILES["trailer"]["name"]);
                        move_uploaded_file($_FILES["trailer"]["tmp_name"], $target_file);
                    } else {
                        // Xử lý trường hợp không có ảnh được tải lên.
                        $traller = "";
                    }
            
                    // Gọi hàm thêm mới phim từ cơ sở dữ liệu
                    update_phim($id, $tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai,$idtl);
                    $thongbao="Cập nhập  thành công";
                }
                $listtheloai = loadall_theloai(); 
                $listphim = loadall_phim("",0);
                // Hiển thị giao diện thêm phim
                include "../admin/phim/add.php";
                break;      
          
            // quản lý khung giờ   
            case 'tao_gio':
                $id=$_GET['id'];  
                $listphong = loadall_phong();
                $listlichchieu = loadall_lichchieu();
                include "../admin/khung_gio_chieu/add.php";
                break;   
            case 'list_khunggio':

                $listphong = loadall_phong();
                $listkhunggio = loadall_khunggio();
                include "../admin/khung_gio_chieu/list.php";
                break;
            case 'add_khunggio':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $giochieu=$_POST['giochieu'];
                    $id_lichchieu=$_POST['id_lichchieu'];
                    $id_phong=$_POST['id_phong'];
                    insert_khunggio($giochieu,$id_lichchieu,$id_phong);
                }     
                $listphong = loadall_phong();
                $listlichchieu = loadall_lichchieu();   
                $listkhunggio = loadall_khunggio();                
                include "../admin/khung_gio_chieu/list.php";
                break;
            case 'xoakg':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_khunggio($_GET['id']);
                }
                $listkhunggio = loadall_khunggio();
                include "../admin/khung_gio_chieu/list.php";
                break;
            case 'suakg':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $kg=loadone_khunggio($_GET['id']);
                }
                $listphong = loadall_phong();
                $listlichchieu = loadall_lichchieu();
                include "../admin/khung_gio_chieu/update.php";
                break;
            case 'update_khunggio':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $giochieu=$_POST['giochieu'];
                    $id_lichchieu=$_POST['id_lichchieu'];
                    $id_phong=$_POST['id_phong'];
                    update_khunggio($id,$giochieu,$id_lichchieu,$id_phong);
                    $thongbao="Cập nhật thành công";
                }  
                $listphong = loadall_phong();
                $listlichchieu = loadall_lichchieu();
                $listkhunggio = loadall_khunggio();
                include "../admin/khung_gio_chieu/list.php";
                break;  
                
            // quản lý lịch chiếu (ngày)
            case 'taolich':
                $id=$_GET['id'];  
                $listphim = loadall_phim("",0);
                include "../admin/lich_chieu/add.php";
                break;
            case 'list_lichchieu':
                
                $listlichchieu = loadall_lichchieu();
                include "../admin/lich_chieu/list.php";
                break;
            case 'add_lichchieu':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){                 
                    $ngaychieu=$_POST['ngaychieu'];
                    $idphim=$_POST['idphim'];
                    $trangthai=$_POST['trangthai'];
                    insert_lichchieu($idphim,$ngaychieu,$trangthai);
                    $thongbao="Thêm mới thành công";
                }  
                $listphim = loadall_phim('','');
                $listkhunggio = loadall_khunggio();
                $listlichchieu = loadall_lichchieu();
                include "../admin/lich_chieu/list.php";
                break;
            case 'xoalich':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_lichchieu($_GET['id']);
                }
                $listlichchieu = loadall_lichchieu();
                include "../admin/lich_chieu/list.php";
                break;
            case 'sualich':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $lich=loadone_lichchieu($_GET['id']);
                }
                $listphim = loadall_phim('','');
                $listkhunggio = loadall_khunggio();
                include "../admin/lich_chieu/update.php";
                break;
            case 'update_lichchieu':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){                
                    $id=$_POST['id'];
                    $idphim=$_POST['idphim'];
                    $ngaychieu=$_POST['ngaychieu'];
                    $trangthai=$_POST['trangthai'];
                    update_lichchieu($id,$idphim,$ngaychieu,$trangthai);
                    $thongbao="Cập nhật thành công";
                }  
                $listphim = loadall_phim('','');
                $listkhunggio = loadall_khunggio();
                $listlichchieu = loadall_lichchieu();
                include "../admin/lich_chieu/list.php";
                break;  
                
            case 'list_taikhoan':
                $listtaikhoan=loadall_taikhoan() ;              
                include "../admin/taikhoan/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan=loadall_taikhoan() ;   
                include "../admin/taikhoan/list.php";
                break;

                // case 'thongtin_tk':
                //     if(isset($_POST['thongtin_tk'])&&($_POST['thongtin_tk'])){                   
                //         $user=$_POST['user'];
                //         $pass=$_POST['pass'];
                //         $email=$_POST['email'];
                //         $dia_chi=$_POST['dia_chi'];
                //         $sdt=$_POST['sdt'];
                //         $id=$_POST['id'];
                //         $role=$_POST['role'];               
                //         $_SESSION['user']=dangnhap($user,$pass);
                //         // $thongbao="alert('Cập nhật thành công')";
                //         // header('Location: index.php?act=update_tk');                        
                //     }
                //     include "../admin/taikhoan/thongtin_tk.php";
                //     break;

            case'dangxuat':
                
                unset($_SESSION['user']);           
                
                $currentURL = $_SERVER['login.php'];
                echo '<script type="text/javascript">window.location.href = "' . $currentURL . '?reload=true";</script>';
                break;

            // quản lý phòng
            case 'list_phongchieu':
                $listphong = loadall_phong();
                include "../admin/phong_chieu/list.php";
                break;
            case 'add_phongchieu':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $ten_phong=$_POST['ten_phong'];
                    
                    insert_phong($ten_phong);
                }  
                include "../admin/phong_chieu/add.php";
                break;
            case 'xoaphong':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_phong($_GET['id']);
                }
                $listphong = loadall_phong();
                include "../admin/phong_chieu/list.php";
                break;
            case 'suaphong':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $phong=loadone_phong($_GET['id']);
                }
                include "../admin/phong_chieu/update.php";
                break;
            case 'update_phongchieu':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ten_phong=$_POST['ten_phong'];
                    $id=$_POST['id'];
                    update_phong($id,$ten_phong);
                    $thongbao="Cập nhật thành công";
                }  
                $listphong = loadall_phong();
                include "../admin/phong_chieu/list.php";

            case 'list_binhluan': 

                    $listbinhluan = loadall_binhluan(0);
                    include "../admin/binhluan/list.php";
                    break;

            case 'xoabl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "../admin/binhluan/list.php";
                    break;   
                    
                case 'list_bongnuoc':
                    $listbongnuoc = loadall_bongnuoc();
                    include "../admin/bong_nuoc/list.php";
                    break;

                    case 'list_ve':
                        $ve = load_bill();      
                        include "../admin/ve/list.php";
                        break;
            default:
            include '../admin/view/layout/home.php';
                break;
        }
    }else{
        include '../admin/view/layout/home.php';
    }
    
    include '../admin/view/layout/footer.php';
    
?>