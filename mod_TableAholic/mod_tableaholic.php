<?php
/*-------------------------------------------------------------------------------
# JD TableAholic for Joomla 2.5 & 3.x v1.0.0
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite 	= JURI::base();
$document = JFactory::getDocument();
$modbase = JURI::base(true).'/modules/mod_tableaholic/';
$document->addScript ($modbase.'assets/responsivetables.js');
$document->addStyleSheet($modbase.'assets/responsivetables.css');
$moduleID 	 	= $module->id;
?>
<style type="text/css"><?php echo $params->get('customCSS') ?></style>