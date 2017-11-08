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

	class qa_html_theme_layer extends qa_html_theme_base 
	{
		
		function head_script()
		{
			qa_html_theme_base::head_script();
			if(qa_opt('q2apro_lightbox_enabled') && $this->template=='question') {
				$this->output('<script type="text/javascript" src="'.QA_HTML_THEME_LAYER_URLTOROOT.'script.js"></script>');
				// style to give images the mouse pointer
				$this->output('<style type="text/css">.entry-content img { cursor:pointer; } </style>');  
			}
		}
		
		function footer() {
			// default method call
			qa_html_theme_base::footer();
			
			if(qa_opt('q2apro_lightbox_enabled') && $this->template=='question') {
				// output lightbox for image popup at end of body, pseudo image data as img src for valid html (causing no server request)
				$this->output('<div id="lightbox-popup"> <div id="lightbox-center">  <img id="lightbox-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="Lightbox" />  </div> </div>');
			}
		}

	} // end qa_html_theme_layer
	

/*
	Omit PHP closing tag to help avoid accidental output
*/