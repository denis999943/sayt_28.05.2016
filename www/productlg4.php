<?php
header('Content-Type: text/html; charset=utf-8');
?>
<body id="bg_color" class=" cms-index-index cms-home">
<!--START OF WRAPPER-->
<div class="wrapper">
  <div class="page"> 
	<?php
		include "shapka.php";
	?>
    
    <!--START OF MAIN CONTENT-->
    <div class="main-container col1-layout">
      <div class="main">
        <div class="col-main">
          <div id="messages_product_view"></div>
          <div class="product-view">
            <div class="product-essential"> 
              <!--Start Product Information Right-->
              <div class="product-shop"> 
                
                <!--Product Title-->
                <div class="product-name">
                  <h1>LG G4</h1>
                </div>
                <p class="availability in-stock"><span>В наявності</span></p>
                <div class="price-box"> <span class="regular-price" id="product-price-167"> <span class="price">12 999 грн.</span> </span> </div>
                <div class="pro-left">
                  <div class="short-description">
                    <h2>Характеристики</h2>
                    <div class="std">Экран (5.5", IPS, 2560х1440)/ Qualcomm Snapdragon 808 (1.8 ГГц)/
					                 основная камера: 16 Мп, фронтальная камера: 8 Мп/ RAM 3 ГБ/ 
									 32 ГБ встроенной памяти + microSD/SDHC (до 2 ТБ)/ 3G/ LTE/ 
									 GPS/ поддержка 2х SIM-карт (Micro-SIM)/ Android 5.1 (Lollipop) / 
									 3000 мА*ч </div>
                  </div>
                  <div class="review">
                    <p class="no-rating"><a href="contacts.php">Залишити відгук</a></p>
                    
                  </div>
                </div>
                <div class="pro-right">
                  <ul class="add-to-links">
                    <li><a href="#" class="link-wishlist">Хочу</a></li>
                    <li><span class="separator">|</span> <a href="#" class="link-compare">Порівняти</a></li>
                  </ul>
                  <p class="email-friend"><a href="#">Надіслати другу</a></p>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Qty:</label>
                      <input name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" type="text" />
                      <a href="javascript:void(0)" id="reset_btn">Скинути</a>
                      <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span><span>В кошик</span></span></button>
                      <div class="add">›</div>
                      <div class="dec add">‹</div>
                    </div>
                  </div>
                </div>
              </div>
              <!--End Product Information Right--> 
              
              <!--Start Product Image Zoom Left-->
              <div class="product-img-box">
                <p class="product-image product-image-zoom"> <a href='./images/zoom1.jpg' class = 'cloud-zoom' id='zoom1'
            rel="adjustX: 10, adjustY:-4"> <img style="max-height:400px; width:400px;" src="./images/zoom1.jpg" alt='' title="Optional title display" /> </a> </p>
               
                <script type="text/javascript">
     	jQuery(document).ready(function(){
			jQuery('#product_tabs_description').click(function(){
				jQuery('#product_tabs_description_contents').css('display','block');
				jQuery('#product_tabs_product').css('display','none');
				jQuery('#product_tabs_form_contents').css('display','none');
				});
			jQuery('#product_tabs_product_tag').click(function(){
				jQuery('#product_tabs_description_contents').css('display','none');
				jQuery('#product_tabs_product').css('display','block');
				jQuery('#product_tabs_form_contents').css('display','none');
				});
			jQuery('#product_tabs_form').click(function(){
				jQuery('#product_tabs_description_contents').css('display','none');
				jQuery('#product_tabs_product').css('display','none');
				jQuery('#product_tabs_form_contents').css('display','block');
				});
			
			});
     </script> 
              </div>
              <!--End Product Image Zoom Left-->
              <div class="clearer"></div>
            </div>
            
            <!--Start Product Tabs-->
            <div class="product-collateral">
              <ul class="product-tabs">
                <li id="product_tabs_description" class=" active first"><a href="javascript:void(0)">Опис</a></li>
              </ul>
              <div class="product-tabs-content" id="product_tabs_description_contents">
                <h2>Details</h2>
                <div class="std"> LG G4 оснащен потрясающим дисплеем QHD с плотностью пикселей 538 точек на дюйм — подобный уровень детализации соответствует качеству полиграфии коллекционного артбука. Дисплей диагональю 5.5 дюймов обеспечивает сверхчёткое и невероятно яркое изображение разрешением 2560 х 1440 пикселей.
Высокая производительность
Качество и высокое разрешение дисплея не отразится на длительности работы LG G4. Смартфон оборудован мощной сменной аккумуляторной батареей на 3000 мА*ч, что выгодно выделяет эту модель в своем сегменте. А благодаря производительному и экономичному шестиядерному процессору Snapdragon 808, LG G4 можно использовать на протяжении всего дня без подзарядок.
Камера с улучшенной оптической стабилизацией изображения
Теперь за четкость снимков отвечает не только усовершенствованная функция OIS 2.0 (оптическая стабилизация изображения). Лазерный автофокус мгновенно определяет расстояние до объекта съёмки, что позволяет камере создавать удивительно качественные фотографии молниеносно.
8 Мп фронтальная камера
Создавайте невероятно четкие и качественные селфи фото, благодаря увеличенному фотосенсору фронтальной камеры. Достаточно простого жеста, чтобы начать обратный отсчет — всего 3 секунды и ваш автопортрет готов.
Умная клавиатура
Благодаря использованию жестов и автоматическому подстраиванию размера смарт-клавиатуры, набирать текст стало ещё удобней и быстрее, а количество ошибок свелось к минимуму.
Ничего лишнего. Только самое необходимое
Объединение нескольких приложений в одно позволило сократить количество иконок в меню смартфона. Также, при необходимости вы можете удалить ненужные предустановленные программы, чтобы освободить место в памяти смартфона.
 
 </div>

              </div>
              
          </div>
        </div>
      </div>
      <div style="display: none;" id="back-top"> <a href="#"><img alt="" src="images/backtop.gif" /></a> </div>
    </div>
    <!--END OF MAIN CONTENT-->  
    
    <!--START OF FOOTER-->
    <div class="footer-container">
      <div class="footer">
        <div class="f-fix">
          <div class="frame">.</div>
          <!--Shipping Block-->
          <div class="free-shipping">Безкоштовна доставка для Вас <span>гарантовано до кожного замовлення подарунок!</span></div>
          <!--Shipping Block--> 
            
            <!--Newsletter-->
          <form method="post" id="newsletter-validate-detail" action="">
            <div class="form-subscribe">
              <div class="form-subscribe-header">Підписатися на наші новини</div>
              <div class="input-box">
                <input 
                onfocus="if(this.value=='Введіть свою адресу') {this.value=''};" onblur="if(this.value=='') {this.value='Введіть свою адресу'};"
                value="Введіть свою адресу" name="email" id="newsletter" title="Sign up for newsletter" class="input-text required-entry validate-email" type="text" />
                <button type="submit" title="Submit" class="button"><span>Надіслати</span></button>
              </div>
            </div>
          </form>
          <!--Newsletter--> 
           
        <?php
		include "nuz.php";
	?>