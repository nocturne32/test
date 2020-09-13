<?php declare(strict_types=1);


namespace Todo\Pdf;


use Joseki\Application\Responses\PdfResponse;
use Joseki\Application\Responses\PdfResponseFactory;
use Nette\Application\LinkGenerator;
use Nette\Application\UI\ITemplate;
use Nette\Application\UI\ITemplateFactory;

class PdfBuilderFactory implements IPdfBuilderFactory
{
	/**
	 * @var ITemplate
	 */
	protected $templateFactory;
	/**
	 * @var PdfResponseFactory
	 */
	private $responseFactory;

	public function __construct(IPdfTemplateFactory $templateFactory, PdfResponseFactory $responseFactory)
	{
		$this->templateFactory = $templateFactory;
		$this->responseFactory = $responseFactory;
	}

	public function create(): PdfBuilder
	{
		$builder = new PdfBuilder();
		$builder->setTemplate($this->templateFactory->create());
		$builder->setPdfResponse($this->responseFactory->createResponse());

		return $builder;
	}
}


