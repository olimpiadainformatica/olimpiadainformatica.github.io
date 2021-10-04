<!DOCTYPE html>
<html>

<head>
    <title> Vacunas - MedHealth</title>
    <meta charset="UTF-8">
    <meta name="description" content="Olimpiadas INET 2021">
    <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/common.css">
    <link rel="stylesheet" href="style/header-footer.css">
    <link rel="stylesheet" href="style/vacunas.css">
    <link href="https://allfont.es/allfont.css?fonts=sansation-regular" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
    <main>
        <div id="info_text">
            <img src="style/vacuna.svg">
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

            <p>
                COVID-19</p>

            <br>


            <div class="contenedor">
                <img src="style/linea izquierda edad.svg" alt="">

                <div class="edad">
                    Por edad

                </div>
                <img src="style/linea derecha edad.svg" alt="">
            </div>


            <div></div>
            <div></div>

            <button onclick="openpopup('trece-años')">TRECE AÑOS</button>
            <button onclick="openpopup('once-años')">ONCE AÑOS</button>
            <button onclick="openpopup('dos-años')">DOS AÑOS</button>
            <button onclick="openpopup('doce-meses')">DOCE MESES</button>
            <button onclick="openpopup('siete-meses')">SIETE MESES</button>
            <button onclick="openpopup('seis-meses')">SEIS MESES</button>
            <button onclick="openpopup('cuatro-meses')">CUATRO MESES</button>
            <button onclick="openpopup('dos-meses')">DOS MESES</button>
            <button onclick="openpopup('nacimiento')">NACIMIENTO</button>

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

    <footer></footer>

		<script src="scripts/pop-ups.js"></script>
    <script src="scripts/header-footer.js"></script>
</body>

</html>
