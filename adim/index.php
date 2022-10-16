<?php
include "../model/pdo.php";
include "header.php";
// contronller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adhh':
            // kiểm tra người dùng có click vào add không
            if(isset($_POST['them'])){
                $tenloai=$_POST['tenloai'];
                $sql="INSERT INTO loai(tenloai) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="them thành công";
            }
            include "hanghoa/add.php";
            break;

        case 'showhh':
            $sql="SELECT * FROM loai order by tenloai";
            $showloai=pdo_query($sql);
            include "hanghoa/show.php";
            break;
        case 'xoahh':
            if(isset($_GET['maloai'])){
                $sql="DELETE FROM loai where maloai='{$_GET['maloai']}'";
                pdo_execute($sql);
            }   
            $sql="SELECT * FROM loai order by tenloai";
            $showloai=pdo_query($sql);
            include "hanghoa/show.php";
            break;
        case 'suahh':
            if(isset($_GET['maloai'])&&($_GET['maloai']>0)){
                $sql="SELECT * FROM loai WHERE maloai=".$_GET['maloai'];
                $loai=pdo_query_one($sql);
            }
            
            include "hanghoa/update.php";
            break;
        default:
            include "home.php";
            break;

    }
}else {
    include "home.php";
}



include "footer.php";

?>