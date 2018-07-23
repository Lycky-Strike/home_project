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
  <!--<div style="border: 1px solid red; padding: 5px;">
  <?php
      $data = array(
          array(
              "id" => 1,
              "visible" => "...",
              "hidden" => "...",
              "name" => "...",
              "date" => "..."
          ),
      );
  ?>
  <?php foreach ($data as $element): ?>
      <div>
          <div class="r-block">
              <div >
                  <p class="r-text">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $element['visible'];?></p>
              <?php if ($element['hidden'] != ""): ?>
                  <p onClick="hide('fld<?php echo $element['id'];?>', 'rew-button<?php echo $element['id'];?>')" id="rew-button<?php echo $element['id'];?>" style="cursor:pointer;" class="reviews_button" >читать далее</p>
              <?php endif; ?>
          </div>
          <div id="fld<?php echo $element['id'];?>" style="display:none;"><p class="r-text"><?php echo $element['hidden'];?></p>
          </div>
          <hr>
          <h4 class="r-name"><?php echo $element['name'];?></h4>
          <p style="color: #5e5e5e"><?php echo $element['date'];?></p>
          </div>
          <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhome.local%2Findex.php&width=109&layout=button_count&action=like&size=large&show_faces=false&share=false&height=21&appId" width="109" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
  <br>
  <?php endforeach;?>
  <br>
  </div>
  <script>
  function hide(r_id, b_id){
  obj = document.getElementById(r_id);
  if(obj){
      if(obj.style.display=='none') obj.style.display='';
      else obj.style.display='none';
  }
  document.getElementById(b_id).style.display='none'
  }
  </script>
</div>-->
</div>
</div>
</body>
