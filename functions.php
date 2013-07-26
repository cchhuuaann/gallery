<?php
	
	function showGallery() {
		global $nastaveni, $images,$typy, $odFoto;
		
		$vystup = '';
		
		if(is_dir($nastaveni['cestaMini'])) {
			
			if($dir = opendir($nastaveni['cestaMini'])) {
			
					while(($img = readdir($dir)) !== false) {
						
						$tmp = explode('.', $img);
						
						if(in_array(end($tmp), $typy)) {
							$images[] = $img;
						}
						
					}
					
					closedir($dir);
			} else {
				echo '<strong>Error:</strong> adresar "'.$nastaveni['cestaMini'].'" nelze otevrit.';
			}
			
		} else {
			echo '<strong>Error:</strong> adresar "'.$nastaveni['cestaMini'].'" neexistuje.';
		}
		
		if(!empty($images)) {
			
			$vystup .= '<div class="gallery">';
			
			for($i = $odFoto; $i < ($nastaveni['fotoNaStr'] + $odFoto); $i++) {
				
				if(!array_key_exists($i, $images)) {
					break;
				}
				
				$vystup .= '<div class="image">';
				
				$vystup .= '<a href="'.$nastaveni['cestaReal'].$images[$i].'">';
				
				$vystup .= '<img src="'.$nastaveni['cestaMini'].$images[$i].'" alt="" title="">';
				
				$vystup .= '</a>';
				
				$vystup .= '<a href=".mpo">MPO soubor</a>';
				
				$vystup .= '</div>';
			}
			
			$vystup .= '</div>';
		}
		
		return $vystup;
	}
	
	function vystup() {
		
		
		return showGallery();
	}
	