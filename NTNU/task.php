  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task & Oblig page</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="icon" href="./icons/favicon.ico">
    <style media="screen">
      button {
        height: 33px;
        width: 200px;
      }
    </style>
  </head>
  <body class="task_text_color task_background">
    <div class="task_top_background">
      <?php
        include ("./navbar.php");
        include ("./music.php");
      ?>

      <center>
        <h1 class="task_oblig_head_color sacramento">Tasks and Obligatory deliveries</h1>
        <h2>Tasks</h2>
        <table>
          <tr>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td>1 sep 2020<br><a href="./tasks/lab2/lab_session_2_no_css.html"><button type="button">Lab session 2 - no CSS</button></a></td>
            <td>1 sep 2020<br><a href="./tasks/lab2/lab_session_2.html"><button type="button">Lab session 2</button></a></td>
            <td>8 sep 2020<br><a href="./tasks/lab3/lab3-ex1/index.html"><button type="button">Lab session 3 ex1</button></a></td>
          </tr>
          <tr>
            <td>8 sep 2020<br><a href="./tasks/lab3/lab3-ex2/index.html"><button class="not_done" type="button">Lab session 3 ex2*</button></a></td>
            <td>15 sep 2020<br><a href="./tasks/lab4/lab4-ex1/index.html"><button type="button">Lab session 4 ex1</button></a></td>
            <td>15 sep 2020<br><a href="./tasks/lab4/lab4-ex2/index.html"><button class="not_done" type="button">lab session 4 ex2*</button></a></td>
          </tr>
          <tr>
            <td>22 sep 2020<br><a href="./tasks/lab5/lab5-ex1/ex1.html"><button type="button"></button></a></td>
            <td>29 sep 2020<br><a href="./tasks/"><button type="button"></button></a></td>
            <td>6 oct 2020<br><a href="./tasks/"><button type="button"></button></a></td>
          </tr>
          <tr>
            <td>13 oct 2020<br><a href="./tasks/"><button type="button"></button></a></td>
            <td>20 oct 2020<br><a href="./tasks/"><button type="button"></button></a></td>
            <td>27 oct 2020<br><a href="./tasks/lab10/lab10-ex1/index.html"><button type="button">Lab session 10 ex1</button></a></td>
          </tr>
        </table>

        <h2>Obligatory deliveries</h2>
        <table>
          <tr>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td>1. October 2020<br><a href="oblig/oblig1/index.html"><button type="button">Oblig1</button></a></td>
            <td>4. November 2020<br><a href="oblig/oblig2/index.html"><button type="button">Oblig2 <br></button></a></td>
            <td>14. December<br><a href="oblig/oblig3/index.html"><button type="button">Oblig3</button></a></td>
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
