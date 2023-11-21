<?php
        function insert_khunggio($giochieu,$id_lichchieu){
            $sql = "INSERT INTO khung_gio_chieu(gio_chieu,id_lichchieu) values('$giochieu','$id_lichchieu')";
            pdo_execute($sql);
        }

        function delete_khunggio($id){
            $sql="DELETE FROM khung_gio_chieu where id=".$id;
            pdo_execute($sql);
        }

        function loadall_khunggio(){
            $sql="SELECT * FROM khung_gio_chieu order by id desc";
            $listkhunggio = pdo_query($sql);
            return $listkhunggio;
        }

        function loadone_khunggio($id){
            $sql="SELECT * FROM khung_gio_chieu where id=".$id;
            $kg=pdo_query_one($sql);
            return $kg;
        }

        function update_khunggio($id,$giochieu,$id_lichchieu){
            $sql = "UPDATE khung_gio_chieu set gio_chieu='".$giochieu."' where id=".$id;
            pdo_execute($sql);
        }
?>