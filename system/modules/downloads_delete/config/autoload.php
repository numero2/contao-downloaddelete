<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Download Delete
 * @link    https://github.com/numero2/contao-downloaddelete
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'numero2',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'numero2\ContentDownloadsDelete' => 'system/modules/downloads_delete/elements/ContentDownloadsDelete.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_downloads_delete' => 'system/modules/downloads_delete/templates',
));
