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

namespace MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle\ContaoPushBundleNews4wardAdapterBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoPushBundleNews4wardAdapterBundle::class)
                ->setLoadAfter([ContaoPushBundle::class, 'news4ward']),
        ];
    }
}
