<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majstor Mika</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/vegas.min.css">


</head>

<body>

	<header class='onama'>
		<h2><a href="index.php"><img src="assets/img/logo.png" width="70px"></a></h2>
		<nav>
			<li><a href="index.php">Početna</a></li>
			<li><a href="">Tim</a></li>
			<li><a href="">Lokacije</a></li>
			<li><a href="">Zakaži</a></li>
		</nav>
	</header>


	<section class="pocetna">
		<div class="background-image"></div>
		<h1><i>"Neš ti ovog bemvea više upalit. Ja sam njemu lamelu polomio."</i></h1>
		<h3>-Majstor Mika-</h3>
		<a href="" class="btn">Zakaži popravku</a>

	</section>


	<section class="drugi">
		<h3 class="title">Naš tim</h3>
		<p>Upoznaj tim koji pravi magiju</p>
	</section>
	<section class="our-team">

		<ul class="osobaizliste">
			<li class="meetourteam">
				<div class="osoba">
					<figure><img src="assets/img/Milos_levo.jpg" class="slikaOnama"></figure>
					<h3><a href="">Miloš Ninković</a></h3>
					<p>Šegrt</p>
				</div>
			</li>
			<li class="meetourteam">
				<div class="osoba">
					<figure><img src="assets/img/Milos.jpg" class="slikaOnama"></figure>
					<h3><a href="">Miloš Ninković</a></h3>
					<p>Glavni majstor</p>
				</div>
			</li>
			<li class="meetourteam">
				<div class="osoba">
					<figure><img src="assets/img/Milos_desno.jpg" class="slikaOnama"></figure>
					<h3><a href="">Miloš Ninković</a></h3>
					<p>Šegrtov pomoćnik</p>
				</div>
			</li>
		</ul>
		</div>
	</section>


	<section class="our-work">
		<h3 class="title">Naše radionice</h3>
		<p>Majstor Mika je servis koji popravlja isključivo bembare. Povoljni nismo jer "ako imate za BMW, imate i za popravku". Nalazimo se na 3 lokacije:
		</p>

		<div id="mape">
			<div id="li">
				<iframe
				src="https://maps.google.com/maps?q=odeska%201&t=&z=15&ie=UTF8&iwloc=&output=embed"
					width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<h5>Odeska 1, Beograd</h5>
			</div>
			<div id="li">
				<iframe
				src="https://maps.google.com/maps?q=drvarska%205%2C%20ni%C5%A1&t=&z=15&ie=UTF8&iwloc=&output=embed"
					width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<h5>Drvarska 5, Niš</h5>
			</div>
			<div id="li">
				<iframe
				src="https://maps.google.com/maps?q=pavla%20simi%C4%87a%2010%2C%20novi%20sad&t=&z=13&ie=UTF8&iwloc=&output=embed"					width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<h5>Pavla Simića 10, Novi Sad</h5>
			</div>
		</div>
		</div>

	</section>


	<section>

		<form method="post" action="connect.php">

						Ime i prezime
						<input type="text" id="ime" name="ime" placeholder="Unesi ime i prezime">

						E-mail
						<input type="email" id="email" name="email" placeholder="Unesi e-mail adresu">

						Broj telefona
						<input type="tel" id="telefon" name="telefon" placeholder="Unesi broj telefona">

						Datum popravke
						<input type="date" id="datum" name="datum" placeholder="Unesi datum popravke">

						Model
						<select id="modeli" name="model">
							<option value="x6">X6</option>
							<option value="530d">Serija 5</option>
							<option value="m8">M8</option>
						  </select>

						Kratak opis šta si pokvario na bemveu
						<textarea rows="3" id="message" name="msg" placeholder="Unesi podatke o kvaru"></textarea>

						<button type="submit" class='btn' name="kliknuto">Zakaži popravku BMW-a</button>
			</form>

		<br>
		</section>
		
		<div class="footer">
			<ul>
			  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
			  <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
			  <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li>			</ul>
			<p>Od <i class="fa fa-heart fa-fw fa-lg"></i> vaš Majstor Mika</p>
		  </div>


		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="http://code.jquery.com/jquery.min.js"></script>
		  <script src="assets/js/vegas.min.js"></script>
		  <script src="assets/js/script.js"></script>

</body>

</html>