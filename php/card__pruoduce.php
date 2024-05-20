<?php
$maxRows_rs = 4;  //一頁商品量
$pageNum_rs = 0;  //起始頁

if (isset($_GET['pageNum_rs'])) {
  $pageNum_rs = $_GET['pageNum_rs'];
}

$startRows_rs = $pageNum_rs * $maxRows_rs;
?>

<div class="card">

  <div class="card__container_main">

    <?php

    /* 
    這邊的判斷分類為:
    1.第一個是breadcrumb 上的連結點下去後將顯示 所有包含在第一層分類商品的判斷
    2.第二個是搜尋列的商品判斷，只有有包含到商品名稱的某個字，就會顯示
    3.第三個是 第二層分類的商品判斷，依照第二層分類顯示商品
    4.所有的商品顯示
    */

    if (isset($_GET['level']) && $_GET['level'] == 1) {
      /*
      如果在網址列抓取到level的參數並且level 等於1 
      (此邊level參數為breadcrumb第二層連結所傳遞出來的)
      (breadcrumb第二層連結 會傳遞出兩個參數 1.level 、 2.classid)

      則
        1.選擇product,product_img,pyclass 三個資料表
        2.執行篩選條件為
          1.p_open = 1  上架
          2.product.p_id = product_img.p_id  產品id與照片id一致
          3.product_img.sort = 1 照片排序為1的
          4.product.classid = pyclass.classid 產品類別id 與分類類別id一致的
          5.pyclass.uplink = $_GET['classid'] 
          ($_GET['classid'] 參數 也是由 breadcrumb第二層連結所傳遞出來的)
      */

      $SQLstring = sprintf("SELECT * FROM product,product_img,pyclass WHERE p_open = 1 AND product.p_id = product_img.p_id AND product_img.sort = 1 AND product.classid = pyclass.classid AND pyclass.uplink = '%d' ORDER BY product.p_id", $_GET['classid']);
    } elseif (isset($_GET['search_name'])) {
      /*
      2.如果在網址列抓取到 搜尋列傳遞的search_name的參數，則
        1.選擇product,product_img,pyclass 三個資料表
        2.執行篩選條件為
          1.p_open = 1  上架
          2.product.p_id = product_img.p_id  產品id與照片id一致
          3.product_img.sort = 1 照片排序為1的
          4.product.classid = pyclass.classid 產品類別id 與分類類別id一致的
          5.product.p_name LIKE '%' . $_GET['search_name'] . '%'
      產品名稱 與 搜尋的值 相似 (前後字詞不理會，只要有包含搜尋的文字就可以)
      */
      $SQLstring = sprintf("SELECT * FROM product,product_img,pyclass WHERE p_open = 1 AND product.p_id = product_img.p_id AND product_img.sort = 1 AND product.classid=pyclass.classid AND product.p_name LIKE '%s' ORDER BY product.p_id ", '%' . $_GET['search_name'] . '%');
    } elseif (isset($_GET['classid'])) {
      /*
      3.如果在網址列抓取到classid的參數，則
        1.選擇product,product_img 兩個資料表
        2.執行篩選條件為
          1.p_open = 1 上架
          2.product.p_id = product_img.p_id 產品id與照片id一致
          3.product_img.sort = 1 照片排序為1的
          4.product.classid=$_GET['classid'] product.classid等於網址列classid參數
      */
      $SQLstring = sprintf("SELECT * FROM product,product_img WHERE p_open = 1 AND product.p_id = product_img.p_id AND product_img.sort = 1 AND product.classid=%d ORDER BY product.p_id", $_GET['classid']);
    } else {
      /* 
      4.1.選擇product,product_img 兩個資料表
        2.篩選條件為 
          1.p_open = 1 上架
          2.product.p_id = product_img.p_id 產品id與照片id一致
          3.product_img.sort = 1 照片排序為1的
          */
      $SQLstring = sprintf("SELECT * FROM product,product_img WHERE p_open = 1 AND product.p_id = product_img.p_id AND product_img.sort = 1 ORDER BY sort");
    }

    //3.連接資料庫
    $query = sprintf("%s LIMIT %d,%d", $SQLstring, $startRows_rs, $maxRows_rs);
    $cardlist = $link->query($query);
    ?>


    <!-- 如果拿到後台的是數據不為零 -->
    <?php if ($cardlist->rowCount() != 0) { ?>

      <div class="card__container">

        <!-- while迴圈 -->
        <?php while ($cardlist_Row = $cardlist->fetch()) { ?>

          <article class="card__article">
            <img src="./images/product/<?php echo $cardlist_Row['img_file'] ?>" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description"><?php echo $cardlist_Row['p_name'] ?></span>
              <span class="card__title"><?php echo $cardlist_Row['p_intro'] ?></span>
              <br>
              <a href="goods.php" class="card__button">Read more</a>
              <button class="addCartBtn">
                <strong>ADD CART</strong>
                <div id="container-stars">
                  <div id="stars"></div>
                </div>
                <div id="glow">
                  <div class="circle"></div>
                  <div class="circle"></div>
                </div>
              </button>
            </div>
          </article>

        <?php } ?>

      </div>

    <?php } else { ?>

      <!-- 沒有商品時，顯示提示框 -->
      <div class="container_NOTHING">
        <span>NOTHING</span>
        <span class="drop"></span>
      </div>

      <svg id="container_NOTHING">
        <defs>
          <filter id="gooey">
            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -20" result="gooey" />
            <feComposite in="SourceGraphic" in2="gooey" operator="atop" />
          </filter>
        </defs>
      </svg>

    <?php } ?>

  </div>
</div>

<!-- pagination -->
<!-- 換頁程式碼 -->
<?php

if (isset($_GET['totalRows_rs'])) {
  $totalRows_rs = $_GET['totalRows_rs'];
} else {
  $all_rs = $link->query($SQLstring);
  $totalRows_rs = $all_rs->rowCount();
}

$totalRows_rs = ceil($totalRows_rs / $maxRows_rs) - 1;
$prev_rs = "&laquo;";
$next_rs = "&raquo;";
$separator = "|";
$max_links = 5;
$pages_rs = buildNavigation($pageNum_rs, $totalRows_rs, $prev_rs, $next_rs, $separator, $max_links, true, 3, "rs");

?>

<!-- 換頁樣式 -->
<div class="container_pagination">
  <ul class="pagination">
    <?php echo $pages_rs[0] . $pages_rs[1] . $pages_rs[2]; ?>
  </ul>
</div>