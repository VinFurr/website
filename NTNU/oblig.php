  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task page</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="icon" href="./icons/favicon.ico">
    <style media="screen">
      button {
        height: 33px;
        width: 200px;
      }
    </style>
  </head>
  <body class="oblig_text_color oblig_background">
    <div class="oblig_top_background">
      <?php
        include ("./navbar.php");
        include ("./music.php");
      ?>

      <center>
        <h1>Obligatory deliveries</h1>
        <table>
          <tr>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td>1. October 2020<br><a href="oblig/oblig1/index.html"><button type="button">Oblig1</button></a></td>
            <td>4. November 2020<br><a href="oblig/oblig2/index.html"><button type="button">Oblig2 <br>(available in december 2020)</button></a></td>
            <td><br><a href=""><button type="button"></button></a></td>
          </tr>
          <tr>
            <td><br><a href=""><button type="button"></button></a></td>
            <td><br><a href=""><button type="button"></button></a></td>
            <td><br><a href=""><button type="button"></button></a></td>
          </tr>
          <tr>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
          </tr>
          <tr>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
            <td><br><a href="./tasks/"><button type="button"></button></a></td>
          </tr>
        </table>
      </center>
    </div>
    <?php
      include ("./footer.php");
    ?>
  </body>
</html>
