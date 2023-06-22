<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];

// J'ajoute un mouton
$moutons[] = ['Gérard', 120];

// Je calcule la moyenne de la valeur de mes moutons
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
	$sumValMoutons += $mouton[1];
}
$nbMoutons = count($moutons);
$moyValMoutons = $sumValMoutons / $nbMoutons;
echo "Moyenne de la valeur de mes $nbMoutons moutons : $moyValMoutons" . PHP_EOL;

// Ajout de 100 moutons aléatoires
for ($j = 0; $j < 100; $j++) {
	$randNameMouton = generateRandomName(3, 15);
	$randValMouton = rand(10, 200);
	$moutons[] = [$randNameMouton, $randValMouton];
}

echo PHP_EOL;

// Je calcule à nouveau la moyenne
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
	$sumValMoutons += $mouton[1];
}
$nbMoutons = count($moutons);
$moyValMoutons = $sumValMoutons / $nbMoutons;
echo "Moyenne de la valeur de mes $nbMoutons moutons : $moyValMoutons";

// Fonction pour générer un nom aléatoire
function generateRandomName($minLength, $maxLength)
{
	$characters = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
	$nbChars = strlen($characters);
	$randNameMouton = "";
	$nbCharsNameMouton = rand($minLength, $maxLength);

	for ($k = 0; $k < $nbCharsNameMouton; $k++) {
		$randNameMouton .= $characters[rand(0, ($nbChars - 1))];
	}

	return $randNameMouton;
}

?>
