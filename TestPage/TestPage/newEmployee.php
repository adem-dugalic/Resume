<?php

	require 'dbconfig/config.php';
	session_start();
	if(!isset($_SESSION['active'])) 
  header("Location: index.php");
	$counter=$_SESSION['cont'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Employee</title>
	<link rel="stylesheet" href="css/newEmployeestyle.css" type="text/css">
	
</head>
<body>
<!-- Side navigation bar-->
<aside>
  <header>
    <div><img class="header-logo" src="img/IUSlogo2.png"/>
      <p class="section-title">WELCOME 
			<?php echo $_SESSION['username'] ?> 
    <a href="homepage.php">
    <div class="notification-box">
    <span class="notification-count"><?php echo $counter ?></span>
    <div class="notification-bell">
      <span class="bell-top"></span>
      <span class="bell-middle"></span>
      <span class="bell-bottom"></span>
      <span class="bell-rad"></span>
      </div>
  </div>
    </a>
    </p>  
    </div>
  </header>
  <nav class="side-navigation">
    <ul>
      <li><a href="homepage.php">Dashboard</a></li>
      <li><a href="EmpDashboard.php">Employee Database</a></li>
      <li><a><form action="homepage.php" method="post" enctype="multipart/form-data"><button class="btnnn" name="logout">Log out</button></form></a></li>
      <?php
    if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['active']); 
    header('location: index.php');
  }
  ?>
    </ul>
  </nav>
</aside>
<main>
		
