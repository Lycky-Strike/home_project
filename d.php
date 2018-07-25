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
      /* сочетание цветов бесподобно, как-будто кнопка загорается */

a.button14 {
  display: inline-block;
  text-shadow: 1px 1px #fff;
  text-decoration: none;
  padding: .3em 1em;
  border: 1px solid #aaa;
  border-radius: 100px;
  outline: none;
  background: #d6dbbf no-repeat;
  background-image:
   linear-gradient(to left, #aaa, #aaa),
   linear-gradient(to left, #feffe8, #feffe8),
   linear-gradient(#feffe8, #d6dbbf);
  background-position: calc(100% - 2.7em) 0, calc(100% - 2.7em + 1px) 0, 0 0;
  background-size: 1px 100%, 1px 100%, auto auto;
  overflow: hidden;
}
a.button14:after {
  content: "\bb";
  position: relative;
  bottom: 0;
  display: inline-block;
  margin-left: 1.4em;
  vertical-align: middle;
  font-family: "Times","Times New Roman","serif","sans-serif","EmojiSymbols";
  font-weight: 700;
  font-size: 140%;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
a.button14:hover {
  background-color: #fdfd9f;
  background-image:
   linear-gradient(to left, #aaa, #aaa),
   linear-gradient(to left, #feffe8, #feffe8),
   linear-gradient(#fffce7, #fdfd9f);
}
a.button14:active:after {
  bottom: -1.2em;
  transition: .3s;
}
    </style>
</head>
<body>
  <?php include 'h.e.a.d.php';?>
  <div  class="transparent">
<div style="margin-left: 50px; margin-right: 50px;">
  <a href="http://htmlbook.ru/" class="button14"><b>html book</b> - удобный справочник html тегов и css команд</a><br>
  <a href="http://php.net/manual/ru/index.php" class="button14">PHP:<b>Руководство по PHP</b> - Manual </a><br>
  <a href="https://getbootstrap.com/" class="button14"><b>Bootstrap</b> - готовые коды для кнопок, pop up-ов и т.д. </a><br>
  <a href="https://putty.org.ru/articles/unix-linux-ref.html" class="button14">Огромный <b>справочник Lunix/Ubuntu</b> команд (подойдет частично и для git bash) </a><br>
  <!--<a href="#" class="button14"> Скачать </a><br>
  <a href="#" class="button14"> Скачать </a><br>
  <a href="#" class="button14"> Скачать </a><br>
  <a href="#" class="button14"> Скачать </a><br>
  <a href="#" class="button14"> Скачать </a><br>
  <a href="#" class="button14"> Скачать </a><br>-->
</div>
</div>
</body>
