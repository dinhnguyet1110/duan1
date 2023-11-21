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
            $sql="SELECT * FROM lich_chieu order by id desc";
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

?>