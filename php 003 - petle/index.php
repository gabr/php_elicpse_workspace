<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>petle</title>
</head>
<body>
  <table>
    <tr>
      <td>Odelgłość</td>
      <td>Koszt</td>
    </tr>
    <?php

    for($i=5; $i <= 25; $i+=5) {

        if($i%5 != 0) exit;    // kończenie skrytptu w przypadku złej iteracji

		echo "    <tr>\n";
		echo "\t<td>".($i*10)."</td>\n";
		echo "\t<td>$i</td>\n";
		echo "    </tr>\n";
	};

	?>
  </table>

</body>
</html>
