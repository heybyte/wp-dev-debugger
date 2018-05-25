<?php
	
	class dev_debugger_utils {

		private $dependencies_loaded = array();

		protected function load_dependencies($dependencies, $flags = array()){
			foreach ($dependencies as $areaID => $area) {
				if(in_array($areaID, $flags)){
					foreach ($area as $itemID => $item_name) {
						$file_path = sprintf('%s/%s/%s.php', DEV_DEBUGGER_BASE_PATH, $areaID, $item_name);

						if(file_exists($file_path)){
							include_once $file_path;
							array_push($this->dependencies_loaded, $file_path);
						}
					}
				}
			}
		}

	}