<?php declare(strict_types=1);


namespace Todo\Pdf;


use Joseki\Application\Responses\PdfResponse;
use Joseki\Application\Responses\PdfResponseFactory;
use Nette\Application\LinkGenerator;
use Nette\Application\UI\ITemplate;
use Nette\Application\UI\ITemplateFactory;
use Nette\Bridges\ApplicationLatte\Template;

class PdfBuilder
{
	/**
	 * @var ITemplate
	 */
	protected $template;

	/**
	 * @var PdfResponse
	 */
	protected $pdfResponse;

	/**
	 * @return ITemplate
	 */
	public function getTemplate(): ITemplate
	{
		return $this->template;
	}

	/**
	 * @param ITemplate $template
	 */
	public function setTemplate(ITemplate $template): void
	{
		$this->template = $template;
	}


	public function setPdfResponse(PdfResponse $pdfResponse): PdfBuilder
	{
		$this->pdfResponse = clone $pdfResponse;

		return $this;
	}

	public function getPdfResponse(): PdfResponse
	{
		return $this->pdfResponse;
	}


}


