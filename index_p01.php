<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>售栽戶project</title>
  <link rel="stylesheet" href="project.css">
  <link rel="stylesheet" href="projectTText.css">
  <link rel="stylesheet" href="project_button.css">
  <link rel="stylesheet" href="project_card.css">
  <link rel="stylesheet" href="project_footer.css">
  <link rel="stylesheet" href="project_Parallax.css">
  <link rel="stylesheet" href="project_cursor.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <!-- cursor -->
  <div class="cursor"></div>

  <!-- Parallax -->
  <div data-relative-input="true" id="scene">
    <div data-depth="0.15"><img src="./images/BGI/leftBGI.png" alt="" class="leftBGI"></div>
    <div data-depth="0.25"><img src="./images/BGI/rightBGI.png" alt="" class="rightBGI"></div>
  </div>

  <!-- gotopButton -->
  <div class="gotopButton">
    <a href="#">
      <i class="fa-regular fa-circle-up fa-2xl"></i>
    </a>
  </div>

  <!-- header -->
  <header class="header">

    <!-- logo圖 -->
    <a href="#" class="logo">
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
      <a href="#" style="--i:0"><i class="fa-solid fa-house"></i>HOME</a>
      <a href="#" style="--i:1"><i class="fa-solid fa-carrot"></i>ABOUT</a>
      <a href="#" style="--i:2"><i class="fa-solid fa-comment"></i>SERVICES</a>
      <a href="#" style="--i:3"><i class="fa-solid fa-user"></i>LOGIN</a>

      <!-- search列 -->
      <div class="searchZone">
        <input type="text" placeholder="SEARCH">
        <button type="submit" class="SEARCHbtn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>

    </nav>

  </header>

  <!-- carousel -->
  <section id="carousel">

    <div class="container">

      <!-- 輪播圖片文字區塊 -->
      <div class="slide">

        <!-- 輪播圖第1張圖 -->
        <div class="item" style="background-image: url(./images/carousel1.jpg);">
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

        <!-- 輪播圖第2張圖 -->
        <div class="item" style="background-image: url(./images/carousel2.jpg);">
          <div class="content">
            <div class="name">cactus</div>
            <div class="des">
              仙人掌入門懶人包<br>
              一次搞懂市場上常見的人氣仙肉（仙人掌多肉）的照顧方式<br>
              告訴你號稱最好照顧的仙人掌為什麼會黑掉、枯萎、徒長。
            </div>
            <button>See more</button>
          </div>
        </div>

        <!-- 輪播圖第3張圖 -->
        <div class="item" style="background-image: url(./images/carousel3.jpg);">
          <div class="content">
            <div class="name">Potted plant</div>
            <div class="des">
              迷你綠洲盆栽系列<br>
              這個系列包含多種迷你植物，如多肉植物、小型盆景等，適合擺放在家中、辦公室或任何小型空間。<br>
              植物精心挑選，確保品質優良且易於管理，適合初學者或喜愛植物的人士。<br>
              每盆盆栽都配有精美的陶瓷盆或花盆，搭配不同造型和顏色，讓您可以根據個人喜好進行選擇。
            </div>
            <button>See more</button>
          </div>
        </div>

        <!-- 輪播圖第4張圖 -->
        <div class="item" style="background-image: url(./images/carousel4.jpg);">
          <div class="content">
            <div class="name whiteText">Bonsai</div>
            <div class="des whiteText">
              日式風格盆栽系列<br>
              這個系列的盆栽受到日本文化的啟發，展現了日式庭園和盆景的美學特色。<br>
              植物的選擇和擺放都經過精心設計，以簡潔、平衡和自然的風格為特色。<br>
              使用傳統的日本陶瓷盆或盆景容器，展現出細膩的工藝和優雅的美感。
            </div>
            <button>See more</button>
          </div>
        </div>

        <!-- 輪播圖第5張圖 -->
        <div class="item" style="background-image: url(./images/carousel5.jpg);">
          <div class="content">
            <div class="name">flash sale</div>
            <div class="des">
              【特價優惠】多肉植物一日限定！<br>
              愛好多肉植物的朋友們，這是您的大好機會！<br>
              我們的多肉植物精心栽培，品種豐富，色彩繽紛，現在正在特價優惠中！<br>
              不要錯過這個絕佳的機會，讓您的空間充滿生氣和綠意。
            </div>
            <button>See more</button>
          </div>
        </div>

        <!-- 輪播圖第6張圖 -->
        <div class="item" style="background-image: url(./images/carousel6.jpg);">
          <div class="content">
            <div class="name whiteText">Echeveria</div>
            <div class="des whiteText">
              【石蓮】— 漂亮且易於照顧的多肉植物！<br>
              現在特價優惠中！快來選購您喜歡的石蓮，讓您的家居環境更加舒適美好！<br>
              數量有限，售完即止！
            </div>
            <button>See more</button>
          </div>
        </div>

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

  </section>

  <hr>

  <!-- smallnav -->
  <section id="smallnav">

    <ul class="smallnavUL">

      <li class="active">
        <a class="whiteText" data-id="Bonsai">
          <i class="fa-solid fa-leaf"></i><span>Bonsai</span></a>
      </li>

      <li>
        <a class="whiteText" data-id="cactus">
          <i class="fa-solid fa-tree"></i><span>Cactus</span></a>
      </li>

      <li>
        <a class="whiteText" data-id="Tillandsia"><i class="fa-brands fa-pagelines"></i> <span>Tillandsia</span></a>
      </li>

      <li>
        <a class="whiteText" data-id="pottedPlant"><i class="fa-solid fa-hammer"></i><span>PottedPlant</span></a>
      </li>

      <li>
        <a class="whiteText" data-id="fertilizer"><i class="fa-solid fa-toolbox"></i><span>Fertilizer</span></a>
      </li>

      <!-- <div id="marker"><span></span></div> -->

    </ul>

  </section>

  <!-- card -->
  <section id="card__pruoduce">

    <div class="Bonsai card__active">
      <div class="card__container_main">
        <div class="card__container">

          <!-- 第1個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai1.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 星之王子</span>
              <span class="card__title">星王子-景天科青鎖龍屬的多肉植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第2個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai3.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 青雲之舞</span>
              <span class="card__title">青雲之舞-百合科鷹爪草數多年生草本</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第3個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai5.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 新玉綴</span>
              <span class="card__title">新玉綴-景天科景天屬的多肉植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第4個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai7.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 火祭</span>
              <span class="card__title">火祭-景天科青鎖龍屬的多肉植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第5個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai9.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 紅蘋果椒草</span>
              <span class="card__title">紅蘋果椒草-胡椒科椒草屬的多肉植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第6個多肉 -->
          <article class="card__article">
            <img src="./images/product/Bonsai/Bonsai11.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">多肉植物 姬秋麗</span>
              <span class="card__title">姬秋麗-景天科風車草屬的多肉植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

        </div>
      </div>
    </div>

    <div class="cactus">
      <div class="card__container_main">
        <div class="card__container">

          <!-- 第1個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus1.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 兜(實生)</span>
              <span class="card__title">仙人掌科星球屬，外形可愛像極了南瓜</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第2個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus3.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 銀玉松</span>
              <span class="card__title">銀玉松-仙人掌科乳突球屬</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第3個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus5.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 聖王丸</span>
              <span class="card__title">聖王丸-人掌科裸萼球屬</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第4個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus7.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 白星</span>
              <span class="card__title">白星-仙人掌科乳突球屬</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第5個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus9.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 翡翠閣錦</span>
              <span class="card__title">翡翠閣錦-大戟科翡翠塔屬</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第6個仙人掌 -->
          <article class="card__article">
            <img src="./images/product/cactus/cactus11.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">仙人掌 春峰綴化</span>
              <span class="card__title">春峰綴化-大戟科多年生多肉草本植物</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

        </div>
      </div>
    </div>

    <div class="Tillandsia">
      <div class="card__container_main">
        <div class="card__container">

          <!-- 第1個空氣鳳梨 -->
          <article class="card__article">
            <img src="./images/product/Tillandsia/Tillandsia1.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">空氣鳳梨 火焰小精靈</span>
              <span class="card__title">Tillandsia ionantha 'Fuego'</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第2個空氣鳳梨 -->
          <article class="card__article">
            <img src="./images/product/Tillandsia/Tillandsia3.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">空氣鳳梨 捲葉小精靈</span>
              <span class="card__title">Tillandsia ionantha 'Curly leaf'</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第3個空氣鳳梨 -->
          <article class="card__article">
            <img src="./images/product/Tillandsia/Tillandsia5.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">空氣鳳梨 龍小精靈</span>
              <span class="card__title">Tillandsia ionantha 'Ron'</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第4個空氣鳳梨 -->
          <article class="card__article">
            <img src="./images/product/Tillandsia/Tillandsia8.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">空氣鳳梨 小狐尾</span>
              <span class="card__title">Tillandsia funckiana</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第5個空氣鳳梨 -->
          <article class="card__article">
            <img src="./images/product/Tillandsia/Tillandsia9.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">空氣鳳梨 德魯伊小精靈</span>
              <span class="card__title">Tillandsia ionantha 'Druid'</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>



        </div>
      </div>
    </div>

    <div class="pottedPlant">
      <div class="card__container_main">
        <div class="card__container">

          <!-- 第1個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant1.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">日系方型水泥盆組</span>
              <span class="card__title">方型水泥花器組</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第2個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant2.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">日系圓柱水泥盆組</span>
              <span class="card__title">圓柱水泥花器組</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第3個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant3.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">迷你冰裂盆</span>
              <span class="card__title">各式顏色 /多肉盆器/陶瓷盆/植物盆栽</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第4個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant10.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">簡約風陶瓷手繪盆器</span>
              <span class="card__title">多肉植物盆/陶瓷花盆/彩繪盆器</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第5個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant11.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">/北歐簡約風手繪盆器</span>
              <span class="card__title">多肉植物盆/陶瓷花盆/彩繪盆器</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第6個盆栽 -->
          <article class="card__article">
            <img src="./images/product/pottedplant/pottedplant13.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">北歐簡約白瓷盆(含托盤)</span>
              <span class="card__title">手繪陶藝，盆器圖案會有些微不同</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>



        </div>
      </div>
    </div>

    <div class="fertilizer">
      <div class="card__container_main">
        <div class="card__container">

          <!-- 第1個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer1.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">赤玉土</span>
              <span class="card__title">運用最廣泛的一種土壤介質（園藝用、水缸造景亦會使用）</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第2個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer3.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">發泡煉石</span>
              <span class="card__title">發泡煉石又稱矽石，質水耕及多肉栽培最佳介質</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第3個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer4.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">白火山石</span>
              <span class="card__title">位於日本 宮崎縣霧島山系火山噴發基礎土壤開採的黃色的硬質介質，質地輕且堅硬不易破碎</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第4個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer5.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">紅火山石 </span>
              <span class="card__title">富含微量元素，質地堅硬，長時間栽培不崩解;可用於多肉植物栽培</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第5個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer6.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">紅礫石</span>
              <span class="card__title">混入介質中則能保有良好的保水性與透氣性，對多肉而言是非常好用的園藝介質</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第6個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer7.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">PA 藍肥</span>
              <span class="card__title">NPK比例，持續提供足夠植物需求的基本三元素特殊</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第7個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer9.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">園藝花牌</span>
              <span class="card__title">各式各樣的植物名牌、說明牌和標示插牌</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

          <!-- 第8個肥料 -->
          <article class="card__article">
            <img src="./images/product/fertilizer/fertilizer12.jpg" alt="" class="card__img">

            <div class="card__data">
              <span class="card__description">優質松樹皮</span>
              <span class="card__title">與泥炭土、椰纖土混合，增加排水性且具抗菌特性</span>
              <br>
              <a href="#" class="card__button">Read more</a>
            </div>
          </article>

        </div>
      </div>
    </div>

  </section>

  <!-- footer -->
  <footer>

    <!-- waves -->
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>


    <!-- footerIcon -->
    <ul class="social_icon">

      <li><a href="#">
          <i class="fa-brands fa-facebook"></i></a>
      </li>

      <li><a href="#">
          <i class="fa-brands fa-instagram"></i></a>
      </li>

      <li><a href="#">
          <i class="fa-brands fa-youtube"></i></a>
      </li>

      <li><a href="#">
          <i class="fa-brands fa-google"></i></a>
      </li>

    </ul>

    <!-- footerText -->
    <ul class="footer_menu">
      <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">LOGIN</a></li>
    </ul>

    <p>Copyright © 2024 Succulent Symphony. All rights reserved.</p>

  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="project.js"></script>

  <!-- https://codepen.io/z-/pen/zYxdRQy -->

</body>

</html>