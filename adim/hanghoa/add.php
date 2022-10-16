<section>
                <h2>Thêm sản phẩm</h2>
                <form action="index.php?act=adhh"method="POST" enctype="multipart/form-data">
              <div>
                <p>MÃ HÀNG HÓA</p>
                <input  type="text" name="maloai" disabled>
                <p>TÊN LOẠI HÀNG</p>
                <input  type="text" name="tenloai"> 
                 <button class="normal btn" type="submit" name="them">Thêm Mới</button>  
                 
                 <a class="normalbtn1" href="index.php?act=showhh">Danh Mục</a> 
                 <br>
                 <br>
                 <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
              ?>  
              </div>
              
                </form>

            </section>
        </div>
    </body>
</html>