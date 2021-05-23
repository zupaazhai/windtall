<?php

namespace Zupaazhai\Windtall\Tests\Components;

class AlertTest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->assertComponentRenders(
            '<div class="p-4 relative rounded-lg leading-5 bg-purple-50 text-purple-900"></div>',
            '<x-wt-alert />'
        );
    }

    /** @test */
    public function specify_varient()
    {
        // Primary
        $this->assertComponentRenders(
            '<div class="p-4 relative rounded-lg leading-5 bg-purple-50 text-purple-900"></div>',
            '<x-wt-alert varient="primary" />'
        );

        // Success
        $this->assertComponentRenders(
            '<div class="p-4 relative rounded-lg leading-5 bg-green-50 text-green-900"></div>',
            '<x-wt-alert varient="success" />'
        );

        // Neutral
        $this->assertComponentRenders(
            '<div class="p-4 relative rounded-lg leading-5 bg-gray-50 text-gray-900"></div>',
            '<x-wt-alert varient="neutral" />'
        );

        // Warning
        $this->assertComponentRenders(
            '<div class="p-4 relative rounded-lg leading-5 bg-yellow-50 text-yellow-900"></div>',
            '<x-wt-alert varient="warning" />'
        );
    }

    /** @test */
    public function it_can_be_slotted()
    {
        $expected = <<<'HTML'
        <div class="p-4 relative rounded-lg leading-5 bg-purple-50 text-purple-900">This is aler message</div>
        HTML;

        $this->assertComponentRenders($expected, '<x-wt-alert>This is aler message</x-wt-alert>');
    }
}
