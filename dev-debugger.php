<?php

	/**
	 * Plugin Name: Dev Debugger
	 * Plugin URI: https://heybyte.github.io/wp-dev-debugger
	 * Description: Analyze every error
	 * Version: 0.1
	 * Author: Joachim Maquelin
	 * Author URI: https://github.com/heybyte
	 * License: GPLv3 or Later
	 */

	define('DEV_DEBUGGER_LOAD', true);
	define('DEV_DEBUGGER_BASE_PATH', dirname(__FILE__));

	include_once sprintf('%s/global/%s.php', DEV_DEBUGGER_BASE_PATH, 'class-dev-debugger-utils');
	include_once sprintf('%s/global/%s.php', DEV_DEBUGGER_BASE_PATH, 'class-dev-debugger-assembler');

	new dev_debugger_assembler();