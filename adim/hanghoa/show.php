
<section>
            <h2>Quản lí loại hàng</h2>
            <table>
                <thead>
                    <tr>
                        <td>Mã loại</td>
                        <td>Tên loại</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($showloai as $loai){
                        extract($loai);
                        $suahh="index.php?=suahh=".$maloai;
                        $xoahh="index.php?=xoahh=".$maloai;
                        echo '<tr>
                        <td width="15%">'.$maloai.'</td>
                        <td width="60%">'.$tenloai.'</td>
                        <td>
                            
                            <a href="index.php?act=suahh" '.$suahh.'><button class="normal update" >Update</button></a>
                            
                            <a href="index.php?act=xoahh&maloai='.$maloai.'"><button class="normal update" >Delete</button></a>
                        </td>
                    </tr>';
                    }
                ?>
                </tbody>
            </table>
        </section>
        <a href="index.php?act=adhh"><button class="normal btn" type ="submit" name = "btn_luu">Thêm Mới</button></a>
        </div>
    </body>
</html>