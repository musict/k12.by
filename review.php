<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Отзыв</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Оставить отзыв или предложение о работе мастера по маникюру, мастера косметика, кабинета">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/contact.css">
  <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

  <?php include('header.php'); ?>

  <div class="super_container">

    <!-- Contact -->

    <div class="contact">
      <div class="container">
        <div class="row">

          <!-- Contact Form -->
          <div class="col-lg-6">
            <div class="contact_form_container">
              <h5>Сделать наши услуги лучше можно оставив отзыв или предложение: <br><br><br></h5>
              <form action="sendReview.php" method="post" class="contact_form" id="contact_form">
                <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                  <!-- <input type="textarea" name="message" class="contact_input" placeholder="Сообщение" required="required"> -->
                  <textarea name="message" rows="8" cols="80"></textarea>
                </div>
                <button class="button button_1 contact_button trans_200">Отправить</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(53622298, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/53622298" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->

  <script type="text/javascript" src="https://beauty.dikidi.net/assets/js/widget_record/widget2.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap-4.1.2/popper.js"></script>
  <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/jquery-datepicker/jquery-ui.js"></script>
  <script src="js/custom.js"></script>

  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

 
</body>
</html>
