<html>
<head>
<title>Wyniki zamówienia</title>
</head>
<body>
  <h1>Części samochodowe Janka</h1>
  <h2>Wyniki zamówienia</h2>
  <?php

  define("CENAOPON", 100);
  define("CENAOLEJU", 10);
  define("CENASWIEC", 4);

  $iloscopon = $_POST["iloscopon"];
  $iloscoleju = $_POST["iloscoleju"];
  $iloscswiec = $_POST["iloscswiec"];
  $skad = $_POST["skad"];

  $stawkavat = 0.22;
  $ilosc = $iloscopon + $iloscoleju + $iloscswiec;
  $wartosc = $iloscopon*CENAOPON
  +$iloscoleju*CENAOLEJU
  +$iloscswiec*CENASWIEC;
  //$wartosc = (float)$ilosc;

  if($ilosc < 10)
  	$znizka = 0;
  elseif($ilos < 20)
  	$znizka = 10;

  $wartosc -= $znizka;

  echo "<p>Zamówienie przyjęte o ".date('H:i. jS F Y')."</p>";

  echo "<p>Zamówienie przedstawia się następująco:</p>";
  echo $iloscopon." opon za ".CENAOPON."zł<br>";
  echo $iloscoleju." oleju za ".CENAOLEJU."zł<br>";
  echo $iloscswiec." swiec za ".CENASWIEC."zł<br>";

  echo "<p>Podsumowanie:</p>";
  echo "ilosc towaru: ".$ilosc."<br>";
  echo "cena: ".$wartosc."<br>";
  echo "cena brutto: ".number_format($wartosc*(1+$stawkavat), 2)." PLN<br>";
  
  switch($skad) {
  	case "a":
  		echo "<br>OOOOOKKKK!!!";
  		break;
  	case "b":
  		echo "<br>podziękuj wujkowi";
  		break;
  	case "c":
  		echo "<br>fart i tyle";
  		break;
  	default:
  		echo "<br>źródło nieznane!!!";
  		break;
  }

  echo "<br><br>";

  $out_ls = `ls -al`;
  echo "<pre># ls -al</pre>";
  echo "<pre>".$out_ls."</pre>";

  echo "<br>";

  class przykladowaKlasa{};
  $mojObiekt = new przykladowaKlasa();
  if($mojObiekt instanceof przykladowaKlasa)
  	echo "mojObiekt jest egzemplarzem klasy przykladowaKlasa<br>";


  echo "<br><br>";
  phpinfo();

  ?>
</body>
</html>
