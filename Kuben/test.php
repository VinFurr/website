<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css"href="./css/index.css">
    <style>
      body{
        text-align: center;
        background-color: black;
        background-image: url();
      }

    </style>
  </head>
  <body>
    <?php
    include ("./navbar.php")
    ?>
    <font color=white type=Arial>
      <center>
    <table>
      <tr>
        <th>klokeslett</th>
        <th><font color=black>________</th>
        <th>musikk</th>
      </tr><tr>
        <td>23:00 - 06:00</td>
        <td> </td>
        <td>[Ingen]</td>
      </tr><tr>
        <td>06:00 - 07:00</td>
        <td> </td>
        <td>Jeg har tro p&aring; deg</td>
      </tr><tr>
        <td>07:00 - 08:00</td>
        <td> </td>
        <td>Nintendo eShop December 2018</td>
      </tr><tr>
        <td>08:00 - 09:00</td>
        <td> </td>
        <td>Nintendo eShop January 2019</td>
      </tr><tr>
        <td>09:00 - 10:00</td>
        <td> </td>
        <td>Poliwrath River</td>
      </tr><tr>
        <td>10:00 - 11:00</td>
        <td> </td>
        <td>Through the Sea of Time</td>
      </tr><tr>
        <td>11:00 - 12:00</td>
        <td> </td>
        <td>Dont Ever Forget</td>
      </tr><tr>
        <td>12:00 - 13:00</td>
        <td> </td>
        <td>File Select</td>
      </tr><tr>
        <td>13:00 - 14:00</td>
        <td> </td>
        <td>Great Canyon</td>
      </tr><tr>
        <td>14:00 - 15:00</td>
        <td> </td>
        <td>Hooked</td>
      </tr><tr>
        <td>15:00 - 16:00</td>
        <td> </td>
        <td>Bomb Rush Blush</td>
      </tr><tr>
        <td>16:00 - 17:00</td>
        <td> </td>
        <td>Ink Me Up</td>
      </tr><tr>
        <td>17:00 - 18:00</td>
        <td> </td>
        <td>Now or Never</td>
      </tr><tr>
        <td>18:00 - 19:00</td>
        <td> </td>
        <td>Splattack!</td>
      </tr><tr>
        <td>19:00 - 20:00</td>
        <td> </td>
        <td>Tide Goes Out</td>
      </tr><tr>
        <td>20:00 - 21:00</td>
        <td> </td>
        <td>Fresh Start</td>
      </tr><tr>
        <td>21:00 - 22:00</td>
        <td> </td>
        <td>Serene Village</td>
      </tr><tr>
        <td>22:00 - 23:00</td>
        <td> </td>
        <td>Lower Brine Cave</td>
      </tr>
    </table>
  </center>
<?php

function is_between_times( $start = null, $end = null ) {
    if ( $start == null )
      $start = '00:00';
    if ( $end == null )
      $end = '23:59';
    return ( $start <= date( 'H:i' ) && date( 'H:i' ) <= $end );
}


if ( is_between_times( '23:00', '23:59' ) ) {
    print 'musikk kommer snart';}
if ( is_between_times( '00:00', '05:59' ) ) {
    print 'g&aring; og sov!';}
if ( is_between_times( '06:00', '06:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/film/Zoroark, illusjonens mester - Jeg har tro paa deg.m4a"></audio>';}
if ( is_between_times( '07:00', '07:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/nintendo/Nintendo eShop December 2018.mp3"></audio>';}
if ( is_between_times( '08:00', '08:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/nintendo/Nintendo eShop January 2019.mp3"></audio>';}
if ( is_between_times( '09:00', '09:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PSMD - Poliwrath River.mp3"></audio>';}
if ( is_between_times( '10:00', '10:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PMDE, PSMD - Through the Sea of Time.mp3"></audio>';}
if ( is_between_times( '11:00', '11:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PMDE - Dont Ever Forget.mp3"></audio>';}
if ( is_between_times( '12:00', '12:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PMD - File Select.mp3"></audio>';}
if ( is_between_times( '13:00', '13:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PMD, PSMD - Great Canyon.mp3"></audio>';}
if ( is_between_times( '14:00', '14:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Hooked - Splatoon.mp3"></audio>';}
if ( is_between_times( '15:00', '15:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Bomb Rush Blush [Squid Sisters] - Splatoon.mp3"></audio>';}
if ( is_between_times( '16:00', '16:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Ink Me Up [Squid Sisters] - Splatoon.mp3"></audio>';}
if ( is_between_times( '17:00', '17:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Now or Never [Squid Sisters] - Splatoon.mp3"></audio>';}
if ( is_between_times( '18:00', '18:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Splattack! (Squid Squad) - Splatoon.mp3"></audio>';}
if ( is_between_times( '19:00', '19:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon/Tide Goes Out [Squid Sisters] - Splatoon.mp3"></audio>';}
if ( is_between_times( '20:00', '20:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/splatoon 2/Fresh Start Squid Sisters - Splatoon 2 - Music.mp3"></audio>';}
if ( is_between_times( '21:00', '21:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PSMD - Serene Village.mp3"></audio>';}
if ( is_between_times( '22:00', '22:59' ) ) {
    print '<audio controls loop autoplay><source src="./musikk/PMD/PMDE - Lower Brine Cave.mp3"></audio>';}
 ?>
  </body>
</html>
