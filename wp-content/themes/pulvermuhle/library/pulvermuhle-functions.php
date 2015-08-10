<?php
// -------------------------------------------------------------------------------------
// Fonctions génériques
// -------------------------------------------------------------------------------------

function tronk($texte, $nbcars, $separ) {
    $max_caracteres=$nbcars;
    //épure html
        $phrase  = $texte;
        //! le traitement peut désactiver l'effet du plugin 'menu social icons'
        $orig = array("<p>", "</p>", "<b>", "</b>", "<strong>", "</strong>");
        $nouvo   = array("", "", "", "");
        $texte = str_replace($orig, $nouvo, $phrase);
        $texte = strip_tags($texte);
    // tronque
    if (strpbrk($texte, '<>')==false) {
        if (strlen($texte)>$max_caracteres){    
            $texte = substr($texte, 0, $max_caracteres);
            $position_espace = strrpos($texte, " ");
            $texte = substr($texte, 0, $position_espace);
            $texte = $texte.$separ;
        }
    }
    return $texte;
}

function tronkhard($texte, $nbcars, $separ) {
$max_caracteres=$nbcars;
//épure html
if (strlen($texte)>$max_caracteres){    
$texte = substr($texte, 0, $max_caracteres);
$texte = $texte.$separ;
}
return $texte;
}

function moisFR($mois){
    $enmois = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $frmois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    $mois=str_replace ( $enmois , $frmois , $mois );
    return $mois;
}


function dateFR($dateSQL) {
list($annee, $mois, $jour) = preg_split('[-]', $dateSQL);
$dateSQL= $jour.".".$mois.".".$annee."";
return $dateSQL;
}

function dateEN($dateFR) {
list($jour, $mois, $annee) = preg_split('[-]', $dateFR);
$dateFR= $annee.".".$mois.".".$jour."";
return $dateFR;
}


function dateFRtxt($dateSQL) {
list($annee, $mois, $jour) = preg_split('[-]', $dateSQL);
switch($mois)
  {
  case "01":
  $mois="janvier";
  break;
  case "02":
  $mois= "f&eacute;vrier";
  break;
  case "03":
  $mois= "mars";
  break;
  case "04":
  $mois= "avril";
  break;
  case "05":
  $mois= "mai";
  break;
  case "06":
  $mois= "juin"; 
  break;
  case "07":
  $mois= "juillet";
  break;
  case "08":
  $mois= "ao&ucirc;t";
  break;
  case "09":
  $mois= "septembre";
  break;
  case "10":
  $mois= "octobre";
  break;
  case "11":
  $mois= "novembre";
  break;
  case "12":
  $mois= "d&eacute;cembre"; 
  break;
  }
$dateSQL= $jour." ".$mois." ".$annee."";
return $dateSQL;
}

function monthFRtxt($mois) {
switch($mois)
  {
  case "01":
  $mois="janvier";
  break;
  case "02":
  $mois= "f&eacute;vrier";
  break;
  case "03":
  $mois= "mars";
  break;
  case "04":
  $mois= "avril";
  break;
  case "05":
  $mois= "mai";
  break;
  case "06":
  $mois= "juin"; 
  break;
  case "07":
  $mois= "juillet";
  break;
  case "08":
  $mois= "ao&ucirc;t";
  break;
  case "09":
  $mois= "septembre";
  break;
  case "10":
  $mois= "octobre";
  break;
  case "11":
  $mois= "novembre";
  break;
  case "12":
  $mois= "d&eacute;cembre"; 
  break;
  }
return $mois;
}

function urlLien($string) {
	$toRep=array("http://","https://");
	$rep=array("","");
	$string=str_replace($toRep,$rep,$string);
	$string=tronkhard($string, 30, "...");
	return $string;
}

// ---------------------------------------------------------------------
// sélecteur de langue
// ---------------------------------------------------------------------
function languages_list_header(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
	$selector = "";
	$separator = "&nbsp;|&nbsp;";
    if(!empty($languages)){
        foreach($languages as $l){

            if(!$l['active']) $selector.= '<a href="'.$l['url'].'">';
            $selector.= icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) $selector.= '</a>';
			$selector.= $separator;
        }
		$selector=substr($selector,0,-strlen($separator));
		echo $selector;
    }
}
?>