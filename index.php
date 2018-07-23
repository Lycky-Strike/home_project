<!DOCTYPE html>
<head>
  <title>ART LIFE</title>
</head>
<body style="background-color: black">
  <?php include 'h.e.a.d.php';?>
  <div style="margin-left: 250px; margin-right: 250px; background-color: white;
  border-radius: 5px">
     <br>
<h1 align="centr">&nbsp;Рады видеть вас на ART LIFE !</h1>
<p>&nbsp;&nbsp;&nbsp;<img style="float: left; margin: 0px 10px 10px 0px;" src="/art/logo3.jpg" width="190" height="190">&nbsp;<button style="background-color: #48E0DD; border-radius: 5px"><a href="https://vk.com/eskizium">К примеру вот одна из самых популярнейших групп вконтакте по данной теме</a></button><br><br><button style="background-color: #48E0DD; border-radius: 5px"><a href="https://vk.com/black_field">Для любителей черного есть всякие ванильные паблики с черными картинками по типу этой</a></button></p>
<br><br>
<div style="margin-left: 50px; margin-right: 50px;">
  <div style="border: 1px solid red; padding: 5px;">
  <?php
      $data = array(
          array(
              "id" => 1,
              "visible" => "Немного о Line art
            Линейное искусство или рисование линии - это любое изображение, состоящее из четких прямых или изогнутых линий, расположенных на фоне (обычно простого), без оттенков в тени (темноте) или оттенке ( цвет ) для представления двумерных или трехмерных объектов. Линейное искусство может использовать линии разных цветов, хотя линейное искусство обычно монохроматично. Линейное искусство подчеркивает форму и контур , цвет, затенение и текстуру . Тем не менее, области сплошного пигмента и точки могут также использоваться в дополнение к линиям. Линии в части линейного искусства могут иметь всю ширину (как в некоторых рисунках карандаша), нескольких (нескольких) постоянных ширин (как в технических иллюстрациях ), или свободно изменяющейся ширины (как при работе с кистью или гравировке ).",
              "hidden" => "Линейное искусство может иметь тенденцию к реализму (как и в большинстве работ Гюстав Доре ), или это может быть карикатура , мультфильм , идеограф или символ.
              До развития фотографии и полутонов линейное искусство было стандартным форматом иллюстраций, которые будут использоваться в печатных изданиях, с использованием черных чернил на белой бумаге. С помощью либо штриховки, либо штриховки можно смоделировать оттенки серого.
              Один из самых фундаментальных элементов искусства - это линия. Важной особенностью линии является то, что она указывает край двумерной (плоской) формы или трехмерной формы. Форма может быть указана с помощью контура, и трехмерная форма может быть обозначена контурными линиями .",
              "name" => "Dan Snider",
              "date" => "29.07.2018"
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 2,
            "visible" => "На аукционе в городе Упсала (Швеция) была продана картина Айвазовского Битва за Бомарзунд, написанная художником в 1858 году, которую случайно нашли среди старых вещей. Владелец картины и не догадывался о ценности полотна, долгие годы украшавшего интерьер его дома.

Настоящая цена картины была установлена, когда ее владелец, шведский пенсионер, захотел избавиться от ненужных ему вещей и предложил их для продажи в местный аукционный дом Метрополь. Среди различных предметов была картина, которая осталась ему от покойной жены.",
            "hidden" => "олотно выставили на аукцион по стартовой стоимости около полутора тысяч долларов. Но лот вызвал огромный ажиотаж, и торги были приостановлены. Аукционисты Метрополя показали холст экспертам другого аукционного дома, занимающегося продажами картин русских художников. Эксперты установили, что картина принадлежит кисти Ивана Айвазовского.

Картину снова выставили на аукцион, и ее купил русский коллекционер, имя которого не называется, за сумму, эквивалентную 1, 2 млн. долларов.",
            "name" => "Иван Айвазовский, Битва за Бомарзунд",
            "date" => "Иван Айвазовский, Битва за Бомарзунд",
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 3,
            "visible" => "Фонд -Гала - Сальвадор Дали- купил -Пейзаж с загадочными элементами- кисти знаменитого художника-сюрреалиста за 7, 8 млн. евро. Это - рекордная для Фонда цена за картину Дали. Фонд приобрел картину у коллекционера, имя которого не называется.

-Пейзаж с загадочными элементами- размером около 60х73 см датируется 1934 годом. Дали изобразил на полотне голландского художника Яна Вермеера, пишущего -загадочный- пейзаж, а также самого себя в детстве.",
            "hidden" => "В марте этого года Фонд уже совершил крупное приобретение, купив за 4, 7 млн. евро картину Сальвадора Дали -Мед слаще крови-.",
            "name" => "Сальвадор Дали. -Пейзаж с загадочными элементами-",
            "date" => "20.07.2018"
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 4,
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 5,
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 6,
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 7,
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 8,
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
</div>
<div style="margin-left: 50px; margin-right: 50px;">
<div style="border: 1px solid red; padding: 5px;">
<?php
    $data = array(
        array(
            "id" => 9,
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
</div>
</div>
<br>
</div>
</body>
