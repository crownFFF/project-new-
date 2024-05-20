  <!-- 資料庫篩選連線 -->
  <?php
  $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=1  ORDER BY sort");
  $smallnavlist = $link->query($SQLstring);
  $i = 1;

  ?>

  <?php while ($smallnavlist_Rows = $smallnavlist->fetch()) {
    $j = 1;
  ?>

    <ul class="smallnavUL_list <?php echo $smallnavlist_Rows['cname'] ?>" data-id="<?php echo $smallnavlist_Rows['cname'] ?>">

      <!-- 資料庫篩選連線 -->
      <?php
      $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=2 AND uplink=%d ORDER BY sort", $i);
      $smallnavlist01 = $link->query($SQLstring);
      ?>


      <!-- 迴圈-後端資料 -->


      <?php while ($smallnavlist_Rows01 = $smallnavlist01->fetch()) {
        if ($j == 1) {
      ?>
          <li>
            <a class="whiteText" data-id="Crassulaceae" href="product.php?classid=<?php echo $smallnavlist_Rows01['uplink'] ?>&level=<?php echo $smallnavlist_Rows['level'] ?>">
              <i class="<?php echo $smallnavlist_Rows01['fonticon'] ?>"></i><span>全部</span></a>
          </li>

        <?php } ?>

        <li>
          <a class="whiteText" data-id="Crassulaceae" href="product.php?classid=<?php echo $smallnavlist_Rows01['classid'] ?>">
            <i class="<?php echo $smallnavlist_Rows01['fonticon'] ?>"></i><span><?php echo $smallnavlist_Rows01['cname'] ?></span></a>
        </li>


      <?php
        $j++;
      } ?>

    </ul>

  <?php $i++;
  } ?>