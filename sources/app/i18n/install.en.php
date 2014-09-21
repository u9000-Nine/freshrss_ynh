<?php
return array (
	'freshrss_installation'		=> 'Installation · FreshRSS',
	'freshrss'			=> 'FreshRSS',
	'installation_step'		=> 'Installation — step %d · FreshRSS',
	'steps'				=> 'Steps',
	'checks'			=> 'Checks',
	'general_configuration'	=> 'General configuration',
	'bdd_configuration'		=> 'Database configuration',
	'bdd_type'		=> 'Type of database',
	'version_update'		=> 'Update',
	'this_is_the_end'		=> 'This is the end',

	'ok'				=> 'Ok!',
	'congratulations'		=> 'Congratulations!',
	'attention'			=> 'Attention!',
	'damn'				=> 'Damn!',
	'oops'				=> 'Oops!',
	'next_step'			=> 'Go to the next step',

	'language_defined'		=> 'Language has been defined.',
	'choose_language'		=> 'Choose a language for FreshRSS',

	'javascript_is_better'		=> 'FreshRSS is more pleasant with JavaScript enabled',
	'php_is_ok'			=> 'Your PHP version is %s, which is compatible with FreshRSS',
	'php_is_nok'			=> 'Your PHP version is %s but FreshRSS requires at least version %s',
	'minz_is_ok'			=> 'You have the Minz framework',
	'minz_is_nok'			=> 'You lack the Minz framework. You should execute <em>build.sh</em> script or <a href="https://github.com/marienfressinaud/MINZ">download it on Github</a> and install in <em>%s</em> directory the content of its <em>/lib</em> directory.',
	'curl_is_ok'			=> 'You have version %s of cURL',
	'curl_is_nok'			=> 'You lack cURL (php5-curl package)',
	'pdo_is_ok'			=> 'You have PDO and at least one of the supported drivers (pdo_mysql, pdo_sqlite)',
	'pdo_is_nok'			=> 'You lack PDO or one of the supported drivers (pdo_mysql, pdo_sqlite)',
	'dom_is_ok'			=> 'You have the required library to browse the DOM',
	'dom_is_nok'			=> 'You lack a required library to browse the DOM (php-xml package)',
	'pcre_is_ok'			=> 'You have the required library for regular expressions (PCRE)',
	'pcre_is_nok'			=> 'You lack a required library for regular expressions (php-pcre)',
	'ctype_is_ok'			=> 'You have the required library for character type checking (ctype)',
	'ctype_is_nok'			=> 'You lack a required library for character type checking (php-ctype)',
	'cache_is_ok'			=> 'Permissions on cache directory are good',
	'log_is_ok'			=> 'Permissions on logs directory are good',
	'favicons_is_ok'		=> 'Permissions on favicons directory are good',
	'data_is_ok'			=> 'Permissions on data directory are good',
	'persona_is_ok'			=> 'Permissions on Mozilla Persona directory are good',
	'file_is_nok'			=> 'Check permissions on <em>%s</em> directory. HTTP server must have rights to write into',
	'fix_errors_before'		=> 'Fix errors before skip to the next step.',

	'general_conf_is_ok'		=> 'General configuration has been saved.',
	'random_string'			=> 'Random string',
	'change_value'			=> 'You should change this value by any other',
	'base_url'			=> 'Base URL',
	'do_not_change_if_doubt'	=> 'Don’t change if you doubt about it',

	'bdd_conf_is_ok'		=> 'Database configuration has been saved.',
	'bdd_conf_is_ko'		=> 'Verify your database information.',
	'host'				=> 'Host',
	'bdd'				=> 'Database',
	'prefix'			=> 'Table prefix',

	'update_start'			=> 'Start update process',
	'update_long'			=> 'This can take a long time, depending on the size of your database. You may have to wait for this page to time out (~5 minutes) and then refresh this page.',
	'update_end'			=> 'Update process is completed, now you can go to the final step.',


	'installation_is_ok'		=> 'The installation process was successful.<br />The final step will now attempt to delete any file and database backup created during the update process.<br />You may choose to skip this step by deleting <kbd>./data/do-install.txt</kbd> manually.',
	'finish_installation'		=> 'Complete installation',
	'install_not_deleted'		=> 'Something went wrong; you must delete the file <em>%s</em> manually.',
);
