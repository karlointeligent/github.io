<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		
		<title>Programowanie w internecie</title>
		
		<script  src="Java.js" ></script>
			
	</head>
	<body>
	
	 <script>

        function statusChangeCallback(response) {
          console.log('statusChangeCallback');
          console.log(response);
          if (response.status === 'connected') {
          
            testAPI();
          } else {
         
            document.getElementById('status').innerHTML = 'Please log ' +
              'into this app.';
          }
        }
      
        function checkLoginState() {
          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });
        }
      
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '566717803819170',
            cookie     : true,
            xfbml      : true,
            version    : 'v3.2'
          });
      
          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });
      
        };
      
        
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      
        
        function testAPI() {
          console.log('Welcome!  Fetching your information.... ');
          FB.api('/me', { locale: 'pl_PL', fields: 'name, email' }, function(response) {
            console.log('Successful login for: ' + response.name);
            console.log(response);
            document.getElementById('status').innerHTML =
              'Witaj,zalogowano jako: ' + response.name + '! Twój email: ' + response.email;
          });
        }
      </script>

   
	<div style="width:100%; text-align: center">
			
			<div class="center">
			<div class="topnav" id="myTopnav">
			<a onClick="toggle('ind')" class="active">Zadanie 1</a>
			<a onClick="toggle('Gra')">Kółko i krzyżyk</a>
			<a onClick="toggle('Formularz')" class="active">Formularz</a>
			<fb:login-button 
			scope="public_profile,email"
			onlogin="checkLoginState();">
			</fb:login-button>
			
			<div id="status">
			</div>
			
			</div>
				
			</div>
			<div class="center">
				<div id="srodek">
				<div class="mid" id="ind">
					<div class="pola">
						<h1>Wir leben sportliches Autos</h1>
						Mercedes-AMG GT 4-Door Coupe to pierwszy sportowy samochód z Affalterbach (siedziba AMG). Konkurował będzie m.in. 
						z Maserati Quattroporte, Astonem Martinem Rapidem S, BMW M760 Li, ale największym rywalem będzie Porsche Panamera.
						Nowy 4-drzwiowy GT oferuje 4 lub 5 miejsc w różnej konfiguracji – od komfortowych siedzeń i kanapy z tyłu po 
						sportowe fotele z przodu i z tyłu.
						<br><br>
						
						<img src="foto//zdj4.jpg" alt="Mercedes-AMG" style="max-width:100%;height:auto;"/>
						
					</div>
					
					<div class="pola">
						<h1>Biblioteka zdjęć</h1>
						
						<img src="foto//zdj5.jpg" alt="Mercedes-AMG" style="max-width:100%;height:auto;" /> 
						
						<br><br>
						<img src="foto//zdj7.jpg" alt="Mercedes-AMG" style="max-width:100%;height:auto;"/>
					</div>
					<div class="pola">
					<h1>Szczegółowe dane</h1>
					4-drzwiowy model Mercedes-AMG GT 63 4MATIC+ Coupé o zapierającej dech w piersiach naturze Gran Turismo jest optymalnym 
					towarzyszem podróży dla wszystkich, którzy cenią najwyższą wydajność, komfort i wszechstronność. Innowacyjny, dynamiczny 
					silnik V8 bi-turbo dostarcza przy tym fascynujących doznań podczas jazdy we wszystkich zakresach prędkości obrotowej i 
					łączy spektakularną dynamikę z zadziwiającą efektywnością. Innowacyjne technologie jak napęd na wszystkie koła ze zmienną 
					dystrybucją momentu obrotowego 4MATIC+ oraz aktywnie skrętna tylna oś montowana seryjnie w wersji V8 zapewniają jazdę i 
					stabilność na poziomie sportu motorowego. 9-biegowa skrzynia biegów AMG SPEEDSHIFT MCT z funkcją RACE START umożliwia 
					przyspieszenie od 0 do 100 km/h w ciągu tylko 3,4 sekundy.
					Dane ze strony www.mercedes-benz.pl
					</div>
					<div class="pola">
						<h1>Błędy z servera</h1>
						<img src="foto//waring.jpg" alt="Bledy" style="max-width:100%;height:auto;"/>
	
					</div>
				</div>
				</div>
				</div>
				
				<div class="mid" id="Gra">
				<div class="center">
				<div id="srodekGra">
				<h1>Gra kółko i krzyżyk</h1>
				<div class="pola">
	
				<button onclick="replay()">Nowa Gra</button>
	
				<div class="container" id="main">
				<div class="box" id="box1"></div>
				<div class="box" id="box2"></div>
				<div class="box" id="box3"></div>
				<div class="box" id="box4"></div>
				<div class="box" id="box5"></div>
				<div class="box" id="box6"></div>
				<div class="box" id="box7"></div>
				<div class="box" id="box8"></div>
				<div class="box" id="box9"></div>	
				</div>
				<script  src="JavaGra.js" ></script>
				</div>
				</div>
				</div>
				</div>	
				
				
				<div class="mid" id="Formularz">
				<div class="center">
				<div id="srodekForm">
				
				<h1>Formularz</h1>
				<div class="pola">
				<div id="glowny">
            
           <form action="index.html" method="get">	
			
                <div class="komorka">
                    <label>Imie:</label>
                    <input type="text" name="imie" id="imie" onkeyup="valImie()"/><label id="1"></label>
                </div>
                <div class="komorka">
                    <label>Nazwisko:</label>
                    <input type="text" name="nazwisko" id="nazwisko" onkeyup="valNazwisko()"/><label id="2"></label>
                </div>
                <div class="komorka">
                    <label>Miasto:</label>
                    <input type="text" name="miasto" id="miasto" onkeyup="valMiasto()"/><label id="3"></label>
                </div>
                <div class="komorka">
                    <label>Ulica:</label>
                    <input type="text" name="ulica" id="ulica" onkeyup="valUlica()"/><label id="4"></label>
                </div>
                <div class="komorka">
                    <label>Numer domu:</label>
                    <input type="text" name="numer domu" id="numer"  onkeyup="valNumer()"/><label id="5"></label>
                </div>
                <div class="komorka">
                    <label>Kod pocztowy:</label>
                    <input type="text" name="kod pocztowy" id="kod" placeholder="02-356" onkeyup="valKod()"/><label id="6"></label>

                </div>
                <div class="komorka">
                    <label>e-mail:</label>
                    <input type="text" name="e-mail" id="email" onkeyup="valEmail()"/><label id="9"></label>
                </div>
                <div class="komorka">
                    <label>Telefon komórkowy:</label>
                    <input type="text" name="telefon" id="telefon" placeholder="9 cyfr" onkeyup="valTelefon()"/><label id="7"></label>
                </div>
                <div class="komorka">
                    <label>Data urodzenia:</label>
                    <input type="text" name="data urodzenia" id="data" placeholder="05-06-1987" onkeyup="valData()"/><label id="8"></label>                  

                </div>
                <div class="komorka">
                    <label>Województwo:</label>
                    <select name="Województwo">                     
                        <option>dolnośląskie</option>
                        <option>kujawsko-pomorskie</option>
                        <option>lubelskie</option>
                        <option>lubuskie</option>
                        <option>łódzkie</option>
                        <option>małopolskie</option>
                        <option>mazowieckie</option>
                        <option>opolskie</option>
                        <option>podkarpackie</option>
                        <option>podlaskie</option>
                        <option>pomorskie</option>
                        <option>śląskie</option>
                        <option>świętokrzyskie</option>
                        <option>warmińsko-mazurskie</option>
                        <option>wielkopolskie</option>
                        <option>zachodniopomorskie</option>
                    </select>
                </div>
                <div class="komorka">
                    <label>Prawo jazdy:</label>
                    <input type="checkbox" name="prawo jazdy" value="TAK" />
                    <label class="tytuly">Tak</label>
                </div>
                <div class="komorka">
                    <label>Płeć:</label>
                    <input type="radio" id="k" name="plec" value="Kobieta" checked="checked" />
                    <label class="tytuly">Kobieta</label>
                    <input type="radio" id="m" name="plec" value="Mężczyzna" />
                    <label class="tytuly">Mężczyzna</label>
                </div>
                <div class="komorka">
                    <label>Uwagi:</label>
                    <textarea name="uwagi" rows="10" cols="20"></textarea>
                </div>
                <div class="komorka">
                    <div class="guziki">
                        <input type="button" name="a1" value="OK" />
                        <input type="reset" name="a2" value="Clear" />
                        <input type="submit" name="a3" value="Send" />
                    </div>
                </div>
				
				

            </form>
			<script  src="JavaForm.js" ></script>
				</div>
				</div>
				</div>
				</div>
				</div>
				
		</div>	
		

</body>
</html>