<?php
    include '../admin/view/layout/header.php';
    include "../admin/models/theloai.php";
    include "../admin/models/pdo.php";
    include "../admin/models/phim.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
   
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
                case 'add_phim':
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        // Thu thập dữ liệu từ form
                        $idtl = $_POST['idtl'];
                        $tenphim = $_POST['tenphim'];
                        $motaphim = $_POST['motaphim'];
                        $thoiluong = $_POST['thoiluong'];
                        $ngaykchieu = $_POST['ngaykchieu'];
                        $trailer = $_POST['trailer'];
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
                        insert_phim($tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai,$idtl);
                        $thongbao="thêm thành công";
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
                                        $trailer = $_POST['trailer'];
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
                                
                                        // Gọi hàm thêm mới phim từ cơ sở dữ liệu
                                        update_phim($id, $tenphim, $motaphim, $thoiluong, $hinh, $ngaykchieu, $trailer, $trangthai,$idtl);
                                        $thongbao="cập nhập  thành công";
                                    }
                                    $listtheloai = loadall_theloai(); 
                                    $listphim = loadall_phim("",0);
                                    // Hiển thị giao diện thêm phim
                                    include "../admin/phim/add.php";
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