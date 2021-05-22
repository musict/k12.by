<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Прайс. Цены на услуги мастера маникюра и мастера-косметика</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="description" content="Перечень оказываемых косметических услуг и цены. Маникюр, депиляция, чистка лица. Работаем в Молодечно">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles_responsive.css">
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="canonical" href="https://k12.by/price"/>

</head>
<body>

  <?php include('header.php'); ?>

  <div class="super_container">
    <div class="blog">
      <div class="container">

        <div class="row text-center ">

          <div class="col-lg-6">
              <img class="img-fluid img-thumbnail image" src="images/price/price6.jpg" width="250" height="250" alt="Косметология Молодечно">
          </div>
          
          <div class="col-lg-6">
              <img class="img-fluid img-thumbnail image" src="images/price/price7.jpg" width="250" height="250" alt="Косметология Молодечно">
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>



  <script type="text/javascript" src="https://beauty.dikidi.net/assets/js/widget_record/widget2.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap-4.1.2/popper.js"></script>
  <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/image-comparison-slider-master/main.js"></script>
  <script src="js/services.js"></script>


  <script type="text/javascript">

  $(document).ready(function() { // Ждём загрузки страницы

    $(".image").click(function(){	// Событие клика на маленькое изображение
      var img = $(this);	// Получаем изображение, на которое кликнули
      var src = img.attr('src'); // Достаем из этого изображения путь до картинки
      $("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
      "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
      "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
      "</div>");
      $(".popup").fadeIn(200); // Медленно выводим изображение
      $(".popup_bg").click(function(){	// Событие клика на затемненный фон
        $(".popup").fadeOut(200);	// Медленно убираем всплывающее окн
        setTimeout(function() {	// Выставляем таймер
          $(".popup").remove(); // Удаляем разметку всплывающего окна
        }, 200);
      });
    });

  });

  </script>



</body>
</html>
