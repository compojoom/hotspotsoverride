<?php
/**
 * @package    Hotspots
 * @author     DanielDimitrov <daniel@compojoom.com>
 * @date       11.03.13
 *
 * @copyright  Copyright (C) 2008 - 2013 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

class PlgContentHotspotsoverride extends JPlugin
{
	public function onContentPrepareForm($form, $data)
	{
		if (!($form instanceof JForm) || ($form->getName() == 'com_hotspots.marker'))
		{
			// Add the extra fields to the form.
			JForm::addFormPath(dirname(__FILE__) . '/marker');
			$form->loadFile('marker', true);

			return true;
		}
	}
}