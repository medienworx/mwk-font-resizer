<?php
 
 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-font-resizer
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://medienworx.eu/agb.html Commercial license
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'medienworx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'medienworx\ModuleMwkFontResizer'           => 'system/modules/mwk-font-resizer/src/medienworx/modules/ModuleMwkFontResizer.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_mwk_font_resizer'      		     => 'system/modules/mwk-font-resizer/templates',
));