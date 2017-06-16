<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Lavender Secrets</title>
<link rel="stylesheet" href="css/blog.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/blog.js"></script>
<script type="text/javascript" src="js/kontakt.js"></script>

<script>
function init() {
	 anfordernBlogAnz(); 
		anfordernBlogNav();
		document.getElementById("iForm_send").addEventListener("click", formSend);
		document.getElementById("iForm_reset").addEventListener("click", formReset);
}
window.addEventListener("load", init);
</script>
</head>
<body>	
<div id="navi">		
		    <ul>
            <li><a href="#">Home</a></li>    	
            <li><a href="#anzBlog">DIY-Blog</a></li>
       		  <li><a href="#bilder">Impressionen</a></li>
            <li><a href="#wir">Über uns</a></li>
         	<li><a href="#kontakt">Kontakt</a></li>
			<li><a href="#impressum">Impressum</a></li>
		  	<li><a href="#map">Sitemap</a></li> 
    		</ul>
</div>
<div id="wrapper">
	<div id="header" class="content"><h2>D I Y - Blog</h2><h1>Lavender Secrets</h1><p>made by Regina Leone</p></div>
  
  <!--Impressionen-->
  
<div id="bilder" class="content"><h2>Impressionen</h2>
   <?php      $datei = "img/bilder.txt";	//Bildergalerie
				      $bilder=file($datei);	
				      $menge=count($bilder);
				      $zufallszahl=rand(0,$menge-1);
				      $bild=$bilder[$zufallszahl];
				      echo $bild;			  ?>
	</div>
<!--zeige blog-nav-->
	<div id="anzBlogNav" class="content">&nbsp;&nbsp;&nbsp;</div>
  
	<!--zeige den neusten oder ausgewÃ¤hlten blogeintrag an-->
	<div id="anzBlog" class="content">&nbsp;&nbsp;&nbsp;</div>

	<div id="kommentar" class="content">
			<h2>Wollen Sie einen neuen Kommentar verfassen:</h2>
			<form action="php/kom-eintragen.php" method="post">
      <fieldset>
						Ihr Name: <br><input type="text" name="name"><br>
						Ihre E-Mail-Adresse:<br><input type="email" name="email"><br>
						<textarea rows="8"  name="text">		
            </textarea><br>
       </fieldset>
						<input type="submit" value="absenden">
            
			</form>
	</div>
  
  <div id="wir" class="content"><h2>Wir über uns oder ich über mich</h2>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
	</p>
  </div>
	  
  <div id="impressum" class="content">
    <h2>Impressum und Datenschutz</h2>
    <p><strong>Angaben gemäß §5 TMG:</strong><br>Regina Leone<br>Bussardweg 25<br>39110 Magdeburg</p>
    
    <p><strong>Kontakt:</strong><br>Telefon: +49-151-18625265<br>E-Mail: regina.leone(at)t-online.de</p>
    <p><strong>Haftung für Inhalte</strong><br>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für 
      eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. 
      Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht 
      verpflichtet, übermittelte oder gespeicherte fremde Informationen zu 
      überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige 
      Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der 
      Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon 
      unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem 
      Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei 
      Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte 
      umgehend entfernen.</p>
       <p><strong>Urheberrecht</strong><br>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten 
      unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und 
      jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen 
      der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads 
      und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen 
      Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, 
      werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche 
      gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. 
      Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
      <p><i>Quellen: <a rel="nofollow" href="http://www.e-recht24.de/muster-disclaimer.html" target="_blank">Disclaimer eRecht24</a></i></p>
    </div>
  	
    <img src="img/schmetterling100.png" id="schm1" alt="weißer Schmetterling">
    <img src="img/schmetterling100-2.png" id="schm2" alt="weißer Schmetterling">
    <img src="img/schmetterling100.png" id="schm3" alt="weißer Schmetterling">
    
	  <div id="map" class="content">
    <h2>Sitemap</h2>
    <ul>
        <li><a href="#anzBlogNav">DIY-Blog</a></li>
        <li><a href="#wir">Wir über uns</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
        <li><a href="#impressum">Impressum</a></li>
        <li><a href="#sitemap">Sitemap</a></li>
    </ul></div>
     
    <div id="kontakt" class="content"><h2>Kontakt</h2>
         <form><!--adressdaten-->
        <fieldset>
      <label for="vorname">Vorname:</label>
      <br>
          <input type="text" id="vorname" name="vorname">
          <br>
          <label for="name">Nachname:</label>
      <br>
      <input type="text" id="name" name="name">
          <br>
          <label for="email">E-Mail-Adresse:</label>
      <br>
      <input type="text" id="email" name="email">
          <br>
        <label for="nachricht">Deine Nachricht:</label>
      <br>
          <textarea name="nachricht" rows="8" id="nachricht"></textarea>
          <p id="eingabeFehler" class="versteckt"></p>
          </fieldset>
          <button type="button" id="iForm_reset">Formular zurücksetzen</button>
         <button type="button" id="iForm_send">Anfrage absenden</button>
      </form>
    <p id="antwort" class="versteckt"></p>
    </div>
</div><!--wrapper-->

<div id="footer">
		<ul>
		<li><a href="#header">Home</a></li>  
    	<li><a href="#anzBlogNav">DIY - Blog</a></li>
 		  <li><a href="#bilder">Impressionen</a></li>
		  <li><a href="#kontakt">Kontakt</a></li>
		  <li><a href="#impressum">Impressum</a></li>
		  <li><a href="#map">Sitemap</a></li>    <!--  <li><a href="#">&copy;Regina Leone 2014</a></li>-->
		</ul>
</div><!--footer-->
</body>
</html>
