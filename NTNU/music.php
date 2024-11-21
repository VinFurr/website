<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <script type="text/javascript">
    function RandomMusic() {
      var MyMusic = new Array();
      MyMusic[0] = "./music/botw_high_item_get.mp3";
      MyMusic[1] = "./music/botw_item_get.mp3";
      MyMusic[2] = "./music/botw_key_item_get.mp3";
      MyMusic[3] = "./music/botw_korok_fanfare.mp3";
      MyMusic[4] = "./music/botw_new_location.mp3";
      MyMusic[5] = "./music/botw_puzzle_solved.mp3";

      var rnd = Math.floor(Math.random() * MyMusic.length);

      document.write('<audio autoplay><source src="'+MyMusic[rnd]+'"></audio>');
    }

  </script>
  <script type="text/javascript">
  RandomMusic();
</script>
  </body>
</html>
