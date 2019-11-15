<?php
echo ("Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL);
$line = readline();
echo ("Eerste getal?" . PHP_EOL);
$a = readline();
echo ("Tweede getal?" . PHP_EOL);
$b = readline();
if ($line == "+") {
	echo ("Uw resultaat is:" . $a += $b);
}
else if ($line == "-") {
	echo ("Uw resultaat is:" . $a -= $b);
}
