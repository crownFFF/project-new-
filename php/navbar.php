    <!-- logo圖 -->
    <a href="index.php" class="logo">
      <span class="logoText">售栽戶</span>

      <div class="logoSpan">
        <img src="./images/logo.png" alt="" width="20px" class="logoImg">
      </div>

    </a>

    <!-- Icon圖標-小螢幕選單列圖標 -->
    <input type="checkbox" name="" id="check">
    <label for="check" class="Icon">
      <i class="fa-solid fa-bars" id="menu-icon"></i>
      <i class="fa-solid fa-xmark" id="close-icon"></i>
    </label>

    <!-- navbar -->
    <nav class="navber">

      <!--  選單列 -->
      <a href="index.php" style="--i:0"><i class="fa-solid fa-house"></i>HOME</a>
      <a href="#" style="--i:1"><i class="fa-solid fa-carrot"></i>ABOUT</a>
      <a href="#" style="--i:2"><i class="fa-solid fa-comment"></i>SERVICES</a>
      <a href="#" style="--i:2"><i class="fa-solid fa-cart-arrow-down"></i>CART</a>
      <a href="#" style="--i:3"><i class="fa-solid fa-user"></i>LOGIN</a>

      <!-- search列 -->
      <div class="searchZone">

        <form action="product.php" method="get" id="search" name="search">
          <input type="text" name="search_name" placeholder="SEARCH" value="<?php echo isset($_GET['']) ? $_GET['search_name'] : '' ; ?>">

          <button type="submit" class="SEARCHbtn">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

      </div>
    </nav>