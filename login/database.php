<?php
    
    $data = mysqli_connect("localhost","root","","desa baregbeg");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>