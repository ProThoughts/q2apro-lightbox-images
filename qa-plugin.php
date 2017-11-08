<?php

/*
	Plugin Name: Lightbox Images
	Plugin URI: http://www.q2apro.com/plugins/lightbox
	Plugin Description: Provides a Lightbox Effect for all images in posts.
	Plugin Version: 1.0
	Plugin Date: 2014-03-21
	Plugin Author: q2apro.com
	Plugin Author URI: http://www.q2apro.com
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: http://www.q2apro.com/pluginupdate?id=60
	
	Licence: Copyright © q2apro.com - All rights reserved

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	// language file
	qa_register_plugin_phrases('q2apro-lightbox-lang-*.php', 'q2apro_lightbox_lang');

	// layer
	qa_register_plugin_layer('q2apro-lightbox-layer.php', 'q2apro Lightbox Layer');

	// admin
	qa_register_plugin_module('module', 'q2apro-lightbox-admin.php', 'q2apro_lightbox_admin', 'q2apro Lightbox Admin');
        

/*
	Omit PHP closing tag to help avoid accidental output
*/