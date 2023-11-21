<?php
session_start();

include_once "../admin/models/pdo.php";
include_once "../admin/models/theloai.php";
include_once "../admin/models/phim.php";
include_once "../admin/models/lichchieu.php";
include_once "../admin/models/khunggiochieu.php";
include_once "../admin/models/taikhoan.php";
$listtheloai=loadall_theloai();
$listphim=loadall_phim_home();

include_once "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'ctphim':
                $id=$_GET['id'];
                $ctphim=loadone_ctphim($id);  
                $listlichchieu=loadall_lichchieu();
                $khunggio=load_khunggio($id);
                include_once "../user/view/ctphim.php";
                break;
                
            case 'phim':
                if(isset($_GET['idtl'])&&($_GET['idtl']>0)){
                    $idtl=$_GET['idtl'];
                }else{
                    $idtl=0;
                }
                if(isset($_POST['kyw'])&&$_POST['kyw']!=0){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                    $dsphim = loadall_phim($kyw,$idtl);
                    $tentl = load_ten_theloai($idtl);
                    include_once "../user/view/phim.php";     
                               
                    include_once "home.php";          
                break; 
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];                  
                    $taikhoan=dangnhap($user,$pass); 
                    if(is_array($taikhoan)&& $taikhoan['vai_tro']==0){
                        $_SESSION['user']=$user;
                        $currentURL = $_SERVER['REQUEST_URI'];
                        echo '<script type="text/javascript">window.location.href = "' . $currentURL . '?reload=true";</script>';
                    }
                    else{
                        $thongbao="Sai tên đăng nhập hoặc mật khẩu. Vui lòng nhập lại.";
                    }                   
                }             
                include_once "view/dangnhap.php";
                break;
            case 'dangky':
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass1'];
                    $role=$_POST['role'];
                    insert_taikhoan($email,$user,$pass,$role);
                    $thongbao="alert('Đăng ký thành công')";
                    
                }
                include_once "view/dangky.php";
                break;
            case'dangxuat':
                
                    unset($_SESSION['user']);
                
                    echo '<script type="text/javascript">window.location.href = "' . $currentURL . '?reload=true";</script>';
                break;
                         
            default:
            include '../user/home.php';
                break;
            
        }
    }
    else{
        include_once "home.php";
    }

include_once "footer.php";
?>

