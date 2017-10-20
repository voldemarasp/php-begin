<?php

/*for ($i=0; $i < $argv[1]; $i++) {

	for ($j=0; $j < $argv[2] ; $j++) { 
		echo "#";
}
echo "\n";
}*/

function skaiciukai(int $a, int $b, int $c) {
	echo $a * $b * $c;
}

function show (string $a, int $b) {
	for ($i=0; $i < $b; $i++) { 
		echo $a;
	}
}


function draw (string $a, int $b, int $c) {
	for ($i=0; $i < $b; $i++) { 
		for ($n=0; $n < $c; $n++) { 
			echo $a;
		}
		echo "\n";
	}
}

function ratas (int $a, int $b, int $c) {
	$ratlankis = $a * 2.54;
	$padanga = $b / 10;
	$padangos_visas = ($padanga * 2) + $ratlankis;
	if ($padangos_visas < $c) { echo "padanga netepla"; } else { echo "viskas ciki briki"; }
}

function special_members() {
	for ($i=0; $i < 20; $i++) { 
		echo $i;
		if ($i%2 == 0 && $i != 0) { echo "dalinasi"; }
		echo "\n";
	}
}

function skaiciuok (int $a, int $b, string $c) {
	if ($c == "true") {
		for ($i=$a; $i <= $b; $i++) { 
			echo $i . "\n";
		}
	}
	if ($c == "false") {
		for ($i = $b; $i >= $a; $i--) { 
			echo $i . "\n";
		}
	}
}

function daugyba ($skaicius) {
	$arr = [];
	for ($i=1; $i < 10; $i++) { 

		array_push($arr, $skaicius * $i);
	}

	print_r($arr);
}

function daugyba_visi () {
	for ($i=1; $i < 10; $i++) { 
		daugyba($i);
	}
}

function get_volume ($x, $y, $z) {
	return $x * $y * $z;
}

function get_tanks ($volume, $tank_volume) {
	echo ceil($volume / $tank_volume);
}

function generate_volume () {
	for ($i=3; $i <= 20; $i++) { 
		echo get_volume($i, 20, 2) . "  " . get_tanks(get_volume($i, 20, 2), 200) . "\n";
	}
}

function plyteles_plotas ($x, $y, $z, $a, $b) {
	for ($i = 5.5; $i <= 6.5; $i += 0.1) { 
		$plyteles = ceil((($x * $i * 2) + ($y * $i * 2) + ($y * $x)) / ($a * $b));
		$pakai = ceil($plyteles / 9);
		echo $plyteles . " " . $pakai . " " . $i . "\n";
	}
}

function plyteles ($x, $y) {

}

function visi_username () {

	$userio_masyvas = [
		["username" => "PetrasP", "name" => "Petras", "surname" => "Petrauskas"],
		["username" => "JonasJ", "name" => "Jonas", "surname" => "Jonauskas"],
		["username" => "TomasT", "name" => "Tomas", "surname" => "Tomauskas"],
		["username" => "VytasV", "name" => "Vytas", "surname" => "Vytauskas"],
		["username" => "DaliaD", "name" => "Dalia", "surname" => "Daliauskaite"]
	];

	sort($userio_masyvas);

	foreach ($userio_masyvas as $useris) {
		echo "Vartotojo vardas: " . $useris["username"] . " ";
		echo "Vardas: " . $useris["name"] . " ";
		echo "Pavarde: " . $useris["surname"] . " ";
		echo "\n";
	}

}

function trys (int $a, int $b) {

	$starttime = microtime();

	for ($i=9; $i > 0 ; $i--) { 
		if ($i != $a && $i != $b) { 
			echo $i;
		}
		if ($i == $a || $i == $b) {
			for ($a=$i; $a >= 0; $a--) { 
				echo $a;
			}
		}
		echo "\n";
	}

	echo "laikas  " . (microtime() - $starttime);
}

function get_temp () {



	$temp = [28, 5, 3.5, -8, 6, 14, 20];
	$maziausias = $temp[0];

	foreach ($temp as $temperatura) {
		
		if ($maziausias > $temperatura) {
			$maziausias = $temperatura;
		}
	}
	echo $maziausias;
}


function dice ($dices) {

	$laikas_pradzia = microtime();

	$game = [];

	for ($i=1; $i <= $dices; $i++) { 
		array_push($game, rand(1, 6));
	}

	print_r($game);

	$laimingas = "Nelaimejote";
	$didziausias = 0;
	$laimejimas = [];
	if($dices > 2) {

	for ($i=0; $i < $dices; $i++) { 
		$pirmas_kauliukas = $game[$i];
		for ($b=0; $b < $dices; $b++) { 
		$antras_kauliukas = $game[$b];
		if ($i != $b && $pirmas_kauliukas == $antras_kauliukas) { 
			$laimingas = "Laimejote";
			if ($pirmas_kauliukas > $didziausias && !in_array($pirmas_kauliukas, $laimejimas) && $pirmas_kauliukas > 2) {
				$laimejimas[] += $pirmas_kauliukas;
			} 
		}
		}
	}

	} elseif ($dices == 1) { 
		echo "Mestas tik vienas kaulelis";
		$laimingas = "";
	} else {
		if ($game[0] == $game[1]) { $laimingas = "Laimejote"; }
	}

	$laimejimas_galutinis = array_sum($laimejimas) * 100;

	echo $laimingas . " jus laimejote " . $laimejimas_galutinis;
	
}


function get_closest_temp () {
	$temp = [6, -3, 5, -2, 20];
	$temp_cloasest = [];
	foreach ($temp as $temp_value) {
		$temp_cloasest[] += abs($temp_value);
	}
	sort($temp_cloasest);
	echo "ATSAKYMAS YRA " . $temp_cloasest[0];
	/*print_r($temp_cloasest);*/
}


function egzaminas (string $a) {
	$useriai = [
		["user" => "Petras", "pazimys" => rand(1, 10)],
		["user" => "Jonas", "pazimys" => rand(1, 10)],
		["user" => "Dzimis", "pazimys" => rand(1, 10)],
		["user" => "Zomsas", "pazimys" => rand(1, 10)],
	];

	foreach ($useriai as $user) {
		if ($user['user'] == $a) {
			$pazimys = $user["pazimys"];
			echo $a . " gavo " . $pazimys . "\n";
			echo "Maziau gavo:\n";
		}
	}
		foreach ($useriai as $user) {
		if ($user['pazimys'] < $pazimys) {
			echo $user["user"] . " " .$user["pazimys"] . "\n";
		}
	}
}

$fileName = array_shift($argv);
$userFunc = array_shift($argv);

call_user_func_array($userFunc, $argv);
