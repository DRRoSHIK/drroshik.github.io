<?php

if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['email']) != '' && trim($_POST['message']) != ''  ) {

    $message =  "Вам пришло новое сообщение с сайта: \n" .
                "Имя отправителя: " . $_POST['name'] . "\n" .
                "Email отправителя: ". $_POST['email'] . "\n" .
                "Сообщение: ". $_POST['message'];
mail( 'DRRoSHIK@yandex.ru', "Сообщение с сайта!", $message );
header('location: thankyou.html'); 
}

function checkValue($item, $message ) {
    if ( isset($item) && trim($item) == ''  ) {
        echo '<div class="error">' . $message . '</div>';
    } 
}

function printPostValue($item){
    if ( isset($item) && strlen(trim($item)) > 0 ) {
        echo $item;
    }
}

?>
<!DOCTYPE html><!-- Спецификация -->
<html lang="en"><!-- С открывающего html начинаем наш документ -->
<head> <!--В head, например, есть тег title, в котором нужно записать заглавие страницы -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Белое море</title> <!-- тег title, отображающий название страницы во вкладке браузера -->
  <link rel="stylesheet" href="css/mainvs.css">
  <link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="ie_fixes.css" media="screen" /><![endif]-->

<title>Website Template: Gallery</title>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
<!--<script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>-->
<script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});
	});
</script>
 
 
 </head><!-- Закрываем головную часть документа. Пока не закрыли, к тегу body НЕ переходим -->
<body><!-- Открываем тело документа. ЗДЕСЬ будет всё содержимое -->
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <a href="index.html" target="_self"><span>На главную</span></a>
    </div>
    </header>

  <div id="top">
    <h1><font face="MS Reference Sans Serif" >Приветствую тебя, человече на Белом море!</font></h1><!--h1 служит для обозначения заголовка. 
    Есть ещё h2, h3 и так до h6. самого маленького заголовка-->
   </div>

  <div id="main">
    <div class="intro">
      <h2><font face="MS Reference Sans Serif" >Место отдыха:</font></h2>
      <span>Онежский район, дачное товарищество Лесопильщик.</span>
    </div>
    <div class="text">
      <span>
	  <p><b>Ближайшийй ориентир и автобусная остановка:<b/></p>
<p> Дом отдыха "Кий остров". </p>
<p>Местные достопримечательности:</p>
<p>Остров большая Вертягина Луда.</p>
<p>Условия:</p>
<p></p>
<p> Доступно до 17 спальных мест. Во дворе баня. В домике камин, дровяная печь, газ балонный, вода скваженная пресная. </p>
<p>Дача в 1 ряду. </p>
<p>Во время прилива расстояние до воды 20 метров.</p>
<p> Купальный сезон с июля по август, при наличии солнца. </p>
	  </span>
    </div>
  </div>
  <b><b><b>
  </b></b></b>
		
		<div class="post">

			
				<center><div class="post_title"><h2></h2></div></center>
<div class="gallery">
<a rel="gallery" class="photo" href="gallery_img/big/01.jpg" title="Картинка 1"><img src="gallery_img/small/01.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/02.jpg" title="Картинка 2"><img src="gallery_img/small/02.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/03.jpg" title="Картинка 3"><img src="gallery_img/small/03.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/04.jpg" title="Картинка 4"><img src="gallery_img/small/04.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/05.jpg" title="Картинка 5"><img src="gallery_img/small/05.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/06.jpg" title="Картинка 6"><img src="gallery_img/small/06.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/07.jpg" title="Картинка 7"><img src="gallery_img/small/07.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/08.jpg" title="Картинка 8"><img src="gallery_img/small/08.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/09.jpg" title="Картинка 9"><img src="gallery_img/small/09.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/10.jpg" title="Картинка 10"><img src="gallery_img/small/10.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/11.jpg" title="Картинка 11"><img src="gallery_img/small/11.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/12.jpg" title="Картинка 12"><img src="gallery_img/small/12.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/13.jpg" title="Картинка 13"><img src="gallery_img/small/13.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/14.jpg" title="Картинка 14"><img src="gallery_img/small/14.jpg" width="150" height="100" alt="" /></a>
<a rel="gallery" class="photo" href="gallery_img/big/15.jpg" title="Картинка 15"><img src="gallery_img/small/15.jpg" width="150" height="100" alt="" /></a>
</div>
	</div>
  
          <CENTER><div class="content-wrapper">
            <h1 class="title">Надумал? Пиши через форму ниже. Мы с тобой свяжемся.</h1> 

            <form method="POST" action="blacksee.php" class="form-wrapper">

                <?php 
                    // echo "<pre style='font-size: 24px;'>";
                    // print_r($_POST);
                    // echo "</pre>";
                ?>

                <div class="form-group">
                    <label for="name" class="form-label">Ваше имя</label>
                    <?php checkValue($_POST['name'], 'Вы не ввели имя.'); ?>
                    
                    <input 
                        name="name" 
                        id="name" 
                        type="text" 
                        class="form-input" 
                        placeholder="Введите имя"
                        value="<?php printPostValue($_POST['name']); ?>"
                    >
                
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Ваше email</label>
                    <?php checkValue($_POST['email'], 'Вы не ввели email.'); ?>
                    <input 
                        name="email" 
                        id="email" 
                        type="email" 
                        class="form-input" 
                        placeholder="Введите email"
                        value="<?php printPostValue($_POST['email']); ?>"
                    >
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Сообщение</label>
                    <?php checkValue($_POST['message'], 'Вы не ввели сообщение.'); ?>
                    <textarea name="message" id="message" placeholder="Напишите пару строк" class="form-message" name="" id="" cols="30" rows="10"><?php printPostValue($_POST['message']); ?></textarea>
                </div>

                <input class="form-submit" type="submit" value="Отправить сообщение">
                
            </form>
            
        

    </div>
</CENTER>
<!--
      <div id="contacts">
    <center><h5><font face="MS Reference Sans Serif" >Надумал? Пиши через форму ниже.</font></h5></center>
    <form id="form_input">
      <label for="name"><font face="MS Reference Sans Serif" >Имя </font><span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email"><font face="MS Reference Sans Serif" >Ваша почта </font><span>*</span></label><br>
			<input type="email" placeholder="Введите email" name="email" id="email"><br>
			<label for="message"><font face="MS Reference Sans Serif" >Сообщение</font> <span>*</span></label><br>
			<textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
			<div id="mess_send" class="btn"><font face="MS Reference Sans Serif" >Отправить</font></div>
    </form>
  </div>
-->
  <div id="faq">
    <div>
      <span class="title">Оплата</span><br>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. </p>
    
       </div>
    <div>
      <span class="title">Информация</span><br>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. </p>
     
         </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p>Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. Тут некоторое колличество дополнительной информации. </p>
  
        </div>
  </div>

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>-->
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
  &copy; DRRoSHIK copyright &reg; ШАнС :))
</body><!--Закрываем body. После этого Содержимое не вставляем-->
</html><!--Закрываем html. После него уже ВООБЩЕ НИЧЕГО НЕ вставляем-->