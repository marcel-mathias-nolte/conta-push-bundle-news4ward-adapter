<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   ContaoPushBundleNews4wardAdapterBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://marcel.live
 * @license   LGPL-3.0-or-later
 */

//namespace MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle;

$GLOBALS['TL_DCA']['tl_news4ward_article']['list']['operations']['sendPush'] = [
	'href' => 'act=edit&sendPush=1',
	'icon' => 'up.svg'
];