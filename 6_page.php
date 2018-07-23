<!DOCTYPE html>
<head>
  <title>Home</title>
</head>
<body style="background-color: black">
  <?php include 'h.e.a.d.php';?>
  <div style="margin-left: 250px; margin-right: 250px; background-color: white;
  border-radius: 5px">
<div style="margin-left: 50px; margin-right: 50px;">
  <!-- Put this script tag to the <head> of your page -->
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?157"></script>

  <script type="text/javascript">
    VK.init({apiId: API_ID, onlyWidgets: true});
  </script>

  <!-- Put this div tag to the place, where the Comments block will be -->
  <div id="vk_comments"></div>
  <script type="text/javascript">
  VK.Widgets.Comments("vk_comments", {limit: 20, attach: "*"});
  </script>
</div>
</div>
</body>
