<?php

// ---------------------------------------------------------------------
// sélecteur de langue
// ---------------------------------------------------------------------
function languages_list_header(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){

            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) echo '</a>';

        }
    }
}
?>