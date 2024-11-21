<?php
print '<ul>
	<li><a href="./index.php"       target="">Hjem</a></li>
	<li><a href="./musikk.php"      target="">Musikkliste</a></li>
	<li><a href="./splatoon.php"    target="">Splat</a></li>
	<li class="dropdown">
		<a href="arbeid.php" class="dropbtn">Arbeid... &#x25BC;</a>
		<div class="dropdown-content">
			<form name="personal" action="./arbeid.php" method="POST">
				<input type="submit" size="10" style="height:33px;width:200px" value="Oppgaver" name="oppg"><br>
	      <input type="submit" size="10" style="height:33px;width:200px" value="Oppgaveark" name="oppga"><br>
	      <input type="submit" size="10" style="height:33px;width:200px" value="Pr&oslash;ver" name="pro"><br>
	      <input type="submit" size="10" style="height:33px;width:200px" value="Diverse" name="div">
			</form>
<!--			<a href="#" target=""> Oppgaver</a>
			<a href="#" target=""> Oppgaveark</a>
			<a href="#" target=""> Pr&oslash;ver</a>
			<a href="#" target=""> Diverse</a>
-->
	</li>
	<li><a href="./vincent.php"    target="">Om meg</a></li>
</ul>';?>