<div class="container">
	<div class="all-data"> 
		<div class="section">
		<form class="main_form" action="newEmployee.php" method="post" enctype="multipart/form-data">
		<center>
			<img id="uploadPreview"src="img/IUSlogo2.png"/> <br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
		</center>
		<script type="text/javascript">
			    function PreviewImage() {
			        var oFReader = new FileReader();
			        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

			        oFReader.onload = function (oFREvent) {
			            document.getElementById("uploadPreview").src = oFREvent.target.result;
			        };
			    };
		</script>
			<table>
				<tr>
				<div class="subsection">
					<th><u><p class="section-name">Osnovni podaci:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ime i prezime:</label></th>
				<th><input class="input" name="ImeIPrezime" type="text" data-rq/><th>
				<label class="label">Broj:</label>
				<th><input class="input" name="broj" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">IUS broj:</label></th>
				<th><input class="input" name="IUSbroj" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label">Pol:</label></th>
				<th><input name="pol" type="radio" class="input" value="musko"  data-rq/><label class="label">Musko</label></th>
				<th><input name="pol" type="radio" class="input" value="zensko"  data-rq/><label class="label">Žensko</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ime oca:</label></th>
				<th><input class="input" name="imeOca" type="text" data-rq/></th>
				<th><label class="label">Ime majke:</label></th>
				<th><input class="input" name="imeMajke" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Datum Rođenja:</label></th>
				<th><input class="input" name="datumRodenja" type="text" data-rq/></th>
				<th><label class="label">Mjesto rođenja:</label></th>
				<th><input class="input" name="mjestoRodenja" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Starost:</label></th>
				<th><input class="input" name="starost" type="text" data-rq/></th>
				<th><label class="label">JMBG/JIB:</label></th>
				<th><input class="input" name="jmbg" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Državljanstvo:</label></th>
				<th><input class="input" name="drzavljanstvo" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label">Bračni status:</label></th>
				<th><input name="bracniStatus" type="radio" class="input" value="Ubraku"  data-rq/><label class="label">U braku</label></th>
				<th><input name="bracniStatus" type="radio" class="input" value="Nije"  data-rq/><label class="label">Nije</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj lične karte:</label></th>
				<th><input class="input" name="brojLicneKarte" type="text" data-rq/></th>
				<th><label class="label">Turski matični broj:</label></th>
				<th><input class="input" name="turskiBroj" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Pasoš broj:</label></th>
				<th><input class="input" name="pasosBroj" type="text" data-rq/></th>
				<th><label class="label">Datum isteka pasoša:</label></th>
				<th><input class="input" name="datumIstekaPasosa" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Adresa:</label></th>
				<th><input class="input" name="adresa" type="text" data-rq/></th>
				<th><label class="label">Opština:</label></th>
				<th><input class="input" name="opstina" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Grad:</label></th>
				<th><input class="input" name="grad" type="text" data-rq/></th>
				<th><label class="label">Poštanski broj:</label></th>
				<th><input class="input" name="postanskiBroj" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Država:</label></th>
				<th><input class="input" name="drzava" type="text" data-rq/></th>
				<th><label class="label">Broj Mobitela 1:</label></th>
				<th><input class="input" name="brojMobitela1" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Broj Mobitela 2:</label></th>
				<th><input class="input" name="brojMobitela2" type="text"  data-rq/></th>
				<th><label class="label">Broj magnetne kartice:</label></th>
				<th><input class="input" name="brojMagnetneKartice" type="text"  data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Email-ius:</label></th>
				<th><input class="input" name="emailIUS" type="text"  data-rq/>
				<th><label class="label">Privatni email:</label></th>
				<th><input class="input" name="privatniEmail" type="text" data-rq/>

			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o skolovanju:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Školska sprema:</label></th>
				<th><input class="input" name="skolskaSprema" type="text"  data-rq/> </th>
				<th><label class="label">Skraceni naziv stručne spreme:</label></th>
				<th><input class="input" name="skracenaSprema" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Problematično zvanje:</label></th>
				<th><input class="input" name="problemZvanje" type="text" data-rq/></th>
				<th><label class="label">Stručni ispit:</label></th>
				<th><input class="input" name="strucniIspit" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Dodatno obrazovanje:</label></th>
				<th><input class="input" name="dodatnoObrazovanje" type="text"  data-rq/> </th>
				<th><label class="label">Certifikati i slično:</label></th>
				<th><input class="input" name="certifikati" type="text" data-rq/> </th>
			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o poziciji:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trenutni status na IUS-u:</label></th>
				<th><input class="input" name="status" type="text" data-rq/></th>
				<th><label class="label">Dnevna satnica:</label></th>
				<th><input class="input" name="dnevnaSatnica" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ugovoreno sedmično vrijeme:</label></th>
				<th><input class="input" name="sedmicnoVrijeme" type="text" data-rq/></th>
				<th><label class="label">Radna pozicija(bh):</label></th>
				<th><input class="input" name="pozicijaBH" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Radna pozicija(eng):</label></th>
				<th><input class="input" name="pozicijaENG" type="text"  data-rq/> </th>
				<th><label class="label">Dodatna zaduženja:</label></th>
				<th><input class="input" name="dodatnaZaduzenja" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odluka o imenovanju-broj:</label></th>
				<th><input class="input" name="odlukaOImenovanjuB" type="text" data-rq/> </th>
				<th><label class="label">Odluka o imenovanju od:</label></th>
				<th><input class="input" name="odlukaOImenovanjuO" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odluka o imenovanju do:</label></th>
				<th><input class="input" name="odlukaOImenovanjuD" type="text" data-rq/> </th>
				<th><label class="label">Fakultet(bh i eng):</label></th>
				<th><input class="input" name="fakultet" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odsjek:</label></th>
				<th><input class="input" name="odsjek" type="text" data-rq/></th>
				<th><label class="label">Studijski program:</label></th>
				<th><input class="input" name="studijskiProgram" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ekvivalencija po oblasti:</label></th>
				<th><input class="input" name="ekvivalencija" type="text" data-rq/> </th>
				<th><label class="label">Pocetak rada na IUS-u:</label></th>
				<th><input class="input" name="pocetakRada" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ukupno vrijeme provedeno na IUS-u:</label></th>
				<th><input class="input" name="vrijemeNaIUS" type="text"  data-rq/> </th>
				<th><label class="label">Datum isteka ugovora:</label></th>
				<th><input class="input" name="datumIstekaUg" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Tip ugovora o radu:</label></th>
				<th><input class="input" name="ugovorORadu" type="radio" class="radio-button" value="odredeno"  data-rq/><label class="label">Određeno</label></th>
			<th>	<input class="input" name="ugovorORadu" type="radio" class="radio-button" value="neodredeno"  data-rq/><label class="label">Neodređeno</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Vrijeme trajanja probnog rada:</label></th>
				<th><input class="input" name="trajanjeProbnog" type="text"  data-rq/></th>	 
				<th><label class="label">Broj zaključenog ugovora o radu sa pripravnikom:</label></th>
				<th><input class="input" name="brojZakljucenogUgovoraORaduSaPripravnikom" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Datum zaključenog ugovora o radu sa pripravnikom:</label></th>
				<th><input class="input" name="datumZakljucenogUgovoraORaduSaPripravnikom" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trajanje pripravničkog staža:</label></th>
				<th><input class="input" name="trajanjePripravnickogStaza" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen:</label></th>
				<th><input class="input" name="vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trajanje rada u inostranstvu:</label></th>
				<th><input class="input" name="trajanjeRadaUInostranstvu" type="text" data-rq/> </th>
				<th><label class="label">Dozvola za boravak i rad ili potvrda o prijavi rada:</label></th>
				<th><input class="input" name="dozvolaZaBoravak" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trajanje radnog vremena:</label></th>
				<th><input class="input" name="trajanjeRadnogVremena" type="radio" class="radio-button" value="odredeno"  data-rq/><label class="label">Određeno</label></th>
				<th><input class="input" name="trajanjeRadnogVremena" type="radio" class="radio-button" value="neodredeno"  data-rq/><label class="label">Neodređeno</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj prvog ugovora koji se vezuje za imenovanje:</label></th>
				<th><input class="input" name="brojUgovoraZaImenovanje" type="text" data-rq/> </th>
				<th><label class="label">Datum potpisivanja ugovora koji se vezuje za prvo imenovanje:</label></th>
				<th><input class="input" name="datumUgovoraZaPrvoImenovanje" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj posljednjeg zaključenog ugovora o radu:</label></th>
				<th><input class="input" name="brojPosljednjegUgovoraORadu" type="text"  data-rq/> </th>
				<th><label class="label">Datum zaključenog ugovora o radu:</label></th>
				<th><input class="input" name="datumZakljucenogUgovoraORadu" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Datup posljednje promjene putem JS3100:</label></th>
				<th><input class="input" name="datumPosljednjePromjene" type="text"  data-rq/></th>
				<th><label class="label">Država i mjesto rada u inostranstvu u slučaju upućivanja radnika u inostranstvo:</label></th>
				<th><input class="input" name="upucivanjeRadnikaUInostranstvo" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Radi li se o poslovima na kojima se staž osiguranja računa s uvečanim trajanjem:</label></th>
				<th><input class="input" name="sUvecanimTrajanjem" type="text"  data-rq/> </th>
				<th><label class="label">Radi li se o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje:</label></th>
				<th><input class="input" name="radnaSposobnost" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Mjesto rada:</label></th>
				<th><input class="input" name="mjestoRada" type="text" data-rq/> </th>
				<th><label class="label">Prethodni radni staž:</label></th>
				<th><input class="input" name="prethodniRadniStaz" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Prethodni penzioni staž:</label></th>
				<th><input class="input" name="prethodniPStaz" type="text"  data-rq/> </th>
				<th><label class="label">Neplaceno/porodiljsko/placeno OD:</label></th>
				<th><input class="input" name="porodiljskoOD" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Neplaceno/porodiljsko/placeno DO:</label></th>
				<th><input class="input" name="porodiljskoDO" type="text" data-rq/></th> 
				<th><label class="label">Dan prestanka radnog odnosa:</label></th>
				<th><input class="input" name="danPrestankaRadnogOdnosa" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Razlozi prestanka radnog odnosa:</label></th>
				<th><input class="input" name="razloziPrestankaRadnogOdnosa" type="text" data-rq/> </th>
				<th><label class="label">Puni naziv is sudskog rješenja:</label></th>
				<th><input class="input" name="nazivIzSudskogRjesenja" type="text" data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">ID broj poslje odjave-poslovna jedinica:</label></th>
				<th><input class="input" name="poslovnaJedinica" type="text" data-rq/> </th>
			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o placanju:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Naziv banke:</label></th>
				<th><input class="input" name="nazivBnake" type="text"  data-rq/> </th>
				<th><label class="label">Ulica banke:</label></th>
				<th><input class="input" name="ulicaBanke" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Grad Banke:</label></th>
				<th><input class="input" name="grad2" type="text"  data-rq/> </th>
				<th><label class="label">Broj bankovnog računa od januara 2017:</label></th>
				<th><input class="input" name="brojBnakovnogRacuna" type="text"  data-rq/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
					<th><label class="label">Odjel na IUS:</label></th>
					<th colspan="3">
						<table>
							<tr>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FENS" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FBA" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FE" data-rq/></td>
							</tr>
							<tr>
								<td><label class="label">FENS</label></td>
								<td><label class="label">FBA</label></td>
								<td><label class="label">FE</label></td>
							</tr>
							<tr>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FASS" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FL" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="Academic"  data-rq/></td>
							</tr>
							<tr>
								<td><label class="label">FASS</label></td>
								<td><label class="label">FL</label></td>
								<td><label class="label">Academic</label></td>
							</tr>
						</table>
					</th>
				</div>
			</tr>
  		</table>
  			<div class="buttons-container">
	  			<th><button class="option option__submit" type="submit" name="submit_emp">Add</button></th>
	  			<th><button class="option option__back"><a href="EmpDashboard.php">Back</button></a></th>
	  			<th><input type="file" id="fileLink" name="btn-upload" accept=".pdf,.txt,.doc,.docx,.ppt,.xls,.xlsx"/></th>
  			</div>
	</form>
