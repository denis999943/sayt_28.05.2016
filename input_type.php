<body id="bg_color" class=" cms-index-index cms-home">
<!--START OF WRAPPER-->
<div class="wrapper">
  <div class="page"> 
	<?php
		include "shapka.php";
	?>
	
	<!--START OF MAIN CONTENT-->
    <div class="main-container col2-left-layout">
      <div class="main">
        <div class="col-main">
          <div id="messages_product_view"></div>
          <!--Page Title-->
          <div class="page-title">
            <h1>Використання елементів введення</h1>
          </div>
	<form>	  
		  <!-- input type="text" -->
		  <p><h2 class="classy">Логін</h2><br><input type="text" name="login" required/></p>
		  
		  <!-- input type="password" -->
		  <p><h2 class="classy">Пароль</h2><br><input type="password" name="password" required/></p>
		  
		  <!-- input type="button" -->
		  <input class="fancybox quickllook" type = "button" name = "button" value = "Отправить"></input>
		  
		  <!-- input type="checkbox" -->
		  <div class="block-content">
                <p class="block-subtitle">Що Вам найбільше подобається на нашому сайті?</p>
                <ul id="poll-answers">
                  <li class="odd">
                    <input name="vote" class="radio poll_vote" id="vote_5" value="5" type="checkbox"/>
                    <span class="label">
                    <label for="vote_5">Легка навігація</label>
                    </span> </li>
                  <li class="even">
                    <input name="vote" class="radio poll_vote" id="vote_6" value="6" type="checkbox"/>
                    <span class="label">
                    <label for="vote_6">Ціни</label>
                    </span> </li>
                  <li class="odd">
                    <input name="vote" class="radio poll_vote" id="vote_7" value="7" type="checkbox"/>
                    <span class="label">
                    <label for="vote_7">Менеджмент</label>
                    </span> </li>
				</ul>
		</div>
		
			<!-- input type="file" -->
			<p><h2 class="classy"></h2><br><input type="file" name="file" /></p>
			
			<!-- input type="hidden" -->
			<input type="hidden" name="hidden" value="Vasya"/>
			
			<!-- input type="image" -->
			<input type="image" src="http://1.bp.blogspot.com/_hljKDuw-cxQ/SDEJPIeJG2I/AAAAAAAAGaM/N_Lu4sxLH_4/s00/lpDemoBuscador.gif"/>
			
			<!-- input type="reset" -->
			<p><p><input type = "reset" name = "reset" value = "Очистити"></input></p></p>
			
			<!-- input type="radio" -->
			<label for = "name7"><h2 class="classy">Стать:<br>  
			<input type = "radio" name="delivery" id="delivery-self"></input>
			<label for="delivery-self">Чоловіча</label><br>
			<input type = "radio" name="delivery" id="delivery-novapost"></input>
			<label for="delivery-novapost">Жіноча</label><br>
			
			<!-- input type="submit" -->
			<input class="fancybox quickllook" type = "submit" name="submit" value="Надіслати">
			
			<!-- input type="date" -->
			<p><h2 class="classy">Дата народження</h2><br><input type="date" name="calendar" /></p>
			
			<!-- input type="month" -->
			<p><h2 class="classy">Виберіть місяць </p>
			<input type="month" name="month">
			
			<!-- input type="textarea" -->
			<li class="wide">
                  <label for="comment" class="required"><em></em><h2 class="classy">Коментар</h2></label>
                  <div class="input-box">
                    <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3" placeholder ="Максимальна кількість символів 250"></textarea>
                  </div>
            </li>
			
			
			<!-- input type="range" -->
			<p><input type="range"/></p>
			
			<!-- input type="color" -->
			<p><input type="color"/></p>
			
			<!-- input type="tel" -->
			<p><h2 class="classy">Введіть номер телефону</p>
			<p><input type="tel" pattern="\(\d\d\d\) ?\d\d\d-\d\d-\d\d" placeholder="(###) ###-##-##"/></p>
		
			<!-- input type="time" -->
			<input type="time"/>
				  
	</form> 
	</div>	
	</div>
		<div class="col-left sidebar"> 
 
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