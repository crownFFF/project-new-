    <div class="container">

      <!-- 輪播圖片文字區塊 -->
      <div class="slide">

        <!-- 後端資料庫連接-輪播圖 -->
        <?php

        $SQLstring = "SELECT * FROM carousel WHERE caro_online = 1 ORDER BY caro_sort";
        $carousel = $link->query($SQLstring);
        
        ?>

        <!-- 輪播圖 -->
        <?php
        $i = 0;
        while ($data = $carousel->fetch()) {
        ?>

          <div class="item" style="background-image: url(./images/carousel/<?php echo $data['caro_pic'] ?>);">
            <div class="content">
              <div class="name whiteText">succulent</div>
              <div class="des whiteText">
                客製化多肉盆栽<br>
                原始．清新．自然．純真<br>
                森林系的四大元素，在充滿手感的溫度裡，看見多肉植物的生命力
              </div>
              <button>See more</button>
            </div>
          </div>

        <?php $i++;
        } ?>




      </div>

      <!-- 輪播圖按鈕區塊 -->
      <div class="button">

        <!-- 上一張按鈕 -->
        <button class="prev">
          <i class="fa-solid fa-left-long"></i>
        </button>

        <!-- 下一張按鈕 -->
        <button class="next">
          <i class="fa-solid fa-right-long"></i>
        </button>

      </div>

    </div>