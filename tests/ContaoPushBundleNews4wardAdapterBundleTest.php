<?php

/*
 * This file is part of ContaoPushBundleNews4wardAdapterBundle.
 *
 * @package   ContaoPushBundleNews4wardAdapterBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://marcel.live
 * @license   LGPL-3.0-or-later
 */

namespace MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle\Tests;

use PHPUnit\Framework\TestCase;

class ContaoPushBundleNews4wardAdapterBundleTest extends TestCase
{
	public function testCanBeInstantiated()
	{
		$bundle = new ContaoPushBundleNews4wardAdapterBundle();

		$this->assertInstanceOf('MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle\ContaoPushBundleNews4wardAdapterBundle', $bundle);
	}
}
