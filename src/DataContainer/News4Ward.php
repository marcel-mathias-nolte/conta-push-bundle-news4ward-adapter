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

namespace MarcelMathiasNolte\ContaoPushBundleNews4wardAdapterBundle\DataContainer;

use Contao\Controller;
use Contao\CoreBundle\Framework\ContaoFramework;
use Psi\News4ward\Model\ArticleModel;
use Dreibein\ContaoPushBundle\Push\PushManager;
use Symfony\Component\HttpFoundation\RequestStack;

class News4Ward
{
	/**
	 * @var PushManager
	 */
	private $manager;

	/**
	 * @var RequestStack
	 */
	private $requestStack;

	/**
	 * @var ContaoFramework
	 */
	private $framework;

	/**
	 * News constructor.
	 *
	 * @param PushManager $manager
	 */
	public function __construct(PushManager $manager, RequestStack $requestStack, ContaoFramework $framework)
	{
		$this->manager = $manager;
		$this->requestStack = $requestStack;
		$this->framework = $framework;
	}

	public function onLoad($dc)
	{
		$request = $this->requestStack->getCurrentRequest();
		if (!$request->query->get('sendPush')) {
			return;
		}

		$this->framework->initialize();
		$controller = $this->framework->getAdapter(Controller::class);
		$adapter = $this->framework->getAdapter(ArticleModel::class);

		$model = $adapter->findByPk($dc->id);

		$title = $model->title;
		$body = \Soundasleep\Html2Text::convert($model->teaser);
		$url = sprintf(
			'%s/%s',
			$request->getSchemeAndHttpHost(),
			$controller->replaceInsertTags(sprintf('{{news4ward_url::%s}}', $dc->id))
		);

		$this->manager->sendNotification($title, $body, ['url' => $url]);
	}
}
