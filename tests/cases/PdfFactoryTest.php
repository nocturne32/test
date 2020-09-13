<?php declare(strict_types = 1);

namespace Tests\Cases;

use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;
use Tester\TestCase;
use Todo\Pdf\DI\PdfFactoryExtension;
use Todo\Pdf\PdfBuilder;
use Todo\Pdf\PdfBuilderFactory;

require __DIR__ . '/../bootstrap.php';

test(static function (): void {
	Assert::same(1, 1);
});