</div>
		
	<?php

	//IMAGE UPLOAD

	if(isset($_POST['submit_emp'])){

			if(isset($_FILES['imglink'])){

				$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];

				$directory = 'uploads/';
				$target_file = $directory.$img_name;
			}else{
				$directory = 'uploads/IUSlogo.png';
				$target_file = $directory;
			}

			if($target_file=="uploads/"){
				$target_file = 'uploads/IUSlogo.png';
			}

	// FILE UPLOAD

    	if(isset($_FILES['btn-upload'])){

                $fileName = $_FILES['btn-upload']['name'];
                $fileSize =$_FILES['btn-upload']['size'];
                $filePath =$_FILES['btn-upload']['tmp_name'];

                $directory1 = 'uploadedFiles/';
                $target_file1 = $directory1.$fileName;
            }

		$emp = array($_POST['ImeIPrezime'],$_POST['broj'], $_POST['IUSbroj'], $_POST['pol'],$_POST['imeOca'],$_POST['imeMajke'],$_POST['datumRodenja']
			,$_POST['mjestoRodenja'],$_POST['starost'],$_POST['jmbg'],$_POST['drzavljanstvo'],$_POST['bracniStatus'],$_POST['brojLicneKarte'],$_POST['turskiBroj'],$_POST['pasosBroj'],$_POST['datumIstekaPasosa'],$_POST['adresa'],$_POST['opstina'],$_POST['grad'],$_POST['postanskiBroj'],$_POST['drzava'],$_POST['brojMobitela1'],$_POST['brojMobitela2'],$_POST['brojMagnetneKartice'],$_POST['emailIUS'],$_POST['privatniEmail'],$_POST['skolskaSprema'],$_POST['skracenaSprema'],$_POST['problemZvanje'],$_POST['strucniIspit'],$_POST['dodatnoObrazovanje'],$_POST['certifikati'],$_POST['status'],$_POST['dnevnaSatnica'],$_POST['sedmicnoVrijeme'],$_POST['pozicijaBH'],$_POST['pozicijaENG'],$_POST['dodatnaZaduzenja'],$_POST['odlukaOImenovanjuB'],$_POST['odlukaOImenovanjuO'],$_POST['odlukaOImenovanjuD'],$_POST['fakultet'],$_POST['odsjek'],$_POST['studijskiProgram'],$_POST['ekvivalencija'],$_POST['pocetakRada'],$_POST['vrijemeNaIUS'],$_POST['datumIstekaUg'],$_POST['ugovorORadu'],$_POST['trajanjeProbnog'],$_POST['brojZakljucenogUgovoraORaduSaPripravnikom'],$_POST['datumZakljucenogUgovoraORaduSaPripravnikom'],$_POST['trajanjePripravnickogStaza'],$_POST['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'],$_POST['trajanjeRadaUInostranstvu'],$_POST['trajanjeRadnogVremena'],$_POST['dozvolaZaBoravak'],$_POST['brojUgovoraZaImenovanje'],$_POST['datumUgovoraZaPrvoImenovanje'],$_POST['brojPosljednjegUgovoraORadu'],$_POST['datumZakljucenogUgovoraORadu'],$_POST['datumPosljednjePromjene'],$_POST['upucivanjeRadnikaUInostranstvo'],$_POST['sUvecanimTrajanjem'],$_POST['radnaSposobnost'],$_POST['mjestoRada'],$_POST['prethodniRadniStaz'],$_POST['prethodniPStaz'],$_POST['porodiljskoOD'],$_POST['porodiljskoDO'],$_POST['danPrestankaRadnogOdnosa'],$_POST['razloziPrestankaRadnogOdnosa'],$_POST['nazivIzSudskogRjesenja'],$_POST['poslovnaJedinica'],$_POST['nazivBnake'],$_POST['ulicaBanke'],$_POST['grad2'],$_POST['brojBnakovnogRacuna'],$target_file,$_POST['part'],$target_file1);


		////////////////
		$r=mysqli_query($con,"select * from employee");
		$strq="";
		$strq2="";
		for($i=1;$i<count($emp)+1;$i++){
			$p = mysqli_fetch_field_direct($r, $i);
			$strq.=$p->name.",";
			$strq2.="'".$emp[$i-1]."',";
		}
		$strq=substr($strq,0,strlen($strq)-1);
		$strq2=substr($strq2,0,strlen($strq2)-1);
		///////////////
		if($_POST['ImeIPrezime']==""){
				echo '<script type="text/javascript"> alert("Fill the template") </script> ';
			}else if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}else if(file_exists($target_file)&&$target_file!="uploads/IUSlogo.png")
					{
						echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file '.$target_file.' '.$directory.'") </script>';
					}else{
				move_uploaded_file($img_tmp,$target_file); 	
				move_uploaded_file($filePath,$target_file1);
				$query= "insert into employee(".$strq.") values (".$strq2.")";
				$query_run = mysqli_query($con,$query);
			
		}
	}


	?>
	
</main>

</body>
</html>