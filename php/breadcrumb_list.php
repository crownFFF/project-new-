<?php
// 定義breadcrumb 第一階與第二階 變數，並賦予空值
$breadcrumb_one = '';
$breadcrumb_two = '';



if (isset($_GET['search_name'])) {
  /*
  若在網址列接收到 搜尋欄所傳遞的參數
  則breadcrumb 第一階 直接顯示 搜尋結果與搜尋參數的值
*/
  $breadcrumb_one = ' 
<li class="breadcrumb__item">
  <span class="breadcrumb__inner">
    <a class="breadcrumb__title">搜尋結果:' . $_GET['search_name'] . '</a>
  </span>
</li>
';
} elseif (isset($_GET['classid']) && isset($_GET['level'])) {
  /*
  若在網址列接收到 classid與level參數
  (這兩個參數 是由當breadcrumb有兩階的時候，當點擊裡面第一階時所傳遞的)

  1.選擇pyclass 資料表
  2.篩選條件為 
     1.level = 等於網址列level參數
     2.classid = 等於網址列classid參數 
    */
  $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = %d AND classid = %d", $_GET['level'], $_GET['classid']);

  //3.連線並發送語法到資料庫
  $classid_list = $link->query($SQLstring);
  //4.將資料取出
  $classid_data = $classid_list->fetch();
  $breadcrumb_one_cname = $classid_data['cname'];

  // 將breadcrumb格式 儲存到$breadcrumb_one變數中
  $breadcrumb_one = '
<li class="breadcrumb__item">
  <span class="breadcrumb__inner">
    <a class="breadcrumb__title" href=../index.php>' . $breadcrumb_one_cname . '</a>
  </span>
</li>';
} elseif (isset($_GET['classid'])) {
  /*
  這部分為處理第二階的breadcrumb

  若在網址列接收到 classid
  
  1.選擇pyclass 資料表
  2.篩選條件為 
     1.level = 2
     2.classid = 等於網址列classid參數 
    */
  $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = 2  AND classid = %d", $_GET['classid']);
  //3.連線並發送語法到資料庫
  $classid_list = $link->query($SQLstring);
  //4.將資料取出
  $classid_data = $classid_list->fetch();
  $breadcrumb_two_cname = $classid_data['cname'];
  $breadcrumb_two_uplink = $classid_data['uplink'];

  // 將breadcrumb格式 儲存到$breadcrumb_two變數中
  $breadcrumb_two = '
  <li class="breadcrumb__item">
    <span class="breadcrumb__inner">
      <a class="breadcrumb__title">' . $breadcrumb_two_cname . '</a>
    </span>
  </li>';

  /*
  同時要處理第一階的breadcrumb

  1.選擇pyclass 資料表
  2.篩選條件為 
    1.level = 1
    2.classid = $breadcrumb_two_uplink 
    (此變數是 處理第二階breadcrumb 時所提取的資料)

 */
  $SQLstring_one = sprintf("SELECT * FROM pyclass WHERE level = 1  AND classid = %d",  $breadcrumb_two_uplink);
  //3.連線並發送語法到資料庫
  $classid_list_one = $link->query($SQLstring_one);

  //4.將資料取出
  $classid_data_one = $classid_list_one->fetch();
  $breadcrumb_one_cname = $classid_data_one['cname'];
  $breadcrumb_one_level = $classid_data_one['level'];

// 將breadcrumb格式 儲存到$breadcrumb_one變數中
  $breadcrumb_one = '
<li class="breadcrumb__item">
  <span class="breadcrumb__inner">
    <a class="breadcrumb__title" href="product.php?classid=' . $breadcrumb_two_uplink . '&level=' . $breadcrumb_one_level . '" >' . $breadcrumb_one_cname . '</a>
  </span>
</li>';
}

?>


<ul class="breadcrumb">
  <li class="breadcrumb__item">
    <span class="breadcrumb__inner">
      <a href="index.php" class="breadcrumb__title">HOME</a>
    </span>
  </li>

  <!-- 在頁面中顯示第一階與第二階breadcrumb -->
  <?php echo $breadcrumb_one . $breadcrumb_two ?>

</ul>