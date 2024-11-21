<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./icons/favicon.ico">
  </head>
  <body class="home_text_color home_background">
    <div class="home_top_background">
      <?php
        include ("./navbar.php");
        include ("./music.php");
      ?>

      <div class="top_container">
        <h1 class="sacramento home_head_color ">I'm Vincent</h1>
        <h2 class="home_text_color" >a web <span class="underline">designer</span></h2>
      </div>
    </div>
    <div class="middle_container">
      <img class="home_image" src="./images/vincent.jpg" alt="vincent.jpg">
      <h2 class="home_head_color">Hi.</h2>
      <p>I am a web <strong>designer</strong> currently based in Gjøvik, Norway. </p>
      <p>I like computers, technology and I believe that <em>everything</em> might be possible if there is enough passion for it.</p>
      <p>I also have different hobbies and interests during my freetime and i also like to listen to music.</p>
    </div>
    <div class="bottom_container">
      <hr>
      <center><a href="websiteProjects\project1"><h2 style="margin:0px;">Click here to see my newest website project!</h2><p>(still in development)</p>
      </a></center>
      <div>
        <h2 class="center home_head_color" id="hobbies">Hobbies & interests</h2>
        <div class="card">
          <img class= "skill_image_left" src="./images/paw_icon.png" alt="paw_icon.png">
          <h3>Furry</h3>
          <p>I have really big interests in anthronoprhical animals and I am one what people considers a furry.
            Although there is much hate against furries on internet, i am not afraid to let the world know who i am and all the hate against the furry comunnity is also not deserved</p>
        </div>
        <div class="card">
          <img class= "skill_image_right" src="./images/motherboard.png" alt="motherboard.png">
          <h3>PC building</h3>
          <p>Builing a desktop computer is something i have good experience with.
            Assembling a computer with different parts is something that interests me and i love how something i made can be so useful</p>
        </div>
        <div class="card">
          <img class= "skill_image_left" src="./images/piano.png" alt="piano.png">
          <h3>Piano</h3>
          <p>I sometimes play piano in my freetime. I just cant describe how it feels to play beautiful music with my own hands and i can already play <del>6</del> <ins>7</ins>different songs without notes</p>
        </div>
      </div>
    </div>
    <?php
      include ("./footer.php");
    ?>
  </body>
</html>
