<?php

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