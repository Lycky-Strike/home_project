<!DOCTYPE html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
</head>
<body style="background-color: black">
  <?php include 'h.e.a.d.php';?>
  <div style="margin-left: 250px; margin-right: 250px; background-color: white;
  border-radius: 5px">
<div style="margin-left: 50px; margin-right: 50px;">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-comments" data-href="http://home.local/5_page.php" data-width="500" data-numposts="30"></div>
</div>
</div>
</body>
