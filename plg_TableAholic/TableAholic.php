<!--[if IE 9 ]>
   <html class="ie9">
<![endif]-->
<!--[if !IE]>-->
   <html>
<!--<![endif]-->
<?php
/**
 * @version     1.0.0
 * @package     JD TableAholic
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      JoomDev (Formerly GraphicAholic) - https://joomdev.com
 */
defined('_JEXEC') or die('Restricted access');
jimport('joomla.utilities.utility');
class PlgContentTableaholic extends JPlugin {
	public function onContentPrepare($context, &$article, &$params, $page = 0) {
		$customCSS = $this->params->get('customCSS');
		$article->text = preg_replace( "'{responsive}'", ('<script src="plugins/content/TableAholic/assets/responsivetables.js"></script><style>'.$customCSS.'</style><link rel="stylesheet" type="text/css" href="plugins/content/TableAholic/assets/responsivetables.css" /></style>'), $article->text);
	}
}