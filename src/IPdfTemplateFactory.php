<?php


namespace Todo\Pdf;


use Nette\Application\UI\ITemplate;

interface IPdfTemplateFactory
{
	public function create(): ITemplate;
}
