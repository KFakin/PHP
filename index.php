<?php
	#show errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
	# Kada kliknete na link radite slanje vrijednosti kroz varijablu. U tom slučaju morate napraviti globalnu varijablu koja će dohvatiti taj podatak. 
	# Da ne pišete svaki puta $_GET['menu'] napravili smo ovdje novu varijablu koja će primiti vrijednost klika na link i zove se $menu
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Naslov</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Kristijan Fakin">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Style.css"/>
	</head>
	<body>

	<div class="banner"></div>
	
	<?php include ("nav.php");
	print '<main>';
	if (!isset($menu) || $menu == 1) {
		print '
		<h1>Početna stranica - Vijesti projektnog zadatka</h1>
<h2> Internet preglednici</h2>
<figure>
  <img src="download.png" alt="Internet" style="width:20%;float:left">
</figure>
<main>
  <h1>Web Browsers</h1>
  <p>Google Chrome, Firefox, and Internet Explorer are the most used browsers today.</p>

  <article>
    <h1>Google Chrome</h1>
    <p>Google Chrome is a free, open-source web browser developed by Google,
    released in 2008.</p>
  </article>

  <article>
    <h1>Internet Explorer</h1>
    <p>Internet Explorer is a free web browser from Microsoft, released in 1995.</p>
  </article>

</main>

<figcaption class="figcaption">Slika 1. Simbolizira jedan od loga Interneta</figcaption>

<br/>
Izvor: <a href="https://en.wikipedia.org/wiki/">Wikipedia</a>';
	}
	else if ($menu == 2) {
		print '
		<h1>Novosti</h1>
<hr>
<figure>
  <img src="opera.png" alt="Internet" style="width:6%;float:left">
</figure>
<main>
  <h1><a href="https://www.opera.com/">Nova verzija Opera browsera</a></h1>
  <p>Opera je jedan od najbržih pretraživača i u nekim zemljama je čak i među prva tri najkorištenija pretraživača uz Google Chrome i Microsoft 
  Internet Explorer. <a href="https://www.opera.com/">Više o članku...</a></p>
 <i><p>21.Listopad.2018.</i></p>
 </br><hr>
 
 <figure>
  <img src="mozzilla.jpg" alt="Internet" style="width:6%;float:left">
</figure>

  <h1><a href="https://www.mozilla.org/">Nova verzija Mozzilla Firefoxa</a></h1>
  <p>Firefox je besplatni web preglednik otvorenoga koda. Iznimno je popularan zbog svoje brzine i lakoće korištenja. 
  Firefox je moguće koristiti na stolnim računalima, prijenosnim računalima i mobilnim uređajima kao što su pametni telefoni i tableti, 
  a kompatibilan je s Windowsom, OS X-om, Linuxom te Androidom i Firefox OS-om. <a href="https://www.mozilla.org/">Više o članku...</a></p>
 <i><p>21.Listopad.2018.</i></p>
 </br><hr>
 
  <figure>
  <img src="ex.jpg" alt="Internet" style="width:6%;float:left">
</figure>

  <h1><a href="https://www.microsoft.com/">Nova verzija Internet Explorera</a></h1>
  <p>Microsoft Internet Explorer postoji već dugo vremena, a njegova novija izdanja okreću nove listove. Zadnja verzija je izdana kao dio Microsoft 
  Windows 7 i Microsoft Windows 8 operativnih sustava, 
  a dizajniran je tako da radi bez problema sa ovim operativnim sustavima nove generacije.<a href="https://www.microsoft.com/">Više o članku...</a></p>
 <i><p>21.Listopad.2018.</i></p>
 </br><hr>

  <figure>
  <img src="cro.jpg" alt="Internet" style="width:6%;float:left">
</figure>

  <h1><a href="https://www.google.com/chrome/">Nova verzija Google Chroma</a></h1>
  <p>Google Chrome je najpopularniji web preglednik na svijetu. Razvio ga je Google i poznat je po svojoj jednostavnosti, stabilnom radu i lakoći korištenja. U potpunosti je besplatan te ga je vrlo lako preuzeti i instalirati. Korisničko sučelje je minimalističke prirode te prikazuje samo značajke koje su korisniku ključne. 
  Preglednik se jako služi karticama unutar prozora, 
  koje je lako otvarati, zatvarati i čak povlačiti unutar istog prozora ili između različitih prozora.<a href="https://www.google.com/chrome/">Više o članku...</a></p>
 <i><p>21.Listopad.2018.</i></p>
 </br><hr>
 
   <figure>
  <img src="neto.jpg" alt="Internet" style="width:6%;float:left">
</figure>

  <h1><a href="https://isp.netscape.com/">Nova verzija Netscape navigatora</a></h1>
  <p>Nakon više od dvije godine objavljena je nova inačica nekoć popularnog web preglednika - Netscape Navigator 9.0. Iako nova, 
  zasada beta verzija nema nikakvih bitnijih inovacija u odnosu na ostale preglednike, z
  asigurno može konkurirati rivalima Firefoxu i Internet Exploreru.<a href="https://isp.netscape.com/">Više o članku...</a></p>
 <i><p>21.Listopad.2018.</i></p>
 </br><hr>
</main>';
		
		
	}
	else if ($menu == 3) {
		print '
		<h1>Kontakt</h1>

<iframe id="center_lokacija" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.1791110375743!2d16.00884611556897!3d45.80767117910652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6350e5ba7d1%3A0x54dbb970693a72d5!2sLivadarski+ul.+odv.+IV+10%2C+10000%2C+Zagreb!5e0!3m2!1sen!2shr!4v1540203532421" allowfullscreen></iframe>
<hr>
<form name="input" action="data.php" method="POST">
	<p><b>Ime:</p></b>
    <input type="textfield" name="username" /><br/>
	
	<p><b>Prezime:</p></b>
    <input type="textfield" name="username" /><br/>
	
	<p><b>Email:</p></b>
	<input type="email" name="email" /><br/>

	<p><b>Država:</p></b>
<select>
  <option value="hrvatska">Hrvatska</option>
  <option value="slovenija">Slovenija</option>
  <option value="BIH">Bosna i Hercegovina</option>
  <option value="srbija">Srbija</option>
  <option value="CG">Crna Gora</option>
  <option value="Kosovo">Kosovo</option>
  <option value="Ostalo">Ostalo</option>
</select>

<p><b>Molimo ispuniti sve tražene podatke!</p></b>';
		
	}
		else if ($menu == 4) {
		print '
		<h1>O Nama</h1>
<h2> Internet preglednici</h2>
<figure>
  <video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
</figure>
<main>
  <h1>Web Browsers</h1>
  <p>Google Chrome, Firefox, and Internet Explorer are the most used browsers today.</p>

  <article>
    <h1>Google Chrome</h1>
    <p>Google Chrome is a free, open-source web browser developed by Google,
    released in 2008.</p>
  </article>

  <article>
    <h1>Internet Explorer</h1>
    <p>Internet Explorer is a free web browser from Microsoft, released in 1995.</p>
  </article>

<br/>
Izvor: <a href="https://en.wikipedia.org/wiki/">Wikipedia</a>';
			
	}
		else if ($menu == 5) {
		print '
		<h1>Galerija</h1>

<div class="gallery">
  <a target="_blank" href="cro.jpg">
    <img class="gallery_img" src="cro.jpg" alt="chrome" width="400" height="200">
  </a>
  <div class="desc">Preglednik Google Chrome</div>
</div>

<div class="gallery">
  <a target="_blank" href="ex.jpg">
    <img class="gallery_img" src="ex.jpg" alt="explorer" width="400" height="200">
  </a>
  <div class="desc">Preglednik Internet Explorer</div>
</div>

<div class="gallery">
  <a target="_blank" href="mozzilla.jpg">
    <img class="gallery_img" src="mozzilla.jpg" alt="mozzilla" width="400" height="200">
  </a>
  <div class="desc">Preglednik Mozzilla Firefox</div>
</div>

<div class="gallery">
  <a target="_blank" href="opera.png">
    <img class="gallery_img" src="opera.png" alt="Mountains" width="400" height="200">
  </a>
  <div class="desc">Preglednik Opera</div>
</div>';
		
	}
	else if ($menu == 6) {
		print '
		<h1>Registration</h1>';
		// ovdje ide Registration
		include ("registration.php");
	}
	else if ($menu == 7) {
		print '
		<h1>Sign In</h1>';
		// ovdje ide Sign In
		include ("signin.php");
	}
	print '
	</main>';
	include ("footer.php");?>
	
	</body>
</html>