<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./icons/favicon.ico">
  </head>
  <!--
  Home page: This is the first page users will see. Here, you can include as
  many relevant information as you want to but, at least, it must contain:
    o An image and a description about you. The description must use
      different semantic tags.

        § Cite your favourite book, essay, poem, song, painting or
          creative work in general. -ok

        § Quote a small snippet from the chosen creative work (text).

    o A list of hobbies.

    o (*) Anything else you want to remark (remember, this is the first
      page users will read and therefore you
-->
  <body>
    <div class="home">
      <?php
        include ("./navbar.php");
        include ("./music.php");
      ?>
      <div class="top_container">
        <h1 class="sacramento home_font_color">I'm Vincent</h1>
        <h2 class="home_font_color" >a web <span class="underline">designer</span></h2>
        <img class="sml_img" src="./images/crystal.png" alt="crystal.png">
        <img class="lrg_img" src="./images/crystal.png" alt="crystal.png">
        <img class="sml_img" src="./images/crystal.png" alt="crystal.png">
      </div>
    </div>
    <div class="middle_container">
      <img class="home_image" src="./images/vincent.jpg" alt="vincent.jpg">
      <h2>Hi.</h2>
      <p>I'm a web <strong>designer</strong> currently based in Gjøvik, Norway. </p>
      <cite>
        Fight, Fight for what you believe in<br>
        Don't give up your dreams in vein<br>
        Try; Re-Try to do the best you can<br>
        Unleash The Power
      </cite>

    </div>
    <div class="home">
    <?php
      include ("./bottom.php")
    ?>
    </div>
  </body>
</html>
