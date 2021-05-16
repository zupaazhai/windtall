<?php

namespace Zupaazhai\Windtall\Tests\Components;

use Gajus\Dindent\Indenter;
use Orchestra\Testbench\TestCase;
use Zupaazhai\Windtall\Tests\InteractsWithViews;
use Zupaazhai\Windtall\WindtallServiceProvider;

abstract class ComponentTestCase extends TestCase
{
    use InteractsWithViews;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('view:clear');
    }

    /**
     * Get service provider
     *
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [WindtallServiceProvider::class];
    }

    /**
     * Asert component
     *
     * @param string $expected
     * @param string $template
     * @param array $data
     *
     * @return void
     */
    public function assertComponentRenders(string $expected, string $template, array $data = []): void
    {
        $indenter = new Indenter();
        $indenter->setElementType('h1', Indenter::ELEMENT_TYPE_INLINE);
        $indenter->setElementType('del', Indenter::ELEMENT_TYPE_INLINE);

        $blade = (string) $this->blade($template, $data);
        $indented = $indenter->indent($blade);
        $cleaned = str_replace(
            [' >', "\n/>", ' </div>', '> ', "\n>"],
            ['>', ' />', "\n</div>", ">\n    ", '>'],
            $indented,
        );

        $this->assertSame($expected, $cleaned);
    }
}
