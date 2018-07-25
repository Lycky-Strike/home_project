<!DOCTYPE html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <style>
     body {
      background: url(/art/ikt.jpg); /* Цвет фона и путь к файлу */
      color: #fff; /* Цвет текста */
      background-size: 100%;
     }
        body {
         background: url(/art/ikt.jpg) 100%; /*no-repid;*/ /* Цвет фона и путь к файлу */
         color: #fff; /* Цвет текста */
         background-size: 100%;
        }
        .transparent {
       background-color: rgba(0, 0, 0, 0.5); /* Цвет фона и значение прозрачности */
       padding: 10px; /* Поля вокруг текста */
       color: #fff; /* Цвет текста */
       margin-left: 250px;
       margin-right: 250px;
       border-radius: 5px
      }
    </style>
</head>
<body>
  <?php include 'h.e.a.d.php';?>
  <div  class="transparent">
    <div style="margin-left: 100px; margin-right: 50px;">
<div style="margin-left: 50px; margin-right: 50px;">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://mm.ab-test.online/a.php" data-width="500" data-numposts="15"></div></div>
</div>
</div>
</body>
