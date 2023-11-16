<?php
        function insert_khunggio($tengio){
            $sql = "INSERT INTO khung_gio_chieu(gio_bat_dau) values('$tengio')";
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

        function update_khunggio($id,$tengio){
            $sql = "UPDATE khung_gio_chieu set gio_bat_dau='".$tengio."' where id=".$id;
            pdo_execute($sql);
        }
?>