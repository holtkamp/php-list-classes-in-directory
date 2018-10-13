<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use Test\App\Commands\AwesomesauceCommand;
use Test\App\Handlers\AwesomesauceHandler;
use function WyriHaximus\listClassesInDirectory;

final class FunctionalTest extends TestCase
{
    public function testListClassesInDirectory()
    {
        $classes = iterator_to_array(listClassesInDirectory(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'test-app' . DIRECTORY_SEPARATOR));
        self::assertSame([
            AwesomesauceCommand::class,
            AwesomesauceHandler::class,
        ], $classes);
    }
}