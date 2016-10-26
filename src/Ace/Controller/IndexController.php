<?php

namespace Ace\Controller;

use Plume\Controller;

class IndexController extends Controller
{
	public function indexAction()
	{
		$this->getContainer()->get('logger')->info("完成");
		return $this->render('@Ace/index.html');
	}
}

?>
