<?php
/**
 * @author Tomáš Blatný
 */

namespace DevPortal\TomasBlatnyEu\Components;


use Nette\Application\UI\Control;


interface IContactControlFactory
{

	/** @return ContactControl */
	function create();

}


class ContactControl extends Control
{

	public function render()
	{
		$this->template->setFile(__DIR__ . '/ContactControl.latte');
		$this->template->render();
	}

}
