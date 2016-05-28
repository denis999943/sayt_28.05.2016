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
            <h1>Замовлення товару</h1>
          </div>
          		<form>

				<p><h2 class="classy">Ціна за одиницю</h2><br><input type="text" id="name9" required/></p>
				<p><h2 class="classy">Кількість</h2><br><input type="text" id="name10" required/></p>


<TITLE>Задача</TITLE>
    <SCRIPT  LANGUAGE="JavaScript">
	
	function totalPrice()
	{
	var cina = +document.getElementById('name9').value
	var kol = +document.getElementById('name10').value
	document.getElementById('result').value=cina*kol	
	}
	
	 </SCRIPT>
  <input class="fancybox quickllook" type=button  value="Розрахувати" onclick=totalPrice()>
  <!--<br><input type=button value="Розрахувати" onclick=totalPrice()></br>-->
  <p><h2 class="classy">До сплати</h2><br><input type="text" id="result" required/></p>
  
  <!--<br><label for = "result"><font size="5">До сплати </font></br>
  <input type="text" id="result" size="6">-->
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