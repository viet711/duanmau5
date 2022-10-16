<?php 

if(is_array($loai)){
  extract($loai);
}


?>

<section>
                <h2>Thêm sản phẩm</h2>
                <form action=""method="post" enctype="multipart/form-data">
              <div>
                <p>MÃ HÀNG HÓA</p>
                <input  type="text" name ='maloai' disabled>
                <p>TÊN LOẠI HÀNG</p>
                <input  type="text" name= 'tenloai' value="<?php if(isset($tenloai)&&($tenloai!="")) echo $tenloai?>">   
                 <button class="normal btn" type="submit" name ="btn_luu"> Submit</button>    
              </div>
                </form>
            </section>
        </div>
    </body>
</html>