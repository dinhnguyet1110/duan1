<?php
    function loadall_bongnuoc(){
            $sql="SELECT * FROM bong_nuoc order by id asc";
            $listbongnuoc = pdo_query($sql);
            return $listbongnuoc;
        }

?>