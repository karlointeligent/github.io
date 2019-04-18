function valImie()
		{
		var imie1 = document.getElementById("imie").value;
		if(imie1.length==0)
		{powiadomienie("Imie jest błedne", "1", "red"); return false;}
		
		if(!imie1.match(/^[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/))
		{
		powiadomienie("Podaj poprawne imie", "1", "red");return false;
		}		
		powiadomienie("Imie jest poprawne", "1", "green"); return true;
		}
		
		function valNazwisko()
		{
		var nazwisko1 = document.getElementById("nazwisko").value;
		if(nazwisko1.length==0)
		{powiadomienie("Nazwisko jest błedne", "2", "red"); return false;}
		
		if(!nazwisko1.match(/^[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/))
		{
		powiadomienie("Podaj poprawne nazwisko", "2", "red");return false;
		}		
		powiadomienie("Nazwisko jest poprawne", "2", "green"); return true;
		}
		
		function valMiasto()
		{
		var miasto1 = document.getElementById("miasto").value;
		if(miasto1.length==0)
		{powiadomienie("Miasto jest błedne", "3", "red"); return false;}
		
		if(!miasto1.match(/^[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/))
		{
		powiadomienie("Podaj poprawne miasto", "3", "red");return false;
		}		
		powiadomienie("Miasto jest poprawne", "3", "green"); return true;
		}
		
		function valUlica()
		{
		var ulica1 = document.getElementById("ulica").value;
		if(ulica1.length==0)
		{powiadomienie("Ulica jest błedna", "4", "red"); return false;}
		
		if(!ulica1.match(/^[0-9A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/))
		{
		powiadomienie("Podaj poprawną ulicę", "4", "red");return false;
		}		
		powiadomienie("Ulica jest poprawna", "4", "green"); return true;
		}
		
		function valNumer()
		{
		var numer1 = document.getElementById("numer").value;
		if(numer1.length==0)
		{powiadomienie("Numer jest błedny", "5", "red"); return false;}
		
		if(!numer1.match(/^[0-9a-zA-Z]*$/))
		{
		powiadomienie("Podaj poprawny numer", "5", "red");return false;
		}		
		powiadomienie("Numer jest poprawny", "5", "green"); return true;
		}
		
		function valEmail()
		{
		var email1 = document.getElementById("email").value;
		if(email1.length==0)
		{powiadomienie("Email jest błedny", "9", "red"); return false;}
		
		if(!email1.match(/^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,5}$/i))
		{
		powiadomienie("Podaj poprawny email", "9", "red");return false;
		}		
		powiadomienie("Email jest poprawny", "9", "green"); return true;
		}
		
		function valKod()
		{
		var kod1 = document.getElementById("kod").value;
		if(kod1.length==0)
		{powiadomienie("Kod jest błedny", "6", "red"); return false;}
		
		if(!kod1.match(/^[0-9]{2}-[0-9]{3}$/))
		{
		powiadomienie("Podaj poprawny kod", "6", "red");return false;
		}		
		powiadomienie("Kod jest poprawny", "6", "green"); return true;
		}
		
		function valTelefon()
		{
		var telefon1 = document.getElementById("telefon").value;
		if(telefon1.length==0)
		{powiadomienie("Telefon jest błedny", "7", "red"); return false;}
		
		if(!telefon1.match(/^[0-9]{9}$/))
		{
		powiadomienie("Podaj poprawny telefon", "7", "red");return false;
		}		
		powiadomienie("Telefon jest poprawny", "7", "green"); return true;
		}
		
		function valData()
		{
		var data1 = document.getElementById("data").value;
		if(data1.length==0)
		{powiadomienie("Telefon jest błedny", "8", "red"); return false;}
		
		dane = data1.split('-');
		if(dane.length == 3){
			dzien = parseInt(dane[0]);
			mies = parseInt(dane[1]);
			rok = parseInt(dane[2]);
			ok = (dzien >= 0 && dzien <= 31 && mies >= 1 && mies <= 12 && rok <= 2018);
		} else {
			ok = false;
		}
		if(!data1.match(/^\d{2}-\d{2}-\d{4}$/g) || !ok)
		{
		powiadomienie("Podaj poprawną date", "8", "red");return false;
		}		
		powiadomienie("Data jest poprawna", "8", "green"); return true;
		}
		
		function powiadomienie(message,bład,kolor)
		{
		document.getElementById(bład).innerHTML = message;
		document.getElementById(bład).style.color = kolor;
		}