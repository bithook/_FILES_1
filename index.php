<?php 

	$directory = __DIR__ . "\\test"; 

	// Derna variable smitha ($directory) khchina fiha l9ima dyal (__DIR__) .. achno hiya had __Dir__ 3wtani :(

		// __DIR__ : hia wa7ed lconstante saybatha lina l7ajja PHP daret fiha lien li fih lmilaf li 7na fat7in (index.php)
		// 			Ya3ni f l7ala dyalena howa : (C:\xampp\htdocs\_FILES_1) , we3lach daret PHP hadchi kamel hhhh, daba tchof 				3lach men be3d.

		// Mzyaaan : ohadik (\\test) dyalach ??
			//test : howa lmilaf jdid li bghina ndiro fih tajarib laysmeh lina. => 

		// ILA MAFHEMTICH MZN : kemel rah atfhem menli tkemel l9raya


	if (file_exists( $directory)) 
	{	 	
		// gelna l PHP wach kain chi milaf smito $directory flblasa  
		// li 7na fiha : (C:\xampp\htdocs\_FILES_1) : ila kan affichih
		echo "$directory : EXISTs<br>";

	}else
		{ 	// ila makanch had khayna (lmilaf ze3ma) dir had l3ibat :
			echo "Not exist<br>";
			mkdir($directory); 	// créer $directory
			echo "$directory : Created succesfuly.<br>";
		}

	$file = $directory."/file.php"; // créer $file
	file_put_contents($file , "DATA"); // mettez'y la chiane de carractères "DATA"

	// change permission
	chmod($file, 0444); echo "Mode Changed to [0444]<br>";


	// INFORMATION PESANTE :
	// -------------------

	// # Chmod() # est une fonction trés populaire chez les programmeur en PHP et Autres languages de programmation, 
		// elle permet de donner la permission au gent de lire, executer,
		// ou même écrire sur un fichier. et c'est logique, car vous ne 
		// voulez pas laisser les gents faire avec vos documents et scripts
		// hebergés sur Internet Ce Qu'ils veulent.
			// Les voici les permission possible que vous pouver donner :
				// r = read = 4	:;
				// w = write = 2 :;
				// x = execute = 1 ;:
					// rwx = 4+2+1 = 7		=> 		ya3ni had khona li 3ndo ra9m (7) rah i9der idir kolchi, had khona howa nta
					// 								aboras (Owner), kat3ni (mol_chi)  :)
					
					// r-x = 4+2+1 = 5		=> 		hadik li bin (r) Obin (x) rah machi na9is aboras, plutot kat3ni (w)=>write 
					// 								makinach
					
					// r-- = 4+2+1 = 4		=> 		(r--) kat3ni kayna ghit write, ya3ni li 3ando 4 rah howa li m9awda 3lih
					// 								hitach i9der ghir i9ra document fa9at la ghayr.

			// Ndozo daba lhad khotna chkonahoma
					// exemple : 755

					// 7  :  ra9m lwel dyal le Owner	=>		7 = r+w+x = 4+2+1 = (read)+(whrite)+(execure)

					// 5  :  ra9m tani dyal le lgroupe (7naya men ghir L'Owner) :

					// 5  :  ra9m talet dyal lakhrin 7ayed ghir l'Owner w L'Groupe o7seb m3a rasek ch7al men wa7ed ghadi 
					// 		 yconsulti la page dyalek	=>		5 = r+x = 4+1 = (read)+(execure)

	// FIN (INFORMATION_PESANTE)...


			// ila mafhemtich lcode lte7tani rah khassek li izid lik HHHH
if (is_writable($file)) {
	file_put_contents($file, "something");
}else{
	// Change Permissions
	chmod($file, 0744); echo "Mode Changed to [0744]<br>";
	file_put_contents($file, "Congratulation You finished the Exercice");
	include($file);
}

// END ...
// bON cOURAGE