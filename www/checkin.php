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
            <h1>Реєстрація</h1>
          </div>
		  
          		<!--Start of Contact Form-->
				<!--Для шифрування паролю потрібно в рядок 282, враховуючи що цей знаходиться на 265, вставити наступне: $password=md5($password);-->
              <div class="fieldset">
              <h2 class="legend">Контактна інформація</h2>	
			
			<?php
			
			$connect = mysql_connect('localhost','denis999943','denis1996') or die(mysql_error());
			mysql_select_db('denis999943');
			
			if(isset($_POST['submit'])){
			    $name=$_POST['name'];
			    $sername=$_POST['sername'];
			    $email=$_POST['email'];
			    $login=$_POST['login'];
			    $password=$_POST['password'];
			    $r_password=$_POST['r_password'];
			    if ($password==$r_password){
				    
				    echo "Ви успішно зареєстровані! Тепер ви можете зайти на <a href='category.php'>головну сторінку</a>";
			    } 
			    else{
				    die('Паролі не співпадають!!!');
			    }
			    $query=mysql_query("INSERT INTO client VALUES ('','$name','$sername','$email','$login','$password')") or die(mysql_error());
			} else {
			?>
			
	
			<form action = "checkin.php" method="post">
		    <p><h2 class="classy">Ім’я</h2><br><input type="text" name="name" required/></p>
			<p><h2 class="classy">Прізвище</h2><br><input type="text" name="sername" required/></p>
			<p><h2 class="classy">Дата народження</h2><br><input type="date" name="calendar" /></p>
			<p><h2 class="classy">Email</h2><br><input type="text" name="email" /></p>
			<p><h2 class="classy">Логін</h2><br><input type="text" name="login" required/></p>
			<p><h2 class="classy">Пароль</h2><br><input type="password" name="password" required/></p>
			<p><h2 class="classy">Повторіть пароль</h2><br><input type="password" name="r_password" required/></p>
			<input class="fancybox quickllook" type = "submit" name="submit" value="Отправить">
			</form>
			<?php } ?>
			
			
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