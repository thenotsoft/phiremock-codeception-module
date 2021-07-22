<?php

declare(strict_types=1);

use Codeception\Exception\ParseException;
use Mcustiel\Phiremock\Codeception\Util\ExpectationAnnotationParser;

final class ExpectationParserTestCest
{
    /** @var ExpectationAnnotationParser */
    private $parser;

    public function _before()
    {
        $this->parser = new ExpectationAnnotationParser(codecept_data_dir('_unique_expectations'));
    }

    public function jsonExtensionIsOptional(): void
    {
        $this->parser->parseExpectation("test_first_get");
        $this->parser->parseExpectation("test_first_get.json");
        $this->parser->parseExpectation("test_first_get.php");
    }

    public function expectationNotFoundThrowsParseError(UnitTester $I): void
    {
        $I->expectThrowable(ParseException::class, function () {
            $this->parser->parseExpectation("random.expectation");
        });
    }
}
