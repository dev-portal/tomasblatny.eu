<?php

namespace DevPortal\TomasBlatnyEu\Presenters;

use DevPortal\TomasBlatnyEu\Components\IContactControlFactory;
use Nette\Application\UI\Presenter;


class HomepagePresenter extends Presenter
{

	/** @var IContactControlFactory */
	private $contactControlFactory;


	public function __construct(IContactControlFactory $contactControlFactory)
	{
		parent::__construct();
		$this->contactControlFactory = $contactControlFactory;
	}


	protected function createComponentContactControl()
	{
		return $this->contactControlFactory->create();
	}

}
