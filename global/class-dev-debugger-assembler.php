<?php
		
	class dev_debugger_assembler extends dev_debugger_utils {

		protected $flags = array('global');
		protected $dependencies = array(
			'global' => array(
				'class-dev-debugger-'
			)
		);

		function __construct(){
			//
		}

	}