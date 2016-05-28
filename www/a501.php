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
                  <h1>Bravis A501 Bright Black</h1>
                </div>
                <p class="availability in-stock"><span>В наявності</span></p>
                <div class="price-box"> <span class="regular-price" id="product-price-167"> <span class="price">2 299 грн.</span> </span> </div>
                <div class="pro-left">
                  <div class="short-description">
                    <h2>Характеристики</h2>
                    <div class="std"></div>
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
                <p class="product-image product-image-zoom"> <a href='./images/a501.jpg' class = 'cloud-zoom' id='zoom1'
            rel="adjustX: 10, adjustY:-4"> <img style="max-height:400px; width:400px;" src="./images/a501.jpg" alt='' title="Optional title display" /> </a> </p>
               
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
                <div class="std"> Bravis A501 Bright — стильный и мощный смартфон, который отвечает всем требованиям современных пользователей и обладает полным набором функций, необходимых для повседневной жизни.

Смартфон Bright оснащен 5 дюймовым IPS экраном с разрешением — 1280 х 720. Дисплей выделяется отличной цветопередачей, красочным и контрастным изображением.

Четырехъядерный процессор Spreadtrum SC7731, с тактовой частотой 1.2 ГГц и 1 ГБ оперативной памяти позволяют с легкостью справляться с любыми задачами: поддержка ресурсоемких приложений, игры, видео в высоком качестве.

Устройство оснащено модулем камеры разрешением 5 мегапикселей. Встроенная фронтальная 2 Мп камера предоставит возможность общения посредством видеосвязи.

Смартфон поддерживает 2 SIM-карты в режиме ожидания. Пользователь может одновременно пользоваться услугами различных операторов связи, сочетать оптимальные для себя тарифы, разделять рабочие и личные контакты.

Bravis A501 Bright работает под управлением операционной системы Android 5.1

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