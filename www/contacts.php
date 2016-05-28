<body id="bg_color" class=" cms-index-index cms-home">
<!--START OF WRAPPER-->
<div class="wrapper">
  <div class="page"> 
	<?php
		include "shapka.php";
	?>
    
	<?php
			
			$connect = mysql_connect('localhost','denis999943','denis1996') or die(mysql_error());
			mysql_select_db('denis999943');
			
			if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$telephone=$_POST['telephone'];
			$comment=$_POST['comment'];
			
			$query=mysql_query("INSERT INTO coment VALUES ('','$name','$email','$telephone','$comment')") or die(mysql_error());
			}
			?>
	
	
	
    <!--START OF MAIN CONTENT-->
    <form action = "contacts.php" method="post">
	<div class="main-container col2-left-layout">
      <div class="main">
        <div class="col-main">
          <div id="messages_product_view"></div>
          <!--Page Title-->
          <div class="page-title">
            <h1>Зв'яжіться з нами</h1>
          </div>
          <!--Start of Contact Form-->
          <form  id="contactForm" method="post" action="">
            <div class="fieldset">
              <h2 class="legend">Контактна інформація</h2>
              <ul class="form-list">
                <li class="fields">
                  <div class="field">
                    <label for="name" class="required"><em>*</em><h2 class="classy">Ім’я</h2></label>
                    <div class="input-box">
                      <input name="name" id="name" title="Name" class="input-text required-entry" type="text" />
                    </div>
                  </div>
                  <div class="field">
                    <label for="email" class="required"><em>*</em><h2 class="classy">Електрона адреса</h2></label>
                    <div class="input-box">
                      <input name="email" id="email" title="Email" class="input-text required-entry validate-email" type="text" />
                    </div>
                  </div>
                </li>
                <li>
                  <label for="telephone"><h2 class="classy">Номер телефону</h2></label>
                  <div class="input-box">
                    <input name="telephone" id="telephone" title="Telephone" class="input-text" type="text" />
                  </div>
                </li>
                <li class="wide">
                  <label for="comment" class="required"><em>*</em><h2 class="classy">Коментар</h2></label>
                  <div class="input-box">
                    <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3" placeholder ="Максимальна кількість символів 250"></textarea>
                  </div>
                </li>
              </ul>
            </div>
            <div class="buttons-set">
              <p class="required">* Обов'язкові поля</p>
              <input name="hideit" id="hideit" style="display: none ! important;" type="text" />
              <button name="submit" type="submit" title="Submit" class="button"><span><span>Надіслати</span></span></button>
            </div>
			</form>
          </form>
          <!--End of Contact Form-->  
        </div>
        <div class="col-left sidebar"> 
        
          
          <!--Start Poll-->
          <div class="block block-poll">
            <div class="block-title"> <strong><span>Опитування</span></strong> </div>
            <form action="">
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
                <div class="actions">
                  <button type="submit" title="Vote" class="button"><span><span>Відповісти</span></span></button>
                </div>
              </div>
            </form>
          </div>
          <!--End Poll--> 
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
          
		  <?php
		include "nuz.php";
	?>