<?php
	
	
	function html_menu( $arr_spec_list ){

		$html_menu = '';
		foreach ($arr_spec_list as $key => $arr_list) {
			$html_menu .= '<li class="nav-item dropdown">';

		    $html_menu .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Bancos
		        </a>';

		    $html_menu .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';

		    foreach ($arr_list as $spec_list => $label_spec_list) {

		        $html_menu .= '<a class="dropdown-item" href="' . $spec_list . '" data-spec_url="spec/' . $spec_list . '.yaml">' . $label_spec_list . '</a>';

		    }
		        
		    $html_menu .= '</div>';
		    $html_menu .= '</li>';
		}

		return $html_menu;

	}
	
	function html_home( $arr_spec_list ){

		$html_home = '';
		foreach ($arr_spec_list as $key => $arr_list) {
			
			$html_home .= '<div class="card" style="width: 18rem;">';

				$html_home .= '<div class="card-body">';
					$html_home .= '<h5 class="card-title">' . $key . '</h5>';

					$html_home .= '<ul class="list-group">';

				    foreach ($arr_list as $spec_list => $label_spec_list) {

				        $html_home .= '<a class="list-group-item list-group-item-action" href="' . $spec_list . '" data-spec_url="spec/' . $spec_list . '.yaml">' . $label_spec_list . '</a>';

				    }
					
					$html_home .= '</ul>';

				$html_home .= '</div>';
			
			$html_home .= '</div>';

		}

		return $html_home;

	}

?>