<?php

$parola = $_POST['censura'];
$frase = $_POST['paragrafo'];

echo "La tua frase :" .$frase. "<br>Lunghezza: " .strlen($frase);

$censuraParola = str_replace($parola, '***', $frase);
echo "<br>Censura parola: " .$censuraParola. "<br>Lunghezza: " .strlen($frase);
?>