// JavaScript Document

//JSON-objekt
var anfrage = {
		vorname : "",
		name : "",
 		email : "",
		nachricht : "",
		datum : "",
		fehler: [],
		setDatum: function(){
		var jetzt=new Date(); 
		this.datum=jetzt.toLocaleString();
		},
		checkFehler: function(){
				this.fehler=[];//inhalt des fehler-arrays leeren
				//vorname muß angegeben sein und mit großbuchstaben beginnen und mindestens drei zeichen haben
					var checkName = /^[A-ZÄÜÖ]{1}[a-zA-ZäüöÄÜÖß]{2,}/;
					if (!checkName.test(this.vorname)){
						this.fehler.push("Der Vorname muß mindestens drei Zeichen haben und mit einem Großbuchstaben beginnen.");
					}
					//Nachname muß angegeben sein und mit großbuchstaben beginnen und mindestens drei zeichen haben
					//da die überprüfung indentisch mit vornamen, braucht man kein weiters RegExp-objekt, man kann
					//kann mit dem alten RegExp-objekt von Vorname erneut testen
					if (!checkName.test(this.name)){
						this.fehler.push("Der Nachname muß mindestens drei Zeichen haben und mit einem Großbuchstaben beginnen.");
					}
					//email-adresse muß angegeben sein und überprüfen sie auf einfache weise, ob es sich um eine email
					//handeln kann
					var checkEmail =/^[A-ZÜÖÄß0-9._%+-]+@[A-ZÜÄÖß0-9.-]+\.[A-Z]{2,6}$/i;
					if (!checkEmail.test(this.email)){
						this.fehler.push("Bitte geben Sie eine E-Mail-Adresse an.");
					}
					//nachricht muß angegeben sein und mindestens 8 beliebige Zeichen haben
					var checkText=/.{8,}/;
					if (!checkText.test(this.nachricht)){
						this.fehler.push("Bitte geben Sie eine Nachricht ein. (Mind. acht Zeichen)");
					}
					//rückgabewert true/false, je nachdem ob fehler aufgetreten sind
					return (this.fehler.length>0);
			}
		}//datum als string, 
		//json kann auch eine anonyme function enthalten, für datum muß this.datum verwendet werden!
		//nur datum bleibt auch noch bestehen

		function formSend(){
			//alert("Jetzt geklickt");//test ob functionsgerüst funktioniert!!! dann erst inhalt erstellen!!!
			var formular=document.forms[1];
			anfrage.vorname=formular["vorname"].value;			
			anfrage.name=formular["name"].value;			
			anfrage.email=formular["email"].value;			
			anfrage.nachricht=formular["nachricht"].value;
			anfrage.setDatum(); //(),da in json function
			//alert(anfrage.datum);
			
			if(anfrage.checkFehler()){
				//es sind fehler aufgetreten
				//fehler im alert zeilengetrennt ausgeben und als überschrift:
				//"Folgende Fehlermeldungen sind aufgetreten:" verwenden
				var fehlertext=anfrage.fehler.join("\n");
				//alert("Folgende Fehlermeldungen sind aufgetreten:\n\n"+fehlertext);
				document.getElementById("eingabeFehler").style.visibility="visible";//fehlerabsatz sichtbar
				eingabeFehler.innerHTML=fehlertext;
				}
			else{
				document.getElementById("eingabeFehler").style.visibility="hidden";//fehlerabsatz unsichtbar
				 window.document.forms[1].action = "php/kontaktdaten.php"; //ziel-datei
	  	  window.document.forms[1].method = "post"; // Methode in welchem globalen Array in PHP stehen die info
		
    	 // versenden über folgenden Befehl 
	     window.document.forms[1].submit();
	    }
	}
		
	   
    function formReset()
    {
     // zurücksetzen über folgenden Befehl 
     window.document.forms[1].reset(); 
    }