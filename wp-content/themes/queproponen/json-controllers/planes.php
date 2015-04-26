<?php

class JSON_API_Planes_Controller {

	public function getSectores() {

		global $json_api;
		$terms = get_terms("sector");
		return $terms;
	}

	public function getPropuestas() {

		global $json_api; ;
		global $wpdb;
		$sector = $json_api -> query -> sector;
		$partidos = explode(',', $json_api -> query -> partidos);

		foreach ($partidos as $p) {
			$querystr = "
		    SELECT wposts.*, wpostmeta.*, wtax.term_taxonomy_id, wrels.term_taxonomy_id
		    FROM $wpdb->posts wposts
		    
		    INNER JOIN $wpdb->term_taxonomy wtax
		    ON wtax.term_id = $sector
		    
		    INNER JOIN $wpdb->term_relationships wrels 
		    ON  wrels.term_taxonomy_id = wtax.term_taxonomy_id
		    
		    LEFT JOIN $wpdb->postmeta wpostmeta
		    ON wpostmeta.post_id = wposts.ID
		    
		    WHERE wposts.post_type = 'likan_planes'
		    AND wrels.object_id = wposts.ID
		    
		    AND wposts.post_title != 'Auto Draft'
		    AND wposts.post_status = 'publish'
		    AND wpostmeta.meta_key = 'partido_politico'
		    AND wpostmeta.meta_value LIKE '$p%'
		    ORDER BY wposts.post_title ASC
		    
		   
		 	";
			
			//echo $querystr;

			//$propuestas = $json_api -> introspector -> get_results($querystr, OBJECT);
			$propuestas[$p] = $wpdb -> get_results($querystr, OBJECT);

		}
	

		return $propuestas;
	}

}
?>