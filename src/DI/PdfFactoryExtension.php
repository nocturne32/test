<?php


namespace Todo\Pdf\DI;


use Joseki\Application\Responses\PdfResponseFactory;
use Nette\Application\LinkGenerator;
use Nette\Application\UI\ITemplateFactory;
use Nette\Bridges\ApplicationLatte\TemplateFactory;
use Nette\DI\CompilerExtension;
use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Todo\Pdf\IPdfBuilderFactory;
use Todo\Pdf\IPdfFactory;
use Todo\Pdf\IPdfTemplateFactory;
use Todo\Pdf\NetteTemplateFactory;
use Todo\Pdf\PdfBuilder;
use Todo\Pdf\PdfBuilderFactory;

class PdfFactoryExtension extends CompilerExtension
{
	public function getConfigSchema(): Schema
	{
		return Expect::structure([
			'debug' => Expect::bool(false),
		]);
	}

	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$config = $this->config;

		$builder->addDefinition($this->prefix('builderFactory'))
			->setType(IPdfBuilderFactory::class)
			->setFactory(PdfBuilderFactory::class);

		$builder->addDefinition($this->prefix('pdfResponseFactory'))
			->setType(PdfResponseFactory::class);

		$builder->addDefinition($this->prefix('templateFactory'))
			->setType(IPdfTemplateFactory::class)
			->setFactory(NetteTemplateFactory::class);
	}
}
