<?php
        function insert_lichchieu($idphim,$ngaychieu,$trangthai){
            $sql = "INSERT INTO lich_chieu(idphim,ngay_chieu,trang_thai) values('$idphim','$ngaychieu','$trangthai')";
            pdo_execute($sql);
        }

        function delete_lichchieu($id){
            $sql="DELETE FROM lich_chieu where id=".$id;
            pdo_execute($sql);
        }

        function loadall_lichchieu(){
            $sql="SELECT lich_chieu.*,phim.name FROM lich_chieu join phim on lich_chieu.idphim=phim.id order by id desc";
            $listlichchieu = pdo_query($sql);
            return $listlichchieu;
        }


        function loadone_lichchieu($id){
            $sql="SELECT * FROM lich_chieu where id=".$id;
            $kg=pdo_query_one($sql);
            return $kg;
        }

        function update_lichchieu($id,$idphim,$ngaychieu,$trangthai){
            $sql = "UPDATE lich_chieu set idphim='".$idphim."', ngay_chieu='".$ngaychieu."', trang_thai='".$trangthai."'  where id=".$id;
            pdo_execute($sql);
        }

        function load_ngay($id){
            $sql="SELECT id, ngay_chieu FROM lich_chieu where lich_chieu.idphim=".$id;
            $ngay = pdo_query($sql);
            return $ngay;
        }
        function load_gio($id){
            $sql="SELECT id_phong, gio_chieu FROM khung_gio_chieu where id_lichchieu=".$id;
            $gio = pdo_query($sql);
            return $gio;
        }

        function loadall_bongnuoc(){
            $sql="SELECT * FROM bong_nuoc order by id asc";
            $listbongnuoc = pdo_query($sql);
            return $listbongnuoc;
        }   

        function ve($idphim,$idphong){
            $sql="SELECT lich_chieu.ngay_chieu,phim.name,khung_gio_chieu.gio_chieu,phong_chieu.ten_phong from khung_gio_chieu
            join lich_chieu on khung_gio_chieu.id_lichchieu=lich_chieu.id
            join phim on lich_chieu.idphim=phim.id
            join phong_chieu on phong_chieu.id=khung_gio_chieu.id_phong where phim.id=".$idphim." and phong_chieu.id=".$idphong;
            return pdo_query($sql);

        }
        
        function insert_ve($tenphim,$ngaychieu, $giochieu,$tenphong, $ngaydatve,$ghe,$tongtien,$user){
            $sql = "INSERT INTO ve(user,ghe,ten_phim,ngay_dat,phong,gia,gio,ngaychieu,thanhtoan) values('$user','$ghe','$tenphim','$ngaydatve','$tenphong','$tongtien','$giochieu','$ngaychieu','Chưa thanh toán')";
            pdo_execute($sql);
        }
  
        function update_ve($ten,$gia,$tongtien,$id){
            $sql = "UPDATE ve set combo='".$ten."', giacombo='".$gia."', tongtien='".$tongtien."', thanhtoan='Đã thanh toán'  where id=".$id;
            pdo_execute($sql);
        }

        function loadall_bill(){
            $sql = "select ve.* from ve join taikhoan where taikhoan.id=".$_SESSION['user']['id']." order by ve.id desc limit 1";
           $bill=pdo_query($sql);
           return $bill;
        }

        function load_bill(){
            $sql = "select * from ve order by id desc";
            $ve=pdo_query($sql);
           return $ve;
        }

    

?>