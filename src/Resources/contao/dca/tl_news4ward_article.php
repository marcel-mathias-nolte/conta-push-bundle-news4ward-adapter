<?php

/*
 * This file is part of ContaoPushBundleNews4wardAdapterBundle.
 *
 * @package   ContaoPushBundleNews4wardAdapterBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://github.com/marcel-mathias-nolte
 * @license   LGPL-3.0-or-later
 */

namespace MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle;

$GLOBALS['TL_DCA']['tl_news4ward_article']['list']['operations']['sendPush'] = [
	'href' => 'act=edit&sendPush=1',
	'icon' => 'up.svg'
];
