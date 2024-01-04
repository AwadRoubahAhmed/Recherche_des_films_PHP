<?php

// Liste des films
$movies = array(
	0 =>array('movie'=>'Impitoyable','year'=>'1992','descriptions'=>'Retired Old West gunslinger William Munny reluctantly takes on one last job, with the help of his old partner and a young man.'),
	1 =>array('movie'=>'Reservoir Dogs ', 'year' => '1992','descriptions' => 'When a simple jewelry heist goes horribly wrong, the surviving criminals begin to suspect that one of them is a police informant.'),
	2 =>array('movie'=>'les evadés', 'year' => '1994', 'descriptions' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'),
	3 =>array('movie'=>' Fight Club ', 'year' => '1994','descriptions' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.'),
	4 =>array('movie'=>' Forrest Gump', 'year' => '1994','descriptions' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with'),
	5 =>array('movie'=>' Léon', 'year' => '1994','descriptions' => 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. Léon and Mathilda form an unusual relationship, as she becomes his protégée and learns the assassin'),
	6 =>array('movie'=>'La haine', 'year' => '1995','descriptions' => '24 hours in the lives of three young men in the French suburbs the day after a violent riot'),
	7 =>array('movie'=>'Seven', 'year' => '1995','descriptions' => 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives'),
	8 =>array('movie'=>' Usual Suspects', 'year' => '1995','descriptions' => 'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup'),
	9 =>array('movie'=>'La vie est belle ', 'year' => '1997','descriptions' => 'When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of will, humor, and imagination to protect his son from the dangers around their camp'),
	10 =>array('movie'=>'  Will Hunting', 'year'=>'1997','descriptions' => 'Will Hunting, a janitor at M.I.T., has a gift for mathematics, but needs help from a psychologist to find direction in his life.'),
	11 =>array('movie'=>'Avengers: Infinity War', 'year'=>'2018','descriptions' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe'),
	12 =>array('movie'=>'Spider-Man: New Generation', 'year'=>'2018','descriptions' => 'Teen Miles Morales becomes Spider-Man of his reality, crossing his path with five counterparts from other dimensions to stop a threat for all realities'),
	13 =>array('movie'=>'Capharnaum', 'year' => '2018','descriptions' => 'While serving a five-year sentence for a violent crime, a 12-year-old boy sues his parents for neglect'),
	14 =>array('movie'=>'Dangal', 'year' => '2016','descriptions' => 'Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression'),
	15 =>array('movie'=>'Tu ne tueras point ','year' => '2016','descriptions' => 'World War II American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot'),
	16 =>array('movie'=>'Mademoiselle', 'year' => '2016','descriptions' => 'A woman is hired as a handmaiden to a Japanese heiress, but secretly she is involved in a plot to defraud her'),
);
// ----------------
// Liste des années
$years = array();
foreach ($movies as $movie) 
{
	$years[] = $movie['year'];
}
$years = array_unique($years); // supprime les doublons
sort($years); // tri du plus petit au plus grand
// ----------------
// Récupération de l'année choisie
if (isset($_GET['year'])) { 
	$the_year = ($_GET['year']); // htmlspecialchars : pour l'AFFICHAGE
}
?>




<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FILM</title>
    <style>
        ul li {
            list-style: none;
        }
        ul li a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            font-size: 1.1rem;
        }
        ul li a:hover {
            color: orange;
        }
    </style>
    </head>
<body>
 <h1>RECHERCHE DE FILM</h1>
 
	<h2>Liste des années :</h2>
	<ul>
<?php 	foreach( $years as $year ){ ?>
		<li><a target="_blank" href="?year=<?= $year; ?>"><?= $year; ?></a></li>
<?php 	} ?>
	</ul>
<?php

if (isset($the_year)) 
{ 
	echo '<h2>Les films de l\'année : <b>'. $the_year.'</b></h2>';
	foreach ($movies as $movie) 
	{
		if ($movie['year'] == $the_year) 
		{
?>
		<div class="item">
			<h3><?= htmlspecialchars($the_year.' - '.$movie['movie']); ?></h3>
			<p><em>Description : </em><?= htmlspecialchars($movie['descriptions']); ?></p>
		</div>
<?php
		}
	}
}
?>
</body>
</html>