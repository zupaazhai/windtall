<?php

namespace Zupaazhai\Windtall\Tests\Components;

class AvatarTest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $expected = <<<'HTML'
        <div class="relative w-8 h-8 rounded-full inline-block bg-gray-200">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar />');
    }

    /** @test */
    public function specify_src()
    {
        $expected = <<<'HTML'
        <div class="relative w-8 h-8 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar src="woman.png" />');
    }

    /** @test */
    public function specify_size()
    {
        //Size as number
        $expected = <<<'HTML'
        <div class="relative w-12 h-12 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="12" src="woman.png" />');

        // Width x height
        $expected = <<<'HTML'
        <div class="relative w-12 h-14 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="12x14" src="woman.png" />');

        // Size wrong dimesion
        $expected = <<<'HTML'
        <div class="relative w-12 h-12 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="12x12x12x12" src="woman.png" />');

        // Size only width
        $expected = <<<'HTML'
        <div class="relative w-12 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="12x" src="woman.png" />');

        // Size only height
        $expected = <<<'HTML'
        <div class="relative h-12 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="x12" src="woman.png" />');

        // Size only x
        $expected = <<<'HTML'
        <div class="relative rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar size="x" src="woman.png" />');
    }

    /** @test */
    public function specify_alt()
    {
        $expected = <<<'HTML'
        <div class="relative w-8 h-8 rounded-full inline-block bg-gray-200">
            <img class="object-cover w-full h-full rounded-full" alt="This is woman pic" src="woman.png">
            <div class="absolute inset-0 rounded-full shadow-inner"></div>
        </div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-avatar alt="This is woman pic" src="woman.png" />');
    }
}
