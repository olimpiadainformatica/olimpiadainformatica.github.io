<?php
    include '../conexion.php';
    include '../header.php';
    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:mobile_login.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title> Vacunas - MedHealth</title>
    <meta charset="UTF-8">
    <meta name="description" content="Olimpiadas INET 2021">
    <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="../style/mobile/mobile_common.css">
    <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
    <link rel="stylesheet" href="../style/mobile/mobile_vacunas.css">
    <link href="https://allfont.es/allfont.css?fonts=sansation-regular" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

<body>
    <main>

		<header>
            <navbar>
                <a href="mobile_datos_clinicos.php">Atrás</a>
                <img src="../src/icons/clinicaldata_icon.svg">
            </navbar>
        </header>

        <div id="info_text">
                <p>
                    Una vacuna es cualquier preparación cuya función es la de generar del organismo inmunidad
                     frente a una determinada enfermedad, estimulándolo para que produzca anticuerpos que luego actuarán 
                     protegiéndolo frente a futuras infecciones,  ya que el sistema inmune podrá reconocer el agente infeccioso y lo destruirá.</p>
            </div>
            <div>
                <p id="vacunaingreso">Para ingresar u obtener
            información acerca de sus vacunas, seleccione alguna de las opciones presentadas abajo: </p>
        </div>

        <br>

				<div id="contenedorcompleto">
            <div></div>
            <button onclick="openpopup('covid-19')">COVID-19</button>
            <br>
            <p class="contenedor" style="grid-column: 2/3">  
                    Por edad
			</p>
            <div></div>
						<button onclick="openpopup('trece-años')">13 AÑOS</button>
            <button onclick="openpopup('once-años')">11 AÑOS</button>
            <button onclick="openpopup('dos-años')">2 AÑOS</button>
            <button onclick="openpopup('doce-meses')">12 MESES</button>
            <button onclick="openpopup('siete-meses')">7 MESES</button>
            <button onclick="openpopup('seis-meses')">6 MESES</button>
            <button onclick="openpopup('cuatro-meses')">4 MESES</button>
            <button onclick="openpopup('dos-meses')">2 MESES</button>
            <button onclick="openpopup('nacimiento')">NACIMIENTO</button>

						<div id="pop-up-background"></div>

						<div class="pop-up" id="covid-19">
							<header>
								<p>Vacunas aprobadas y autorizadas</p>
								<button onclick="closepopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>						
							</header>
							<p>Las siguientes son las vacunas aprobadas y autorizadas en Argentina para la prevención del COVID-19:</p>
							<div>
								<div id="vacunas">
									<button onclick="closepopup('covid-19'); openpopup('sputnik-v');">Sputnik V</button> 	
									<button onclick="closepopup('covid-19'); openpopup('covishield')">Covishield</button> 	
									<button onclick="closepopup('covid-19'); openpopup('sinopharm')">Sinopharm</button> 	
									<button onclick="closepopup('covid-19'); openpopup('astrazenca')">AstraZeneca</button> 	
									<button onclick="closepopup('covid-19'); openpopup('comirnaty')">Comirnaty</button> 	
									<button onclick="closepopup('covid-19'); openpopup('moderna')">Moderna</button> 	
									<button onclick="closepopup('covid-19'); openpopup('convidecia')">Convidecia</button>
								</div>
								<img src="../style/vacuna.svg">
							</div>
							
						</div>


						<div class="pop-up" id="sputnik-v">
							<header>
								<p>Sputnik V</p>
								<button onclick="closepopup('sputnik-v'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre: Gam-COVID-Vac</li>
								<li>Desarrollador: Centro Nacional Gamaleya de Epidemiología y Microbiología - Rusia</li>
								<li>Autorizado edad (edad): ≥ 18 años</li>
								<li>Plataforma: vector viral no replicativo</li>
								<li>Contraindicaciones: hipersensibilidad a cualquier componente; antecedente de reacciones alérgicas graves o anafilaxia; enfermedades agudas graves o exacerbación de enfermedades crónicas.</li>
								<li>Contraindicaciones para segunda dósis: complicaciones graves posvacunación (shock anafiláctico, reacciones alérgicas generalizadas y graves, síndrome convulsivo, fiebre superior a 40° C, etc.) por la inyección del Componente 1 de la vacuna.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="covishield">
							<header>
								<p>Covishield</p>
								<button onclick="closepopup('covishield'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre: Vacuna contra covid-19 ChAdOx1 nCoV- 19 Corona Virus Vaccine (Recombinant)</li>
								<li>Desarrollador: Serum Institute - India</li>
								<li>Autorizado edad (edad): ≥ 18 años</li>
								<li>Plataforma: vector viral no replicativo</li>
								<li>Contraindicaciones: hipersensibilidad a cualquier componente.</li>
								<li>Contraindicaciones para segunda dósis: reacción anafiláctica con la primera dosis.</li>
								<li>Precauciones: enfermedad febril aguda grave; trombocitopenia y trastornos de la coagulación.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="sinopharm">
							<header>
								<p>Sinopharm</p>
								<button onclick="closepopup('sinopharm'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre: SARS COV-2 (células vero) inactivada</li>
								<li>Desarrollador: Beijing Institute of Biological Products - República Popular China</li>
								<li>Autorizado edad (edad): ≥ 18 años</li>
								<li>Plataforma: vector viral no replicativo</li>
								<li>Contraindicaciones: hipersensibilidad a cualquier componente; antecedente de reacciones alérgicas graves (con compromiso respiratorio que haya requerido asistencia médica); exacerbación de enfermedades crónicas, que impliquen compromiso del estado general.</li>
								<li>Contraindicaciones para segunda dósis: reacción anafiláctica con la primera dosis.</li>
								<li>PRECAUCIONES: enfermedad febril aguda grave; trombocitopenia y trastornos de la coagulación; epilepsia no controlada u otro trastorno neurológico progresivo.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="astrazenca">
							<header>
								<p>AstraZeneca</p>
								<button onclick="closepopup('astrazenca'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre:  ChAdOx1 nCoV-19 vaccine (AZD1222)</li>
								<li>Desarrollador: AstraZeneca-Oxford - Reino Unido.</li>
								<li>Autorizado edad (edad): ≥ 18 años</li>
								<li>Plataforma: vector viral no replicativo</li>
								<li>Contraindicaciones: reacción anafiláctica con la primera dosis.</li>
								<li>Contraindicaciones para segunda dósis: reacción anafiláctica con la primera dosis.</li>
								<li>Precauciones: enfermedad febril aguda grave; trombocitopenia y trastornos de la coagulación.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="comirnaty">
							<header>
								<p>Comirnaty</p>
								<button onclick="closepopup('comirnaty'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre:  Pfizer-BionTech COVID-19 Vaccine</li>
								<li>Desarrollador: Pfizer-BioNTech</li>
								<li>Autorizado edad (edad): ≥ 12 años</li>
								<li>Plataforma: ARN mensajero</li>
								<li>Contraindicaciones: Hipersensibilidad a cualquier componente de una vacuna o a una vacuna que contenga componentes similares.</li>
								<li>Contraindicaciones para segunda dósis: anafilaxia o reacción alérgica grave inmediata a la administración de la primera dosis.</li>
								<li>Contraindicación temporal: enfermedades agudas graves (infecciosas y no infecciosas) o exacerbación de enfermedades crónicas, que impliquen compromiso del estado general (ej. asma grave no controlado).</li>
								<li>Precauciones</li>
								<li>Enfermedad febril aguda grave.</li>
								<li>Trombocitopenia y trastornos de la coagulación.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="moderna">
							<header>
								<p>Moderna</p>
								<button onclick="closepopup('moderna'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre:  Vacuna mRAN-1273 COVID-19</li>
								<li>Desarrollador: Moderna Switzerland GmbH</li>
								<li>Autorizado edad (edad): ≥ 12 años</li>
								<li>Plataforma: ARN mensajero</li>
								<li>Contraindicaciones: Hipersensibilidad a cualquier componente de una vacuna o a una vacuna que contenga componentes similares.</li>
								<li>Contraindicación temporal: enfermedades agudas graves (infecciosas y no infecciosas) o exacerbación de enfermedades crónicas, que impliquen compromiso del estado general (ej. asma grave no controlado).</li>
								<li>Precauciones:  Enfermedad febril aguda grave (con compromiso del estado general y trombocitopenia y trastornos de la coagulación.</li>
								<li>Cantidad de dosis: 2</li>
							</ul>
						</div>

						<div class="pop-up" id="convidecia">
							<header>
								<p>Convidecia</p>
								<button onclick="closepopup('convidecia'); openpopup('covid-19')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<ul>
								<li>Nombre:  Ad5-nCoV</li>
								<li>Desarrollador: Instituto de Biotecnología de Beijing (Beijing, China) y CanSino Biologics Inc.</li>
								<li>Autorizado edad (edad): ≥ 18 años</li>
								<li>Plataforma: vector viral no replicante de adenovirus tipo 5 que expresa la glicoproteína Spike (S) del SARS-CoV-2</li>
								<li>Contraindicaciones:</li>
								<li>Hipersensibilidad a cualquier componente de una vacuna o a una vacuna que contenga componentes similares.</li>
								<li>Antecedente de reacciones alérgicas graves (con compromiso respiratorio que haya requerido asistencia médica).</li>
								<li>Exacerbación de enfermedades crónicas, que impliquen compromiso del estado general.</li>
								<li>Personas con epilepsia no controlada y otras enfermedades neurológicas progresivas ó historia de síndrome de Guillain-Barré.</li>
								<li>Precauciones:</li>
								<li>Enfermedad febril aguda grave o exacerbación de enfermedades crónicas</li>
								<li>Trombocitopenia y trastornos de la coagulación</li>
								<li>Cantidad de dosis: 1</li>
							</ul>
						</div>
						
						<div class="pop-up" id="trece-años">
							<header>
								<p>¿Qué vacunas recibirá mi hijo?</p>
								<button onclick="closepopup('trece-años')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>						
							</header>
							<ul>
								<li>Influenza (gripe) (todos los años)</li>
								<li>Enfermedad meningocócica</li>
								<li>Conjugado meningocócico (MenACWY) administrado a los 16 años ( segunda dosis)</li>
								<li>Se puede administrar meningococo del serogrupo B (MenB), preferiblemente entre los 16 y los 18 años (2 dosis)</li>
							</ul>
						</div>

						<div class="pop-up" id="once-años">
							<header>
								<p>¿Qué vacunas recibirá mi hijo?</p>
								<button onclick="closepopup('once-años')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<p>A los 11-12 años, su preadolescente debe recibir las vacunas recomendadas de forma rutinaria para protegerlo de las siguientes enfermedades:</p>
							<ul>
								<li>Enfermedad meningocócica (una dosis de la vacuna MenACWY)</li>
								<li>VPH (dos dosis de vacuna)</li>
								<li>Tétanos , difteria y tos ferina (pertusis) (una dosis de la vacuna Tdap)</li>
								<li>Influenza (gripe) (una dosis de vacuna cada año)</li>
							</ul>
						</div>

						<div class="pop-up" id="dos-años">
							<header>
								<p>¿Qué vacunas recibirá mi hijo?</p>
								<button onclick="closepopup('dos-años')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<p>A los 2-3 años de edad, su hijo debe recibir vacunas para protegerlo de las siguientes enfermedades:</p>
							<ul>
								<li>Influenza (gripe) (todos los años)</li>
							</ul>
						</div>

						<div class="pop-up" id="doce-meses">
							<header>
								<p>¿Qué vacunas recibirá mi bebé?</p>
								<button onclick="closepopup('doce-meses')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
								<p>Entre los 12 y los 23 meses de edad, su bebé debe recibir vacunas para protegerlo de las siguientes enfermedades:</p>
								<ul>
									<li>Varicela (Varicela) ( 1ª dosis)</li>
									<li>Difteria , tétanos y tos ferina (pertussis) (DTaP) (4 ª dosis)</li>
									<li>Haemophilus influenzae b enfermedad de tipo (Hib) (4 ª dosis)</li>
									<li>Sarampión , paperas y rubéola (MMR) ( 1ª dosis)</li>
									<li>Polio (IPV) ( 3ª dosis)</li>
									<li>La enfermedad neumocócica (PCV13) (4 ª dosis)</li>
									<li>Hepatitis A (HepA) ( 1ª dosis)</li>
									<li>Hepatitis B (HepB) (3 rd dosis entre los 6 meses y 18 meses)</li>
									<li>Influenza (gripe) (todos los años)</li>
								</ul>
						</div>

						<div class="pop-up" id="siete-meses">
							<header>
								<p>¿Qué vacunas recibirá mi bebé?</p>
								<button onclick="closepopup('siete-meses')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>		
							</header>
							<p>A los 7-11 meses de edad, su bebé debe recibir la vacuna contra la gripe para protegerlo de la siguiente enfermedad:</p>
							<ul>
								<li>Influenza (gripe) (todos los años)</li>
							</ul>
						</div>

						<div class="pop-up" id="seis-meses">
							<header>
								<p>¿Qué vacunas recibirá mi bebé?</p>
								<button onclick="closepopup('seis-meses')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<p>A los 6 meses de edad, su bebé debe recibir vacunas para protegerlo de las siguientes enfermedades:</p>
							<ul>
								<li>Difteria , tétanos y tos ferina (pertussis) (DTaP) (3 rd dosis)</li>
								<li>Haemophilus influenzae b enfermedad de tipo (Hib) (3 rd dosis)</li>
								<li>Polio (IPV) ( 3ª dosis)</li>
								<li>La enfermedad neumocócica (PCV13) (3 rd dosis)</li>
								<li>Rotavirus (RV) ( 3ª dosis)</li>
								<li>Influenza (gripe) (todos los años)</li>
							</ul>
						</div>

						<div class="pop-up" id="cuatro-meses">
							<header>
							<p>¿Qué vacunas recibirá mi bebé?</p>
							<button onclick="closepopup('cuatro-meses')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>
							</header>
							<p>A los 4 meses, su bebé debe recibir vacunas para ayudar a protegerse contra las siguientes enfermedades:</p>
							<ul>
								<li>Difteria , tétanos y tos ferina (pertussis) (DTaP) ( segunda dosis)</li>
								<li>Enfermedad por Haemophilus influenzae tipo b (Hib) ( segunda dosis)</li>
								<li>Polio (IPV) ( 2da dosis)</li>
								<li>Enfermedad neumocócica (PCV13) ( segunda dosis)</li>
								<li>Rotavirus (RV) ( segunda dosis)</li>
							</ul>
						</div>				

						<div class="pop-up" id="dos-meses">
							<header>
								<p>¿Qué vacunas recibirá mi bebé?</p>
								<button onclick="closepopup('dos-meses')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>		
							</header>
							<p>De 1 a 2 meses, su bebé debe recibir vacunas para protegerlo de las siguientes enfermedades:</p>
							<ul>
								<li>Hepatitis B (HepB)  ( segunda dosis)</li>
								<li>Difteria , tétanos y tos ferina (pertusis) (DTaP) ( 1ª dosis)</li>
								<li>Enfermedad por Haemophilus influenzae tipo b (Hib) ( 1ª dosis)</li>
								<li>Polio (IPV)  ( 1ª dosis)</li>
								<li>Rotavirus (RV)   ( 1ª dosis)</li>
							</ul>
						</div>	

						<div class="pop-up" id="nacimiento">
							<header>
								<p>La primera inyección de tu bebé</p>
								<button onclick="closepopup('nacimiento')" class="btn-cerrar-popup"><i class="fas fa-times"></i></button>	
							</header>
							<p>Poco después del nacimiento, su bebé debe recibir la primera dosis de la vacuna para ayudar a protegerse contra la siguiente enfermedad:</p>
							<p>Hepatitis B (HepB)  (primera dosis)</p>
							<p>Esta vacuna actúa como una red de seguridad, reduciendo el riesgo de contraer la enfermedad de usted o de miembros de su familia que pueden no saber que están infectados con hepatitis B.</p>
						</div>	

    </main>

		<script src="../scripts/pop-ups.js"></script>
</body>

</html>
