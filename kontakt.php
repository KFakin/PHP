<?php
print '
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

<p><b>Molimo ispuniti sve tražene podatke!</p></b>

';
?>