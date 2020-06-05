<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>
  <!-- Добавляем тему по умолчанию из CDN -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
  <script type="text/javascript">
   $(document).on('ready', function () {
 $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });
    });
  </script>
   <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Popins:400,500,700');
    body, html{
	  cursor: url('images/222.png'), default;
      background-image: url(img/background.jpg);
      width: 100%;
      height: 100%;
      font-family: 'Popins', sans-serif;
      color: #222;
    }
	a,li{
	 cursor: url('images/333.png'), default;
	}
	.card{
		margin: 3%;
	}
	.hell{
		border:0px!important;
	}
    .dropdown:hover > .dropdown-menu {
      display: block;
    }
	.special-card img{
		opacity: 0;
	}
    .container .on_center_1 .lead h2{
      text-align: center;
      color:white;

    }
.group { 
    display: table;
    width: 80%;
    font-size: 3em;
    margin: 0 auto;
    color:black;
    font-family: fantasy, Luminari,  sans;
} 
.item {
    display: table-cell;
}
.text { 
    white-space: nowrap;
    width: 1%;
    padding: 0 10px;
}
.line {
    border-bottom: 1px solid #000;
    position: relative;
    top: -.5em;

.footer h4 {
    text-transform: uppercase;
    text-align: left;
    font-size: 14px;
    padding: 5px 0;
    margin-bottom: 20px;
    border-bottom: 1px dotted black;
}
  </style>
</head>
<body class= "overflow-hidden">
 
  
  <!-- Верхняя панель -->
  <nav class = "navbar navbar-expand-md navbar-dark bg-dark text-left">
    <div class="container-fluid ">
      <div class="header__phone hidden-only-tab hidden-sm phone_num">
        <a href="tel:88007005196">8 800 700-51-96</a>
        <div class="header__phone-info phone_num_info">
          интернет-магазин — круглосуточно
        </div>
      </div>
      <a class="navbar-brand" href="#">
        <img src="img/qwe.png" width="300px" height="140px"></img>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Прочее</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Контейнер с основным содержимым страницы -->
  <div class="container">
    <br/>
    <br/>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Категории</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Мужская обувь </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">              
              <a class="dropdown-item" href="http://localhost/htm/1_5.php"> Кеды </a>
              <a class="dropdown-item" href="http://localhost/htm/1_6.php"> Кроссовки </a>
              <a class="dropdown-item" href="http://localhost/htm/1_8.php"> Кроксы </a>
              <a class="dropdown-item" href="http://localhost/htm/1_1.php"> Тапочки </a>
              <a class="dropdown-item" href="http://localhost/htm/1_2.php"> Шлепанцы </a>
              <a class="dropdown-item" href="http://localhost/htm/1_3.php"> Сабо </a>
              <a class="dropdown-item" href="http://localhost/htm/1_9.php"> Босоножки </a>
              <a class="dropdown-item" href="http://localhost/htm/1_4.php"> Сапоги </a>
              <a class="dropdown-item" href="http://localhost/htm/1_7.php"> Дедуши </a>
              <a class="dropdown-item" href="http://localhost/htm/1_12.php"> Аляски </a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Женская обувь </a>        
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://localhost/htm/2_5.php"> Кеды </a>
              <a class="dropdown-item" href="http://localhost/htm/2_6.php"> Кроссовки </a>
              <a class="dropdown-item" href="http://localhost/htm/2_8.php"> Кроксы </a>
              <a class="dropdown-item" href="http://localhost/htm/2_1.php"> Тапочки </a>
              <a class="dropdown-item" href="http://localhost/htm/2_2.php"> Шлепанцы </a>
              <a class="dropdown-item" href="http://localhost/htm/2_3.php"> Сабо </a>
              <a class="dropdown-item" href="http://localhost/htm/2_9.php"> Босоножки </a>
              <a class="dropdown-item" href="http://localhost/htm/2_4.php"> Сапоги </a>
              <a class="dropdown-item" href="http://localhost/htm/2_11.php"> Бабуши </a>
              <a class="dropdown-item" href="http://localhost/htm/2_12.php"> Аляски </a>
              <a class="dropdown-item" href="http://localhost/htm/2_10.php"> Уги </a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Подростковая обувь </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://localhost/htm/3_5.php"> Кеды </a>
              <a class="dropdown-item" href="http://localhost/htm/3_6.php"> Кроссовки </a>
              <a class="dropdown-item" href="http://localhost/htm/3_8.php"> Кроксы </a>
              <a class="dropdown-item" href="http://localhost/htm/3_1.php"> Тапочки </a>
              <a class="dropdown-item" href="http://localhost/htm/3_2.php"> Шлепанцы </a>
              <a class="dropdown-item" href="http://localhost/htm/3_3.php"> Сабо </a>
              <a class="dropdown-item" href="http://localhost/htm/3_9.php"> Босоножки </a>
              <a class="dropdown-item" href="http://localhost/htm/3_4.php"> Сапоги </a>
              <a class="dropdown-item" href="http://localhost/htm/3_12.php"> Аляски </a>
              <a class="dropdown-item" href="http://localhost/htm/3_10.php"> Уги </a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Детская обувь </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://localhost/htm/4_5.php"> Кеды </a>
              <a class="dropdown-item" href="http://localhost/htm/4_6.php"> Кроссовки </a>
              <a class="dropdown-item" href="http://localhost/htm/4_8.php"> Кроксы </a>
              <a class="dropdown-item" href="http://localhost/htm/4_1.php"> Тапочки </a>
              <a class="dropdown-item" href="http://localhost/htm/4_2.php"> Шлепанцы </a>
              <a class="dropdown-item" href="http://localhost/htm/4_3.php"> Сабо </a>
              <a class="dropdown-item" href="http://localhost/htm/4_9.php"> Босоножки </a>
              <a class="dropdown-item" href="http://localhost/htm/4_4.php"> Сапоги </a>
              <a class="dropdown-item" href="http://localhost/htm/4_12.php"> Аляски </a>
              <a class="dropdown-item" href="http://localhost/htm/4_10.php"> Уги </a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Стельки </a> 
            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"> Сапоги </a>
              <a class="dropdown-item" href="#"> Кеды </a>
              <a class="dropdown-item" href="#"> Кроссовки </a>
              <a class="dropdown-item" href="#"> Сланцы </a>
              <a class="dropdown-item" href="#"> Кроксы </a>
              <a class="dropdown-item" href="#"> Тапочки </a>
              <a class="dropdown-item" href="#"> Шлепанцы </a>
              <a class="dropdown-item" href="#"> Сабо </a>
              <a class="dropdown-item" href="#"> Босоножки </a>
              <a class="dropdown-item" href="#"> Балетки </a>
              <a class="dropdown-item" href="#"> Балетки </a>
              <a class="dropdown-item" href="#"> Бабуши </a>
              <a class="dropdown-item" href="#"> Валенки </a>
              <a class="dropdown-item" href="#"> Вьетнамки </a>
              <a class="dropdown-item" href="#"> Угги </a>
            </div> -->
          </li>
        </ul>
      </div>
    </nav>
	<br/>
	 
	 

	 

<?php 
  $array = '6,3';
  $someJSON = shell_exec('D:\serv\Python38\python.exe test1.py ' .$array);
  $strJsonFileContents = file_get_contents("data.json");
// Convert to array 
  $array1 = json_decode($strJsonFileContents, true);
  //$decoded = preg_replace_callback('/(?:\\\\x)([0-9A-Fa-f]+)/', function($matched) {
    //return chr(hexdec($matched[1]));
  //}, $someJSON);
  //$decoded = substr($decoded, 3, -3);
  //$decoded = str_replace('[', '{"n":[', $decoded);
  //$decoded = str_replace(']', ']}', $decoded);
  //$decoded = substr_replace($decoded, "[", 0, 0);
  //$decoded = substr_replace($decoded, "]", strlen($decoded), 0);
  //$_POST = json_decode($decoded, true);
  $names = $array1[0];
  $pricef1 = $array1[2];
  $pricefall = $array1[3];
  $img = $array1[1];
  $shoes = $array1[5]; 
  $shoes_all = $array1[4]; ?> 
        	<div class="group">
    <div class="item line"></div>
    <div class="item text">Сезонные предложения</div>
    <div class="item line"></div>
	</div>
	<br>
	<br>
  
  

  <div class="row">
  <div class = "col-sm-2">
  </div>
  <div class = "col-sm-8">
<div class="slider slider-for">
  <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[1]?>" alt="Card image cap">
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[2]?>" alt="Card image cap">
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[3]?>" alt="Card image cap">
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[4]?>" alt="Card image cap">
		  </div></div>
  </div>
</div>
  <div class = "col-sm-2">
  </div>
  </div>
<br>
  
  
  <div class="slider slider-nav">
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[1]?>" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title"><?php echo $pricef1[1] ?> Р</h1>
            <h3 class="card-title"><?php echo $names[1] ?></h3>
            <p class="card-text"><?php echo $shoes[1] ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $pricefall[1] ?> Р за пак из <?php echo $shoes_all[1] ?>пар</small></p>
          </div>
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[2]?>" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title"><?php echo $pricef1[2] ?> Р</h1>
            <h3 class="card-title"><?php echo $names[2] ?></h3>
            <p class="card-text"><?php echo $shoes[2] ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $pricefall[2] ?> Р за пак из <?php echo $shoes_all[2] ?>пар</small></p>
          </div>
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[3]?>" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title"><?php echo $pricef1[3] ?> Р</h1>
            <h3 class="card-title"><?php echo $names[3] ?></h3>
            <p class="card-text"><?php echo $shoes[3] ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $pricefall[3] ?> Р за пак из <?php echo $shoes_all[3] ?>пар</small></p>
          </div>
		  </div></div>
    <div><div class="card">
          <img class="card-img-top" src="<?php echo $img[4]?>" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title"><?php echo $pricef1[4] ?> Р</h1>
            <h3 class="card-title"><?php echo $names[4] ?></h3>
            <p class="card-text"><?php echo $shoes[4] ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $pricefall[1] ?> Р за пак из <?php echo $shoes_all[4] ?>пар</small></p>
          </div>
		  </div></div>
  </div>
  </div>
  
  
  <div class="container ">
	  <div class="row align-items-center">
    <div class="col-sm">
      <div class="group">
    <div class="item line"></div>
    <div class="item text">О нас</div>
    <div class="item line"></div>
		</div>
    </div>
    <div class="col-sm align-items-center">
      	<div class="group">
    <div class="item line"></div>
    <div class="item text">Мы на карте</div>
    <div class="item line"></div>
	</div>
	<div class="embed-responsive embed-responsive-1by1">
  <iframe class ="embed-responsive-item" src="https://yandex.ru/map-widget/v1/?um=constructor%3Abd12a9c2f7945b92a8aa53cd8d6dbf0ca15090af580225475e6faf52fe26ce34&amp;source=constructor" width="320" height="240" frameborder="0"></iframe>
</div>
    </div>
  </div>
<div class="fixed-top">
   <div class="row">
   <div class = "col-sm-10">
  </div>
  <div class = "col-sm-2">
  <img src="work.gif" height= "230" width="260">
  </div>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>