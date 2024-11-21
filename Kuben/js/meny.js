//Meny legges inn i variabler. Det kunne være en variabel, men linjeskift avslutter javascript-setninger så for oversiktlighet er den delt på data_a til data_x.
var data_a = '<nav><ul><li><a href="./eksempel_53_include_ekstern_files.php">Home</a><div></div></li><li><a href="./../katalog/invitasjon.html">Invitasjon<span class="caret"></span></a><div></div></li>';
var data_b = '<li><a href="   .html">  [navn]  <span class="caret"></span></a><div><ul><li><a href="./../katalog/festmeny.html">Festmeny</a></li><li><a href="./katalog/drikkevarer.html">Drikkevarer</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li></ul></div></li>';
var data_c = '<li><a href="   .html">  [navn]  <span class="caret"></span></a><div><ul><li><a href="./../katalog/kjolen.html">Kjole</a></li><li><a href="./../katalog/dressen.html">Dress</a></li><li><a href="./../katalog/slipseknute.html">Slips</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li></ul></div></li>';
var data_d = '<li><a href="   .html">  [navn]  <span class="caret"></span></a><div><ul><li><a href="./../katalog/bordmanerer.html">Bordmanerer</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li></ul></div></li>';
var data_e = '<li><a href="   .html">  [navn]  <span class="caret"></span></a><div><ul><li><a href="./../katalog/paameldingsskjema.html">Påmeldingskjema</a></li><li><a href="./../katalog/kart.html">Kart</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li></ul></div></li>';
var data_f = '<li><a href="   .html">  [navn]  </a></li><li><a href="./../katalog/about.html">About</a></li><li><a href="./../katalog/help.html">Help</a></li></ul>';
var data_g = '</nav>';

//Her er utskrift av variablene.
document.write(data_a);
document.write(data_b);
document.write(data_c);
document.write(data_d);
document.write(data_e);
document.write(data_f);
document.write(data_g);
