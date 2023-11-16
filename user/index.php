

<?php
include_once "../admin/models/pdo.php";
include_once "../admin/models/theloai.php";
include_once "../admin/models/phim.php";
$listtheloai=loadall_theloai();
$listphim=loadall_phim_home();

include_once "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'ctphim':
                $id=$_GET['id'];
                $ctphim=loadone_ctphim($id);  
                include_once "../user/view/ctphim.php";
                break;
                
            case 'phim':
                if(isset($_GET['idtl'])&&($_GET['idtl']>0)){
                    $idtl=$_GET['idtl'];
                    $dsphim = loadall_phim('',$idtl);
                    $tentl = load_ten_theloai($idtl);
                    include_once "../user/view/phim.php";
                
                }else{         
                    include_once "home.php";
                }           
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

