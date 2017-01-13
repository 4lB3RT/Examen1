 <?php
 	
 	error_reporting(E_ALL);

 	ini_set('display_errors', 1);

 	require 'tauler.php';

 	$joc = new Tauler(5,5,0,'tomato');
 	$joc->escac(,2,'gray');
 	$joc->show();