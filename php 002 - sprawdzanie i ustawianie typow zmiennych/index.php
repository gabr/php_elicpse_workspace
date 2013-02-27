<?php

// string gettype(mixed zmienna);
// bool settype(mixed zmienna, string typ_zmiennej);

$string = "To jest napis.";
echo gettype($string)."<br>";
settype($string, "bool");
echo gettype($string)."<br>";

// testowanie typów:
// is_array()
// is_double(), is_float(), is_real()
// is_long(), is_int(), is_integer()
// is_string()
// is_bool()
// is_object()
// is_resource()
// is_null()
// is_scalar() <-- integer, boolean, string lub float
// is_numeric() <-- czy jest liczbą lub ciągiem znaków zawierającym same cyfry
// is_callable() <-- czy zmienna stanowi nazwę prawidłowej funkcji

echo 'Zmienna $test istnieje? '.(isset($test)? "tak" : "nie");
echo "<br>";
echo 'Zmienna $string istnieje? '.(isset($string)? "tak" : "nie");
echo '<br>unsetting $string<br>';
unset($string);
echo 'Zmienna $string istnieje? '.(isset($string)? "tak" : "nie");

$pusta = 0;
echo '<br>Zmienna $pusta jest '.(empty($pusta)? "pusta" : "pełna");
echo "<br>";

// rzutowanie funkcjami:
// int intval(mixed zmienna);
// float floatval(mixed zmienna);
// string strval(mixed zmienna);

?>