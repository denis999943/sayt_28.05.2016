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
            <h1>Зміна паролю облікового запису</h1>
          </div>
		  
          	
			
			<?php
			
			
			
			if(isset($_POST['submit'])){
			    $login=$_POST['login'];
			    $password=$_POST['password'];
				if ($login&&$password) {
					mysql_connect('localhost','denis999943','denis1996') or die(mysql_error());
			        mysql_select_db('denis999943');
					$exists = mysql_query ("SELECT * FROM client WHERE login='$login'") or die ("The query could not be compleated");
					if (mysql_num_rows($exists) != 0) {
						mysql_query ("UPDATE client SET password='$password' WHERE login='$login'") or die(mysql_error());
						echo "Пароль змінено";
					}
					else echo "Користувача з таким логіном не знайдено, спробуйте ще раз";
				}
			    
				else echo "Заповніть всі поля";
			
			}
			
			?>
			
	
			<form action = "pass.php" method="post">
		    <p><h2 class="classy">Логін</h2><br><input type="text" name="login" required/></p>
			<p><h2 class="classy">Новий пароль</h2><br><input type="text" name="password" required/></p>
			<input class="fancybox quickllook" type = "submit" name="submit" value="Змінити пароль">
			</form>
		
			
			
          </form>
          <!--End of Contact Form-->  
		  
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