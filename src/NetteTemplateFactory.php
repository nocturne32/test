<?php


namespace Todo\Pdf;


use Nette\Application\LinkGenerator;
use Nette\Application\UI\ITemplate;
use Nette\Application\UI\ITemplateFactory;

class NetteTemplateFactory implements IPdfTemplateFactory
{
	/** @var ITemplateFactory */
	private $templateFactory;

	/** @var LinkGenerator */
	private $linkGenerator;

	public function __construct(ITemplateFactory $templateFactory, LinkGenerator $linkGenerator)
	{
		$this->templateFactory = $templateFactory;
		$this->linkGenerator = $linkGenerator;
	}

	public function create(): ITemplate
	{
		$template = $this->templateFactory->createTemplate();
		$template->getLatte()->addProvider('uiControl', $this->linkGenerator);

		return $template;
	}
}
