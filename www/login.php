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
            <h1>Авторизація</h1>
          </div>
          		<!--Start of Contact Form-->
              <div class="fieldset">
              <h2 class="legend">Для входу до Вашого особистого кабінету введіть логін та пароль</h2>	
			<?php
			
			$connect = mysql_connect('localhost','denis999943','denis1996') or die(mysql_error());
			mysql_select_db('denis999943');
			
			if(isset($_POST['enter'])){
			$e_login=$_POST['e_login'];
			$e_password=($_POST['e_password']);
			
			$query=mysql_query("SELECT * FROM client WHERE login='$e_login'");
			$client_data=mysql_fetch_array($query);
			
			if($client_data['password']==$e_password){
			
			echo "Ви ввійшли в свій обліковий запис ";
					
			}
			else {
			echo "Не вірний логін чи пароль ";
			}
			
		}
			
			?>
			
	
			<form action = "login.php" method="post">
			<p><h2 class="classy">Логін</h2><br><input type="text" name="e_login" required/></p>
			<p><h2 class="classy">Пароль</h2><br><input type="password" name="e_password" required/></p>
			<input class="fancybox quickllook" type = "submit" name="enter" value="Ввійти">
			</form>
			<br> </br>
		
		<p align="centr"> <a href="http://localhost/checkin.php"><font size="3" color = "red">Якщо Ви ще не зареєстровані перейдіть на сторінку реєстрації</font></a></p></td> </tr>
			
          </form>
          <!--End of Contact Form-->  
        </div>
        <div class="col-left sidebar"> 
        
          
          
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