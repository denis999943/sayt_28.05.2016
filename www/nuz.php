<!--Newsletter--> 
           
          </div>
          <div class="f-left bottom_links">
          <div class="footer-content">
            <div class="block_1">
              <h3>Про нас</h3>
              <!--Footer links-->
              <ul class="footer_links">
                <li> <a href="#">Про нас</a></li>
                <li> <a href="#">Захист користувачів</a></li>
                <li> <a href="#">Політика конфіденційності</a></li>
              </ul>
            </div>
            <div class="block_1">
              <h3>Обслуговування клієнтів</h3>
              <!--Footer links-->
              <ul class="footer_links">
                <li> <a href="#">Доставка</a></li>
                <li> <a href="#">Безпечні платежі</a></li>
                <li> <a href="#">Зв’язатися з нами</a></li>
              </ul>
            </div>
            <div class="block_1"> 
              <!--Footer links-->
              <h3>Термін і умови доставки</h3>
              <ul class="footer_links">
                <li> <a href="#">Прес-центр</a></li>
                <li> <a href="#">Допомога</a></li>
                <li> <a href="#">Умови оплати</a></li>
              </ul>
            </div>
            <div class="block_2">
              <h3>Ми в </h3>
              <!--Social links-->
              <div class="social_box">
                <div class="facebook"><a title="Facebook" href="http://vk.com/login?act=mobile&hash=c965156c62cd01d0"></a></div>
                <div class="twitter"><a title="Twitter" href="http://vk.com/login?act=mobile&hash=c965156c62cd01d0"></a></div>
                <div class="linkedin"><a title="Linkedin" href="http://vk.com/login?act=mobile&hash=c965156c62cd01d0"></a></div>
                <div class="youtube"><a title="Youtube" href="http://vk.com/login?act=mobile&hash=c965156c62cd01d0"></a></div>
              </div>
              <!--Payment Icons-->
              <div class="payment"> <img src="images/amexp.jpg" alt="" /> <img src="images/visa.jpg" alt="" /> <img src="images/mastercard.jpg" alt="" /> <img src="images/discover.jpg" alt="" /> </div>
            </div>
          </div>
        </div>
      </div>
      <address>
      © 2016 На Зв’язку. Вуяхевич Денис
      </address>
    </div>
    <!--END OF FOOTER--> 
    
  </div>
 <script type="text/javascript">
	 var minicart_timer;
    jQuery(".trigger-minicart").hover(function(){
        jQuery("#minicart").slideDown();
    });
    jQuery("#minicart").mouseleave(function(){
        jQuery("#minicart").slideUp();
    });
    jQuery("#minicart").hover(function(){
        clearTimeout(minicart_timer);
    });
	jQuery(document).ready(function(){
	jQuery('.pagebox_btn').click(function(){
		if(parseInt(jQuery('.page_pan').css('left')) < 0)
		{
			jQuery('.page_pan').animate({ left: '0' }, 600, 'easeOutQuint');
		}
		else{
			jQuery('.page_pan').animate({ left: '-100px' }, 600, 'easeOutQuint');
			}
		});
		});
</script>
</div>

<!--END OF WRAPPER-->
</body>
</html>