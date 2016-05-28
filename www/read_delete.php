<body id="bg_color" class=" cms-index-index cms-home">
<!--START OF WRAPPER-->
<div class="wrapper">
  <div class="page"> 
	<?php
		include "shapka.php";
	?>
    
	
	<?php
	if($_POST["dfile"])
	{ $mass=$_POST["dfile"];
		$i=0;
		while($mass[$i])
		{
			$link = mysql_connect("localhost", "denis999943","denis1996") or die("Could not connect");
			mysql_select_db("denis999943") or die("Could not select database");
			$s1="DELETE FROM client WHERE id=$mass[$i]";
			$result1 = mysql_query($s1) or die("Query failed25");
			$i++;
	}


	}
?> 

    <!--START OF MAIN CONTENT-->
    <div class="main-container col2-left-layout">
      <div class="main">
        <div class="col-main">
          <div id="messages_product_view"></div>
          <!--Page Title-->
          <div class="page-title">
            <h1>Список клієнтів магазину</h1>
          </div>
	
	<form method="post" action="read_delete.php" >
	<table align="center" border="5">
	<tr align="center">
	<td><h2 class="classy">Прізвище</h2></td>
	<td><h2 class="classy">Ім’я</h2></td>
	<td><h2 class="classy">Email</h2></td>
	<td><h2 class="classy">Логін</h2></td>
	<td><h2 class="classy">Пароль</h2></td>
	<td></td>
	</tr>
	
	<?php
		$link = mysql_connect("localhost", "denis999943","denis1996") or die("Could not connect");
		mysql_select_db("denis999943") or die("Could not select database");
		$query="SELECT * FROM client ";
		$result = mysql_query($query) or die("Query failed");
		while ($line = mysql_fetch_row($result)) { 
		print "<tr align=\"center\"><td><h4>$line[2]</h4></td>";
		print "<td><h4>$line[1]</h4></td>";
		print "<td><h4>$line[3]</h4></td>";
		//$st=$line[2]*$line[3];
		print "<td><h4>$line[4]</h4></td>";
		print "<td><h4>$line[5]</h4></td>";
		print "<td>";
		$v=$line[0];
	?>
	<input type=checkbox name=dfile[] value= "<?php echo $v ?>" >
	<?php
	print "</td></tr>";
	}
	?>
	</table>
	<br>
	<input class="fancybox quickllook" type=submit name="ud" value="Видалити виділених користувачів">
	
	</form>
	</body>
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